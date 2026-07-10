<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Dosen;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlah_prodi = Prodi::where('status_prodi', 'published')->count();
        $jumlah_dosen = Dosen::whereHas('prodi', function ($q) {
            $q->where('status_prodi', 'published');
        })->count();

        $prodis = Prodi::with([
            'kustomisasi',
            'detailProdi.profilLulusans'
        ])
            ->where('status_prodi', 'published')
            ->get();

        return view('jurusan.jurusan-dinamis', compact('jumlah_prodi', 'jumlah_dosen', 'prodis'));
    }

}
