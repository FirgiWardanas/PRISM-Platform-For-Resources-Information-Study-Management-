<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Matakuliah;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulums = Kurikulum::with([
            'prodi',
            'detailKurikulums.matakuliah',
            'detailKurikulums.silabus',
        ])->where('id_prodi', auth()->guard()->user()->id_prodi)->get();

        $matakuliahs = Matakuliah::all();

        return view('admin.tim_kurikulum.kurikulum', compact('kurikulums', 'matakuliahs'));
    }

    public function create() {}


public function store(Request $request)
{
    $prodi = auth()->guard()->user()->prodis;

    $totalSemester = match ($prodi->jenjang) {
        'D3' => 6,
        'D4' => 8,
    };

    $idProdi = auth()->guard()->user()->id_prodi;

    $request->validate([
        'nama_kurikulum' => [
            'required',
            Rule::unique('kurikulum', 'nama_kurikulum')
                ->where(function ($query) use ($idProdi) {
                    return $query->where('id_prodi', $idProdi);
                }),
        ],
        'tahun_mulai' => 'required',
    ], [
        'nama_kurikulum.required' => 'Nama kurikulum wajib diisi.',
        'nama_kurikulum.unique'   => 'Nama kurikulum sudah digunakan pada prodi ini.',
        'tahun_mulai.required'    => 'Tahun mulai wajib diisi.',
    ]);

    try {

        // nonaktifkan kurikulum lama
        Kurikulum::where('id_prodi', $idProdi)
            ->update([
                'status_kurikulum' => 'tidak aktif'
            ]);

        // insert kurikulum baru
        Kurikulum::create([
            'id_prodi'         => $idProdi,
            'nama_kurikulum'   => $request->nama_kurikulum,
            'tahun_mulai'      => $request->tahun_mulai,
            'total_semester'   => $totalSemester,
            'status_kurikulum' => 'aktif',
        ]);

        return redirect()
            ->back()
            ->with('success', 'Kurikulum berhasil ditambahkan dan berstatus Aktif.');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat menyimpan kurikulum.');

    }
}

    public function show(string $id) {}

    public function edit(string $id) {}


public function update(Request $request, string $id)
{
    $idProdi = auth()->guard()->user()->id_prodi;

    $request->validate([
        'nama_kurikulum' => [
            'required',
            Rule::unique('kurikulum', 'nama_kurikulum')
                ->where(function ($query) use ($idProdi) {
                    return $query->where('id_prodi', $idProdi);
                })
                ->ignore($id, 'id_kurikulum'),  
        ],
        'tahun_mulai'      => 'required',
        'total_semester'   => 'required',
        'status_kurikulum' => 'required',
    ], [
        'nama_kurikulum.required' => 'Nama kurikulum wajib diisi.',
        'nama_kurikulum.unique'   => 'Nama kurikulum sudah digunakan pada program studi ini.',

        'tahun_mulai.required'    => 'Tahun mulai wajib diisi.',

        'total_semester.required' => 'Total semester wajib diisi.',

        'status_kurikulum.required' => 'Status kurikulum wajib dipilih.',
    ]);

    try {

        if ($request->status_kurikulum == 'aktif') {

            Kurikulum::where('id_prodi', $idProdi)
                ->update([
                    'status_kurikulum' => 'tidak aktif'
                ]);
        }

        Kurikulum::where('id_kurikulum', $id)
            ->update([
                'nama_kurikulum'   => $request->nama_kurikulum,
                'tahun_mulai'      => $request->tahun_mulai,
                'total_semester'   => $request->total_semester,
                'status_kurikulum' => $request->status_kurikulum,
            ]);

        return redirect()
            ->back()
            ->with('success', 'Kurikulum berhasil diperbarui.');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat memperbarui kurikulum.');

    }
}

    public function destroy(string $id)
    {
        Kurikulum::findOrFail($id)->delete();
        return redirect()->back();
    }
}