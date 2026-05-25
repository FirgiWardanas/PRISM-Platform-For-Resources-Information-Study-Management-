<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $dosens = Dosen::with('bidangSpesialis','riwayatPendidikans','prodi')->get();
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
        'nama_dosen' => 'required',
        'status_jabatan' => 'required',
        'NIK' => 'required',
        'id_prodi' => 'required',
        'email' => 'required|email',
        'riwayat_pendidikan' => 'required|array',
        'riwayat_pendidikan.*' => 'required',
        'bidang_spesialis' => 'required|array',
        'bidang_spesialis.*' => 'required',
    ]);

        $dosen = Dosen::create([
        'nama_dosen' => $request->nama_dosen,
        'status_jabatan' => $request->status_jabatan,
        'id_prodi' => $request->id_prodi,
        'email' => $request->email,
        'NIK' => $request->NIK,

    ]);

    foreach ($request->riwayat_pendidikan as $riwayat) {
        RiwayatPendidikan::create([
            'id_dosen' => $dosen->id_dosen,
            'deskripsi_riwayat' => $riwayat
        ]);
    }

    foreach ($request->bidang_spesialis as $bidang) {
        BidangSpesialis::create([
            'id_dosen' => $dosen->id_dosen,
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
