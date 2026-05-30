<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurikulums = Kurikulum::with('prodi','detailKurikulums')->where('id_prodi',auth()->guard()->id_prodi)->get();
        return view('admin.tim_kurikulum.kurikulum',compact('kurikulums'));
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
            'nama_kurikulum' => 'required',
            'tahun_mulai' => 'required',
            'total_semester' => 'required',
        ]); 

        $idProdi = auth()->guard()->user()->id_prodi;

        Kurikulum::where('id_prodi', $idProdi)
        ->update([
            'status_kurikulum' => 'tidak aktif'
        ]);

        Kurikulum::create([
            'id_prodi' => $idProdi,
            'nama_kurikulum' => $request->nama_kurikulum,
            'tahun_mulai' => $request->tahun_mulai,
            'total_semester' => $request->total_semester,
            'status_kurikukum' => $request->status_kurikulum
        ]);

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
    $request->validate([
        'nama_kurikulum' => 'required',
        'tahun_mulai' => 'required',
        'total_semester' => 'required',
        'status_kurikulum' => 'required'
    ]);

    $idProdi = auth()->guard()->user()->id_prodi;

    // jika status yang di  pilih aktif
    if($request->status_kurikulum == 'aktif') {

        // nonaktifkan semua kurikulum prodi ini
        Kurikulum::where('id_prodi', $idProdi)
            ->update([
                'status_kurikulum' => 'tidak aktif'
            ]);
    }

    // update kurikulum yang diedit
    Kurikulum::where('id_kurikulum', $id)->update([
        'nama_kurikulum' => $request->nama_kurikulum,
        'tahun_mulai' => $request->tahun_mulai,
        'total_semester' => $request->total_semester,
        'status_kurikulum' => $request->status_kurikulum
    ]);

    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();

        return redirect()->back();
    }

}
