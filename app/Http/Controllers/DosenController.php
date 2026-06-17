<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index()
    {   
        $dosens = Dosen::with('bidangSpesialis','riwayatPendidikans','prodi')->paginate(2);
        $list_prodi = Prodi::all();
        return view('admin.ketua_jurusan.dosen' ,compact('dosens','list_prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'nama_dosen'          => 'required',
        'status_jabatan'      => 'required',
        'NIK'                 => 'required',
        'id_prodi'            => 'required',
        'email'               => 'required|email',
        'pendidikan_terakhir' => 'required',
        'riwayat_pendidikan'  => 'required|array',
        'riwayat_pendidikan.*'=> 'required',
        'bidang_spesialis'    => 'required|array',
        'bidang_spesialis.*'  => 'required',
        'foto_dosen'          => 'required|mimes:jpeg,jpg,png|max:2048'
    ]);

    $path = $request->file('foto_dosen')->store('foto-dosen', 'public');

    $dosen = Dosen::create([
        'nama_dosen'         => $request->nama_dosen,
        'status_jabatan'     => $request->status_jabatan,
        'id_prodi'           => $request->id_prodi,
        'email'              => $request->email,
        'NIK'                => $request->NIK,
        'foto_dosen'         => $path,
        'jenjang_pendidikan' => $request->pendidikan_terakhir, // ← ini yang kurang
    ]);

    foreach ($request->riwayat_pendidikan as $riwayat) {
        RiwayatPendidikan::create([
            'id_dosen'          => $dosen->id_dosen,
            'deskripsi_riwayat' => $riwayat
        ]);
    }

    foreach ($request->bidang_spesialis as $bidang) {
        BidangSpesialis::create([
            'id_dosen'        => $dosen->id_dosen,
            'deskripsi_bidang' => $bidang
        ]);
    }

    return redirect()->back();
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_dosen'            => 'required',
            'status_jabatan'        => 'required',
            'NIK'                   => 'required',
            'id_prodi'              => 'required',
            'email'                 => 'required|email',
            'jenjang_pendidikan'    => 'required',
            'riwayat_pendidikan'    => 'required|array',
            'riwayat_pendidikan.*'  => 'required',
            'bidang_spesialis'      => 'required|array',
            'bidang_spesialis.*'    => 'required',
        ]);

        $dosen = Dosen::findOrFail($id);

        if ($request->hasFile('foto_dosen')) {

            if ($dosen->foto_dosen) {
                Storage::disk('public')->delete($dosen->foto_dosen);
            }

            $path = $request->file('foto_dosen')
                            ->store('foto-dosen', 'public');
        } else {
            $path = $dosen->foto_dosen;
        }

        $dosen->update([
            'nama_dosen'         => $request->nama_dosen,
            'status_jabatan'     => $request->status_jabatan,
            'id_prodi'           => $request->id_prodi,
            'email'              => $request->email,
            'NIK'                => $request->NIK,
            'foto_dosen'         => $path,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
        ]);

        // riwayat pendidikan
        $dosen->riwayatPendidikans()->delete();

        foreach ($request->riwayat_pendidikan as $riwayat) {

            if (!empty($riwayat)) {

                RiwayatPendidikan::create([
                    'id_dosen'           => $dosen->id_dosen,
                    'deskripsi_riwayat'  => $riwayat,
                ]);
            }
        }

        // bidang spesialis
        $dosen->bidangSpesialis()->delete();

        foreach ($request->bidang_spesialis as $bidang) {

            if (!empty($bidang)) {

                BidangSpesialis::create([
                    'id_dosen'          => $dosen->id_dosen,
                    'deskripsi_bidang'  => $bidang,
                ]);
            }
        }

        return redirect()->back()
            ->with('success', 'Data dosen berhasil diperbarui');
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

        return redirect()->back();
    }


    
}
