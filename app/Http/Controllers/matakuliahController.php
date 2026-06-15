<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class matakuliahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $matakuliahs = Matakuliah::when($search, function ($query, $search) {
                $query->where('kode_matkul', 'like', "%{$search}%")
                      ->orWhere('nama_matkul', 'like', "%{$search}%");
            })
            ->orderBy('kode_matkul')
            ->paginate(10)
            ->withQueryString();

        $jumlahMatakuliah = Matakuliah::count();

        return view('admin.tim_kurikulum.matakuliah', compact('matakuliahs', 'jumlahMatakuliah', 'search'));
    }

    public function create() {}

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:20|unique:matakuliah,kode_matkul',
            'nama_matkul' => 'required|string|max:150',
        ]);

        Matakuliah::create($request->only('kode_matkul', 'nama_matkul'));

        return redirect()->back()->with('success', 'Matakuliah berhasil ditambahkan.');
    }

    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:20|unique:matakuliah,kode_matkul,' . $id . ',id_MK',
            'nama_matkul' => 'required|string|max:150',
        ]);

        Matakuliah::where('id_MK', $id)->update($request->only('kode_matkul', 'nama_matkul'));

        return redirect()->back()->with('success', 'Matakuliah berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $mk = Matakuliah::where('id_MK', $id)->firstOrFail();

        $jumlahPakai = $mk->detailKurikulums()->count();

        if ($jumlahPakai > 0) {
            $namaKurikulum = $mk->detailKurikulums()
                ->with('kurikulum')
                ->get()
                ->pluck('kurikulum.nama_kurikulum')
                ->unique()
                ->join(', ');

            return redirect()->back()->with(
                'error',
                "Matakuliah \"{$mk->nama_matkul}\" tidak dapat dihapus karena sedang digunakan di kurikulum: {$namaKurikulum}. Hapus matakuliah dari kurikulum tersebut terlebih dahulu."
            );
        }

        $mk->delete();
        return redirect()->back()->with('success', 'Matakuliah berhasil dihapus.');
    }
}