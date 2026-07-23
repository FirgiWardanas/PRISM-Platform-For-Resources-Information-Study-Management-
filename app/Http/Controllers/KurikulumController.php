<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index(Request $request)
    {
        $idProdi = auth()->guard()->user()->id_prodi;

        $kurikulums = Kurikulum::with([
            'prodi',
            'detailKurikulums.matakuliah',
        ])
            ->where('id_prodi', $idProdi)
            ->latest('id_kurikulum')
            ->get();

        // ambil semua id_MK yang sudah dipakai pada semua kurikulum prodi ini
        $usedIds = DB::table('detail_kurikulum')
            ->join('kurikulum', 'detail_kurikulum.id_kurikulum', '=', 'kurikulum.id_kurikulum')
            ->where('kurikulum.id_prodi', $idProdi)
            ->pluck('detail_kurikulum.id_MK')
            ->toArray();

        // ambil hanya matakuliah yang belum dipakai (sesuaikan kolom primary key jika perlu)
        $matakuliahs = Matakuliah::when(!empty($usedIds), function ($q) use ($usedIds) {
                return $q->whereNotIn('id_MK', $usedIds);
            })
            ->get();

        return view('admin.tim_kurikulum.kurikulum', compact('kurikulums', 'matakuliahs'));
    }

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
                    ->where(fn($q) => $q->where('id_prodi', $idProdi)),
            ],
            'tahun_mulai' => 'required|numeric|between:1901,2125',
        ], [
            'nama_kurikulum.required' => 'Nama kurikulum wajib diisi.',
            'nama_kurikulum.unique' => 'Nama kurikulum sudah digunakan pada prodi ini.',
            'tahun_mulai.required' => 'Tahun mulai wajib diisi.',
            'tahun_mulai.between' => 'Tahun mulai tidak valid.',
        ]);

        try {
            DB::transaction(function () use ($request, $idProdi, $totalSemester) {


                Kurikulum::where('id_prodi', $idProdi)
                    ->update(['status_kurikulum' => 'tidak aktif']);


                Kurikulum::create([
                    'id_prodi'         => $idProdi,
                    'nama_kurikulum'   => $request->nama_kurikulum,
                    'tahun_mulai'      => $request->tahun_mulai,
                    'total_semester'   => $totalSemester,
                    'status_kurikulum' => 'aktif',
                ]);

            }); 

            return redirect()->back()
                ->with('success', 'Kurikulum berhasil ditambahkan dan berstatus Aktif.');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan kurikulum.');
        }
    }

    public function update(Request $request, string $id)
    {
        $idProdi = auth()->guard()->user()->id_prodi;

        $request->validate([
            'nama_kurikulum' => [
                'required',
                Rule::unique('kurikulum', 'nama_kurikulum')
                    ->where(fn($q) => $q->where('id_prodi', $idProdi))
                    ->ignore($id, 'id_kurikulum'),
            ],
            'tahun_mulai' => 'required|numeric|between:1901,2125',
            'total_semester' => 'required',
            'status_kurikulum' => 'required',
        ], [
            'nama_kurikulum.required' => 'Nama kurikulum wajib diisi.',
            'nama_kurikulum.unique' => 'Nama kurikulum sudah digunakan pada program studi ini.',
            'tahun_mulai.required' => 'Tahun mulai wajib diisi.',
            'total_semester.required' => 'Total semester wajib diisi.',
            'status_kurikulum.required' => 'Status kurikulum wajib dipilih.',
            'tahun_mulai.between' => 'Tahun mulai tidak valid.',
        ]);

        try {
            $kurikulum = Kurikulum::findOrFail($id);
            $kurikulum->fill([
                'nama_kurikulum'   => $request->nama_kurikulum,
                'tahun_mulai'      => $request->tahun_mulai,
                'total_semester'   => $request->total_semester,
                'status_kurikulum' => $request->status_kurikulum,
            ]);

            if (!$kurikulum->isDirty()) {
                return redirect()->back()->withInput()
                    ->with('error', 'Tidak ada data yang diubah.');
            }

            DB::transaction(function () use ($kurikulum, $idProdi, $request) {

  
                if ($request->status_kurikulum === 'aktif') {
                    Kurikulum::where('id_prodi', $idProdi)
                        ->update(['status_kurikulum' => 'tidak aktif']);
                }


                $kurikulum->save();

            }); 

            return redirect()->back()->with('success', 'Kurikulum berhasil diperbarui.');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()
                ->with('error', 'Terjadi kesalahan saat memperbarui kurikulum.');
        }
    }

    public function destroy(string $id)
    {
        $kurikulum = Kurikulum::findOrFail($id);

        if ($kurikulum->status_kurikulum === 'aktif') {
            return redirect()->back()
                ->with('error', 'Kurikulum yang sedang aktif tidak dapat dihapus.');
        }

        $kurikulum->delete();

        return redirect()->back()
            ->with('success', 'Kurikulum berhasil dihapus.');
    }
}