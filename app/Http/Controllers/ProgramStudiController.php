<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   

        $search = $request->get('search');
        

        $prodi = Prodi::query()
        ->when($search, function($query, $search) {
        $query->where('kode_prodi', 'LIKE', "%{$search}%")
                ->orWhere('nama_prodi', 'LIKE', "%{$search}%");
        })
        ->paginate(6)
        ->withQueryString();

        return view('admin.ketua_jurusan.program-studi', compact('prodi','search'));
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
    $request->validate([
        'kode_prodi' => 'required|unique:prodi,kode_prodi',
        'nama_prodi' => 'required|unique:prodi,nama_prodi',
        'jenjang' => 'required',
        'id_jurusan' => 'required'
    ], [
        'kode_prodi.required' => 'Kode prodi wajib diisi',
        'kode_prodi.unique' => 'Kode prodi sudah digunakan',

        'nama_prodi.required' => 'Nama prodi wajib diisi',
        'nama_prodi.unique' => 'Nama prodi sudah digunakan',
    ]);

    try {

        Prodi::create([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'jenjang' => $request->jenjang,
            'id_jurusan' => $request->id_jurusan
        ]);

        return redirect()
            ->back()
            ->with('success', 'Data Prodi berhasil ditambahkan');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat menyimpan data');

    }
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
    $request->validate([
        'kode_prodi' => 'required|unique:prodi,kode_prodi,' . $id . ',id_prodi',
        'nama_prodi' => 'required|unique:prodi,nama_prodi,' . $id . ',id_prodi',
        'jenjang' => 'required',
    ], [
        'kode_prodi.required' => 'Kode prodi wajib diisi',
        'kode_prodi.unique' => 'Kode prodi sudah digunakan',

        'nama_prodi.required' => 'Nama prodi wajib diisi',
        'nama_prodi.unique' => 'Nama prodi sudah digunakan',
    ]);

    try {

        $prodi = Prodi::findOrFail($id);
        $prodi->fill([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'jenjang' => $request->jenjang,
        ]);

        if (!$prodi->isDirty()) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Tidak ada data yang diubah.');
        }

        $prodi->save();

        return redirect()
            ->back()
            ->with('success', 'Data Prodi berhasil diperbarui');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat memperbarui data');

    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);

        $adaKurikulumAktif = $prodi->kurikulums()
            ->where('status_kurikulum', 'aktif')
            ->exists();

        if ($adaKurikulumAktif) {
            return redirect()->back()
                ->with('error', 'Prodi tidak dapat dihapus karena masih memiliki kurikulum aktif.');
        }

        $prodi->delete();

        return redirect()->back()
            ->with('success', 'Prodi berhasil dihapus.');
    }
}
