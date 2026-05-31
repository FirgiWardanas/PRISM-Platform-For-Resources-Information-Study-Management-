<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Prodis = Prodi::with('kurikulums')->get();

        $user = Auth::user();
        
        $tanggal = now()->translatedFormat('j F Y');

        $jumlah_prodi = Prodi::select('id_prodi')->count();
        $jumlah_dosen = Dosen::select('id_dosen')->count();
        $jumlah_akun = User::select('id_user')->where('role','tim_kurikulum')->count();
        return view('admin.ketua_jurusan.dashboard', compact('Prodis','user','tanggal','jumlah_prodi','jumlah_dosen','jumlah_akun'));
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
        //
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
    public function destroy($id)
    {

    }
}
