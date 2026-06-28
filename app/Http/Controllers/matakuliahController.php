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
            ->paginate(6)
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
        ], [
            'kode_matkul.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matkul.max'      => 'Kode mata kuliah maksimal 20 karakter.',
            'kode_matkul.unique'   => 'Kode mata kuliah sudah digunakan.',

            'nama_matkul.required' => 'Nama mata kuliah wajib diisi.',
            'nama_matkul.max'      => 'Nama mata kuliah maksimal 150 karakter.',
        ]);

        try {

            Matakuliah::create([
                'kode_matkul' => $request->kode_matkul,
                'nama_matkul' => $request->nama_matkul,
            ]);

            return redirect()
                ->back()
                ->with('success', 'Mata kuliah berhasil ditambahkan.');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan mata kuliah.');

        }
    }

    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:20|unique:matakuliah,kode_matkul,' . $id . ',id_MK',
            'nama_matkul' => 'required|string|max:150',
        ], [
            'kode_matkul.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matkul.max'      => 'Kode mata kuliah maksimal 20 karakter.',
            'kode_matkul.unique'   => 'Kode mata kuliah sudah digunakan.',

            'nama_matkul.required' => 'Nama mata kuliah wajib diisi.',
            'nama_matkul.max'      => 'Nama mata kuliah maksimal 150 karakter.',
        ]);

        try {

            Matakuliah::where('id_MK', $id)
                ->update([
                    'kode_matkul' => $request->kode_matkul,
                    'nama_matkul' => $request->nama_matkul,
                ]);

            return redirect()
                ->back()
                ->with('success', 'Mata kuliah berhasil diperbarui.');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat memperbarui mata kuliah.');

        }
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