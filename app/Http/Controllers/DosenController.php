<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\RiwayatPendidikan;
use App\Models\BidangSpesialis;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
            $search  = $request->get('search');
            $prodi   = $request->get('prodi');
            $jabatan = $request->get('jabatan');

            $dosens = Dosen::with('bidangSpesialis','riwayatPendidikans','prodi')
                    ->when($search, fn($q) => $q->where('nama_dosen', 'LIKE', "%{$search}%"))
                    ->when($prodi,  fn($q) => $q->where('id_prodi', $prodi))
                    ->when($jabatan, fn($q) => $q->where('status_jabatan', $jabatan))
            ->paginate(4)
            ->withQueryString();

            $list_prodi = Prodi::all();

            return view('admin.ketua_jurusan.dosen' ,compact('dosens','list_prodi'));
        }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'nama_dosen'           => 'required',
        'status_jabatan'       => 'required',
        'NIK'                  => 'required|unique:dosen,NIK',
        'id_prodi'             => 'required',
        'email'                => 'required|email|unique:dosen,email',
        'pendidikan_terakhir'  => 'required',
        'riwayat_pendidikan'   => 'required|array',
        'riwayat_pendidikan.*' => 'required',
        'bidang_spesialis'     => 'required|array',
        'bidang_spesialis.*'   => 'required',
        'foto_dosen'           => 'required|mimes:jpeg,jpg,png|max:2048'
    ], [

        'nama_dosen.required' => 'Nama dosen wajib diisi.',

        'status_jabatan.required' => 'Status jabatan wajib dipilih.',

        'NIK.required' => 'NIK wajib diisi.',
        'NIK.unique' => 'NIK sudah digunakan.',

        'id_prodi.required' => 'Program studi wajib dipilih.',

        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',

        'pendidikan_terakhir.required' => 'Pendidikan terakhir wajib dipilih.',

        'riwayat_pendidikan.required' => 'Riwayat pendidikan wajib diisi.',
        'riwayat_pendidikan.array' => 'Riwayat pendidikan tidak valid.',
        'riwayat_pendidikan.*.required' => 'Riwayat pendidikan tidak boleh kosong.',

        'bidang_spesialis.required' => 'Bidang spesialis wajib diisi.',
        'bidang_spesialis.array' => 'Bidang spesialis tidak valid.',
        'bidang_spesialis.*.required' => 'Bidang spesialis tidak boleh kosong.',

        'foto_dosen.required' => 'Foto dosen wajib diunggah.',
        'foto_dosen.mimes' => 'Foto harus berformat JPG, JPEG, atau PNG.',
        'foto_dosen.max' => 'Ukuran foto maksimal 2 MB.',
    ]);

    // Upload foto dilakukan di luar transaksi karena filesystem bukan bagian DB.
    // Jika transaksi DB gagal, foto yang sudah terupload akan dihapus kembali.
    $path = null;

    try {

        $path = $request->file('foto_dosen')
            ->store('foto-dosen', 'public');

        DB::transaction(function () use ($request, $path) {

            $dosen = Dosen::create([
                'nama_dosen'         => $request->nama_dosen,
                'status_jabatan'     => $request->status_jabatan,
                'id_prodi'           => $request->id_prodi,
                'email'              => $request->email,
                'NIK'                => $request->NIK,
                'foto_dosen'         => $path,
                'jenjang_pendidikan' => $request->pendidikan_terakhir,
            ]);

            foreach ($request->riwayat_pendidikan as $riwayat) {
                RiwayatPendidikan::create([
                    'id_dosen'          => $dosen->id_dosen,
                    'deskripsi_riwayat' => $riwayat,
                ]);
            }

            foreach ($request->bidang_spesialis as $bidang) {
                BidangSpesialis::create([
                    'id_dosen'         => $dosen->id_dosen,
                    'deskripsi_bidang' => $bidang,
                ]);
            }

        }); 

        return redirect()
            ->back()
            ->with('success', 'Data dosen berhasil ditambahkan.');

    } catch (\Exception $e) {

        // Jika transaksi DB gagal, hapus foto yang sudah terlanjur diupload
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat menyimpan data dosen.');

    }
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $request->validate([
        'nama_dosen'            => 'required',
        'status_jabatan'        => 'required',
        'NIK'                   => 'required|unique:dosen,NIK,' . $id . ',id_dosen',
        'id_prodi'              => 'required',
        'email'                 => 'required|email|unique:dosen,email,' . $id . ',id_dosen',
        'jenjang_pendidikan'    => 'required',
        'riwayat_pendidikan'    => 'required|array',
        'riwayat_pendidikan.*'  => 'required',
        'bidang_spesialis'      => 'required|array',
        'bidang_spesialis.*'    => 'required',
        'foto_dosen'            => 'nullable|mimes:jpeg,jpg,png|max:2048'
    ], [

        'nama_dosen.required' => 'Nama dosen wajib diisi.',

        'status_jabatan.required' => 'Status jabatan wajib dipilih.',

        'NIK.required' => 'NIK wajib diisi.',
        'NIK.unique' => 'NIK sudah digunakan.',

        'id_prodi.required' => 'Program studi wajib dipilih.',

        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',

        'jenjang_pendidikan.required' => 'Pendidikan terakhir wajib dipilih.',

        'riwayat_pendidikan.required' => 'Riwayat pendidikan wajib diisi.',
        'riwayat_pendidikan.array' => 'Riwayat pendidikan tidak valid.',
        'riwayat_pendidikan.*.required' => 'Riwayat pendidikan tidak boleh kosong.',

        'bidang_spesialis.required' => 'Bidang spesialis wajib diisi.',
        'bidang_spesialis.array' => 'Bidang spesialis tidak valid.',
        'bidang_spesialis.*.required' => 'Bidang spesialis tidak boleh kosong.',

        'foto_dosen.mimes' => 'Foto harus berformat JPG, JPEG, atau PNG.',
        'foto_dosen.max' => 'Ukuran foto maksimal 2 MB.',
    ]);

    $pathBaru = null; // untuk cleanup jika transaksi gagal

    try {

        $dosen    = Dosen::with(['riwayatPendidikans', 'bidangSpesialis'])->findOrFail($id);
        $pathLama = $dosen->foto_dosen;
        $hasFile  = $request->hasFile('foto_dosen');

        // Upload foto baru di luar transaksi (filesystem bukan bagian DB)
        if ($hasFile) {
            $pathBaru = $request->file('foto_dosen')->store('foto-dosen', 'public');
        }

        $newRiwayat = array_values(array_filter($request->riwayat_pendidikan ?? [], fn($val) => !empty($val)));
        $newBidang  = array_values(array_filter($request->bidang_spesialis  ?? [], fn($val) => !empty($val)));

        $oldRiwayat    = $dosen->riwayatPendidikans->pluck('deskripsi_riwayat')->toArray();
        $oldBidang     = $dosen->bidangSpesialis->pluck('deskripsi_bidang')->toArray();
        $riwayatChanged = ($oldRiwayat !== $newRiwayat);
        $bidangChanged  = ($oldBidang  !== $newBidang);

        $dosen->fill([
            'nama_dosen'         => $request->nama_dosen,
            'status_jabatan'     => $request->status_jabatan,
            'id_prodi'           => $request->id_prodi,
            'email'              => $request->email,
            'NIK'                => $request->NIK,
            'foto_dosen'         => $hasFile ? $pathBaru : $pathLama,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
        ]);

        if (!$hasFile && !$dosen->isDirty() && !$riwayatChanged && !$bidangChanged) {
            // Hapus foto baru jika tidak jadi dipakai
            if ($pathBaru) {
                Storage::disk('public')->delete($pathBaru);
            }
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Tidak ada data yang diubah.');
        }

        DB::transaction(function () use ($dosen, $newRiwayat, $newBidang) {

            $dosen->save();

            // Hapus riwayat lama → isi ulang dengan yang baru
            $dosen->riwayatPendidikans()->delete();
            foreach ($newRiwayat as $riwayat) {
                RiwayatPendidikan::create([
                    'id_dosen'          => $dosen->id_dosen,
                    'deskripsi_riwayat' => $riwayat,
                ]);
            }

            // Hapus bidang lama → isi ulang dengan yang baru
            $dosen->bidangSpesialis()->delete();
            foreach ($newBidang as $bidang) {
                BidangSpesialis::create([
                    'id_dosen'         => $dosen->id_dosen,
                    'deskripsi_bidang' => $bidang,
                ]);
            }

        });

        // Transaksi berhasil → hapus foto lama jika ada foto baru
        if ($hasFile && $pathLama) {
            Storage::disk('public')->delete($pathLama);
        }

        return redirect()
            ->back()
            ->with('success', 'Data dosen berhasil diperbarui.');

    } catch (\Exception $e) {

        // Transaksi DB gagal → hapus foto baru yang sudah terlanjur diupload
        if ($pathBaru && Storage::disk('public')->exists($pathBaru)) {
            Storage::disk('public')->delete($pathBaru);
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat memperbarui data dosen.');

    }
}

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        // hapus file foto
        if (
            $dosen->foto_dosen &&
            Storage::disk('public')->exists($dosen->foto_dosen)
        ) {
            Storage::disk('public')->delete($dosen->foto_dosen);
        }

        // hapus dosen
        $dosen->delete();

        return redirect()->back()->with('success','Berhasil Menghapus Data Dosen');
    }

}
