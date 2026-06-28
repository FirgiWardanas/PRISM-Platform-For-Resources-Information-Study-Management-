<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulums = Kurikulum::with([
            'prodi',
            'detailKurikulums.matakuliah',
            'detailKurikulums.silabus',
        ])->where('id_prodi', auth()->guard()->user()->id_prodi)
            ->orderByRaw("CASE WHEN status_kurikulum = 'aktif' THEN 0 ELSE 1 END")
            ->orderByDesc('tahun_mulai')
            ->get();

        $matakuliahs = Matakuliah::all();

        return view('admin.tim_kurikulum.kurikulum', compact('kurikulums', 'matakuliahs'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        dd($request);
        $prodi = auth()->guard()->user()->prodis;

        $totalSemester = match ($prodi->jenjang) {
            'D3' => 6,
            'D4' => 8,
        };
        $request->validate([
            'nama_kurikulum' => 'required',
            'tahun_mulai' => 'required',
        ]);

        $idProdi = auth()->guard()->user()->id_prodi;

        Kurikulum::where('id_prodi', $idProdi)->update(['status_kurikulum' => 'tidak aktif']);

        Kurikulum::create([
            'id_prodi' => $idProdi,
            'nama_kurikulum' => $request->nama_kurikulum,
            'tahun_mulai' => $request->tahun_mulai,
            'total_semester' => $totalSemester,
            'status_kurikulum' => 'aktif',
        ]);

        return redirect()->back();
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kurikulum' => 'required',
            'tahun_mulai' => 'required',
            'total_semester' => 'required',
            'status_kurikulum' => 'required',
        ]);

        $idProdi = auth()->guard()->user()->id_prodi;

        if ($request->status_kurikulum == 'aktif') {
            Kurikulum::where('id_prodi', $idProdi)->update(['status_kurikulum' => 'tidak aktif']);
        }

        Kurikulum::where('id_kurikulum', $id)->update([
            'nama_kurikulum' => $request->nama_kurikulum,
            'tahun_mulai' => $request->tahun_mulai,
            'total_semester' => $request->total_semester,
            'status_kurikulum' => $request->status_kurikulum,
        ]);

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        Kurikulum::findOrFail($id)->delete();
        return redirect()->back();
    }
}