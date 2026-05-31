<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class matakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::orderBy('kode_matkul')->get();
        return view('admin.tim_kurikulum.matakuliah', compact('matakuliahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:20|unique:matakuliah,kode_matkul',
            'nama_matkul' => 'required|string|max:150',
        ]);

        Matakuliah::create($request->only('kode_matkul', 'nama_matkul'));

        return redirect()->back()->with('success', 'Matakuliah berhasil ditambahkan.');
    }

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
    try {
        Matakuliah::where('id_MK', $id)->delete();
        return redirect()->back()->with('success', 'Matakuliah berhasil dihapus.');
    } catch (\Illuminate\Database\QueryException $e) {
        if ($e->getCode() === '23000') {
            return redirect()->back()->with('error', 'Matakuliah tidak dapat dihapus karena masih digunakan di kurikulum.');
        }
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus matakuliah.');
    }
}
}