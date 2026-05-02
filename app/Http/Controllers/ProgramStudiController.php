<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $prodi = Prodi::all();
        return view('admin.ketua_jurusan.program-studi', compact('prodi'));
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
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
            'jenjang' => 'required',
            'status_prodi' => 'required'
        ]);

        Prodi::create([
            'kode_prodi'=>$request->kode_prodi,
            'nama_prodi'=>$request->nama_prodi,
            'jenjang'=>$request->jenjang,
            'status_prodi'=>$request->status_prodi

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
