<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class TampilanProgramStudiController extends Controller
{
    public function show(string $kode)
    {
        $prodi = Prodi::with([
            'kustomisasi',
            'detailProdi.profilLulusans',   
            'dosens.riwayatPendidikans',
            'dosens.bidangSpesialis',
            'kurikulums' => function ($q) {
                $q->with([
                    'detailKurikulums.matakuliah',
                ]);
            },
        ])
        ->where('kode_prodi', $kode)
        ->firstOrFail();

        $kurikulumAktif = $prodi->kurikulums
            ->where('status_kurikulum', 'aktif')
            ->first();

        $kurikulumTidakAktif = $prodi->kurikulums
            ->where('status_kurikulum', 'tidak aktif');

        $semuaProdi = Prodi::where('status_prodi', 'published')
        ->select('kode_prodi', 'nama_prodi')
        ->get();
        
        return view('prodi.show', compact(
            'prodi',
            'kurikulumAktif',
            'kurikulumTidakAktif',
            'semuaProdi'
        ));
    }
}