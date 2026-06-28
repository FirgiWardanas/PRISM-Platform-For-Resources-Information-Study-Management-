<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Prodi;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class DashboardKurikulumController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $idProdi = $user->id_prodi;

        // ── Stat Cards ──────────────────────────────────────────────
        // Jumlah seluruh prodi di sistem
        $jumlahProdi = Prodi::count();

        // Jumlah kurikulum milik prodi user ini
        $jumlahKurikulum = Kurikulum::where('id_prodi', $idProdi)->count();

        // Kurikulum aktif milik prodi user
        $kurikulumAktif = Kurikulum::with([
                'detailKurikulums.matakuliah',

            ])
            ->where('id_prodi', $idProdi)
            ->where('status_kurikulum', 'aktif')
            ->first();

        // Jumlah total matakuliah unik di kurikulum aktif
        $jumlahMatakuliahAktif = $kurikulumAktif
            ? $kurikulumAktif->detailKurikulums->count()
            : 0;

        // Jumlah seluruh matakuliah di database
        $jumlahMatakuliah = Matakuliah::count();
        // ── SKS per Semester (dari kurikulum aktif) ──────────────────
        $sksPerSemester = [];
        if ($kurikulumAktif) {
            $grouped = $kurikulumAktif->detailKurikulums->groupBy('semester');
            for ($i = 1; $i <= $kurikulumAktif->total_semester; $i++) {
                $sksPerSemester[$i] = $grouped->get($i, collect())->sum('sks');
            }
        }

        // ── Kategori Matakuliah (dari kurikulum aktif) ───────────────
        $kategoriMatakuliah = [
            'langsung'       => 0,
            'tidak langsung' => 0,
            'pendukung'      => 0,
        ];
        if ($kurikulumAktif) {
            foreach ($kurikulumAktif->detailKurikulums as $detail) {
                $kat = $detail->status_matkul;
                if (array_key_exists($kat, $kategoriMatakuliah)) {
                    $kategoriMatakuliah[$kat]++;
                }
            }
        }

        // ── Semua kurikulum (untuk accordion) ───────────────────────
        // Gunakan kurikulum aktif saja di dashboard; tampilkan per semester
        $semesterData = [];
        if ($kurikulumAktif) {
            $grouped = $kurikulumAktif->detailKurikulums->groupBy('semester');
            for ($i = 1; $i <= $kurikulumAktif->total_semester; $i++) {
                $semesterData[$i] = $grouped->get($i, collect());
            }
        }

        return view('admin.tim_kurikulum.dashboard', compact(
        'jumlahProdi',
        'jumlahKurikulum',
        'jumlahMatakuliah',      
        'jumlahMatakuliahAktif', 
        'kurikulumAktif',
        'sksPerSemester',
        'kategoriMatakuliah',
        'semesterData',
    ));
    }
}