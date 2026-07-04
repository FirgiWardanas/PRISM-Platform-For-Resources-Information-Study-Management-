<?php

namespace App\Http\Controllers;

use App\Models\DetailProdi;
use App\Models\Kustomisasi;
use App\Models\ProfilLulusan;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KustomisasiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with(['kustomisasi', 'detailProdi.profilLulusans'])
            ->where('id_prodi', auth()->guard()->user()->id_prodi)
            ->firstOrFail();

        return view('admin.tim_kurikulum.kustomisasi', compact('prodi'));
    }

    public function store(Request $request)
   {
    $idProdi = auth()->guard()->user()->id_prodi;
    
    // Kalau kustomisasi sudah ada, jalankan logic update langsung
    $this->simpanData($request, $idProdi);
    
    return redirect()->back()->with('success', 'Kustomisasi berhasil disimpan.');
    }

    private function simpanData(Request $request, $idProdi)
    {
        $prodi = Prodi::findOrFail($idProdi);

        $request->validate([
            'deskripsi_prodi'  => 'nullable|string',
            'visi'             => 'nullable|string',
            'misi'             => 'nullable|string',

            'logo'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ilustrasi'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'icon_lulusan'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'primary_color'    => 'nullable|string|max:20',
            'secondary_color'  => 'nullable|string|max:20',
            'tertiary_color'   => 'nullable|string|max:20',
            'quaternary_color' => 'nullable|string|max:20',

            'status_prodi'     => 'nullable|in:draft,published',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Jika status saat ini Published
        |--------------------------------------------------------------------------
        */
        if (
            $prodi->status_prodi === 'published' &&
            $request->status_prodi === 'published'
        ) {
            return redirect()->back()->with(
                'error',
                'Data yang sudah dipublikasikan tidak dapat diubah. Ubah status ke Draft terlebih dahulu.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Validasi tambahan saat Publish
        |--------------------------------------------------------------------------
        */
        if ($request->status_prodi === 'published') {

            $detailProdi = DetailProdi::where('id_prodi', $idProdi)->first();

            $request->validate([
                'deskripsi_prodi'  => 'required',
                'visi'             => 'required',
                'misi'             => 'required',
                'primary_color'    => 'required',
                'secondary_color'  => 'required',
                'tertiary_color'   => 'required',
                'quaternary_color' => 'required',
            ], [
                'deskripsi_prodi.required'  => 'Deskripsi prodi wajib diisi sebelum publish.',
                'visi.required'             => 'Visi wajib diisi sebelum publish.',
                'misi.required'             => 'Misi wajib diisi sebelum publish.',
                'primary_color.required'    => 'Warna utama wajib diisi sebelum publish.',
                'secondary_color.required'  => 'Warna sekunder wajib diisi sebelum publish.',
                'tertiary_color.required'   => 'Warna tersier wajib diisi sebelum publish.',
                'quaternary_color.required' => 'Warna kuartener wajib diisi sebelum publish.',
            ]);

            if (
                !$detailProdi ||
                !$detailProdi->logo ||
                !$detailProdi->ilustrasi
            ) {
                return redirect()->back()->with(
                    'error',
                    'Logo dan ilustrasi wajib diisi sebelum publish.'
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan Kustomisasi
        |--------------------------------------------------------------------------
        */
        Kustomisasi::updateOrCreate(
            ['id_prodi' => $idProdi],
            [
                'primary_color'    => $request->primary_color,
                'secondary_color'  => $request->secondary_color,
                'tertiary_color'   => $request->tertiary_color,
                'quaternary_color' => $request->quaternary_color,
            ]
        );

        $detailProdi = DetailProdi::firstOrNew([
            'id_prodi' => $idProdi
        ]);

        $detailProdi->deskripsi_prodi = $request->deskripsi_prodi;
        $detailProdi->visi            = $request->visi;
        $detailProdi->misi            = $request->misi;

        if ($request->hasFile('logo')) {

            if ($detailProdi->logo) {
                Storage::disk('public')->delete($detailProdi->logo);
            }

            $detailProdi->logo = $request->file('logo')
                ->store('prodi/logo', 'public');
        }

        if ($request->hasFile('ilustrasi')) {

            if ($detailProdi->ilustrasi) {
                Storage::disk('public')->delete($detailProdi->ilustrasi);
            }

            $detailProdi->ilustrasi = $request->file('ilustrasi')
                ->store('prodi/ilustrasi', 'public');
        }

        if ($request->hasFile('icon_lulusan')) {

            if ($detailProdi->icon_lulusan) {
                Storage::disk('public')->delete($detailProdi->icon_lulusan);
            }

            $detailProdi->icon_lulusan = $request->file('icon_lulusan')
                ->store('prodi/icon', 'public');
        }

        $detailProdi->save();

        if ($request->filled('status_prodi')) {

            $prodi->update([
                'status_prodi' => $request->status_prodi,
            ]);

        }
    }

    // Tambah profil lulusan
    public function storeProfilLulusan(Request $request)
    {

    $request->validate([
        'judul_lulusan'     => 'required|string|max:255',
        'deskripsi_lulusan' => 'required|string',
        'icon_lulusan'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ], [
        'judul_lulusan.required'     => 'Judul profil lulusan wajib diisi.',
        'judul_lulusan.string'       => 'Judul profil lulusan harus berupa teks.',
        'judul_lulusan.max'          => 'Judul profil lulusan maksimal 255 karakter.',

        'deskripsi_lulusan.required' => 'Deskripsi profil lulusan wajib diisi.',
        'deskripsi_lulusan.string'   => 'Deskripsi profil lulusan harus berupa teks.',

        'icon_lulusan.image'         => 'Ikon lulusan harus berupa gambar.',
        'icon_lulusan.mimes'         => 'Ikon lulusan harus berformat JPG, JPEG, PNG, atau WEBP.',
        'icon_lulusan.max'           => 'Ukuran ikon lulusan maksimal 2 MB.',
    ]);

        $idProdi = auth()->guard()->user()->id_prodi;

        $prodi = Prodi::findOrFail($idProdi);
        if ($prodi->status_prodi === 'published') {
            return redirect()->back()
                ->with('error', 'Data profil lulusan tidak dapat diubah saat status Program Studi dipublikasikan. Silakan ubah status menjadi Draft terlebih dahulu.');
        }

        $detailProdi = DetailProdi::firstOrCreate(['id_prodi' => $idProdi]);

        $data = [
            'id_detail_prodi'   => $detailProdi->id_detail_prodi,
            'judul_lulusan'     => $request->judul_lulusan,
            'deskripsi_lulusan' => $request->deskripsi_lulusan,
        ];

        if ($request->hasFile('icon_lulusan')) {
            $data['icon_lulusan'] = $request->file('icon_lulusan')->store('profil_lulusan/icon', 'public');
        }

        ProfilLulusan::create($data);

        return redirect()->back()->with('success', 'Profil lulusan berhasil ditambahkan.');
    }

    // Hapus profil lulusan
    public function destroyProfilLulusan(string $id)
    {
        $profilLulusan = ProfilLulusan::findOrFail($id);
        $prodi = $profilLulusan->detailProdi->prodi;
        if ($prodi->status_prodi === 'published') {
            return redirect()->back()
                ->with('error', 'Data profil lulusan tidak dapat diubah saat status Program Studi dipublikasikan. Silakan ubah status menjadi Draft terlebih dahulu.');
        }
        if ($profilLulusan->icon_lulusan) {
        Storage::disk('public')->delete($profilLulusan->icon_lulusan);
        }
        $profilLulusan->delete();

        return redirect()->back()
            ->with('success', 'Profil lulusan berhasil dihapus.');
    }

    // Edit profil lulusan
    public function updateProfilLulusan(Request $request, string $id)
   {
    $request->validate([
        'judul_lulusan'     => 'required|string|max:255',
        'deskripsi_lulusan' => 'required|string',
        'icon_lulusan'      => 'nullable|image|max:2048',
    ]);

    $profil = ProfilLulusan::where('id_lulusan', $id)->firstOrFail();
    $prodi = $profil->detailProdi->prodi;
    if ($prodi->status_prodi === 'published') {
        return redirect()->back()
            ->with('error', 'Data profil lulusan tidak dapat diubah saat status Program Studi dipublikasikan. Silakan ubah status menjadi Draft terlebih dahulu.');
    }

    $data = [
        'judul_lulusan'     => $request->judul_lulusan,
        'deskripsi_lulusan' => $request->deskripsi_lulusan,
    ];

    if ($request->hasFile('icon_lulusan')) {
        if ($profil->icon_lulusan) {
            Storage::disk('public')->delete($profil->icon_lulusan);
        }
        $data['icon_lulusan'] = $request->file('icon_lulusan')
            ->store('profil_lulusan/icon', 'public');
    }

    $profil->update($data);

    return redirect()->back()->with('success', 'Profil lulusan berhasil diperbarui.');
    }
}