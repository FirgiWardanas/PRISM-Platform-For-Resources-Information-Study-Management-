<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailKurikulumRequest;
use App\Http\Requests\UpdateDetailKurikulumRequest;
use App\Models\DetailKurikulum;
use App\Models\Kurikulum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailKurikulumController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | STORE — Tambah matakuliah ke semester
    |--------------------------------------------------------------------------
    */
    public function store(StoreDetailKurikulumRequest $request, string $kurikulumId): RedirectResponse
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $kurikulumId)
            ->where('id_prodi', auth()->guard()->user()->id_prodi)
            ->firstOrFail();

        $detailData = $request->only([
            'id_MK', 'semester', 'sks',
            'bobot_teori', 'bobot_praktikum',
            'sesi_teori', 'sesi_praktikum',
            'status_matkul',
            'deskripsi', 'cpm', 'cpk', 'bahan_pustaka',
        ]);

        if ($request->hasFile('file_rps')) {
            $detailData['file_rps'] = $request->file('file_rps')
                ->store('rps', 'public');
        }

        $kurikulum->detailKurikulums()->create($detailData);

        return redirect()->back()->with(
            'success',
            'Matakuliah berhasil ditambahkan ke semester ' . $request->semester . '.'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE — Edit data matakuliah
    |--------------------------------------------------------------------------
    */
    public function update(UpdateDetailKurikulumRequest $request, string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::findOrFail($detailId);

        $detail->kurikulum()
               ->where('id_prodi', auth()->guard()->user()->id_prodi)
               ->firstOrFail();

        $detail->update($request->validated());

        return redirect()->back()->with('success', 'Data matakuliah berhasil diperbarui.');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE SILABUS — Edit data silabus dari modal silabus
    |--------------------------------------------------------------------------
    */
    public function updateSilabus(Request $request, string $detailId): RedirectResponse
    {
        $request->validate([
            'deskripsi'     => 'nullable|string',
            'cpm'           => 'nullable|string',
            'cpk'           => 'nullable|string',
            'bahan_pustaka' => 'nullable|string',
            'file_rps'      => 'nullable|file|mimes:pdf|max:5120',
        ]);

        try {
            $detail = DetailKurikulum::findOrFail($detailId);

            $data = $request->only(['deskripsi', 'cpm', 'cpk', 'bahan_pustaka']);

            if ($request->hasFile('file_rps')) {
                if ($detail->file_rps) {
                    Storage::disk('public')->delete($detail->file_rps);
                }
                $data['file_rps'] = $request->file('file_rps')
                    ->store('silabus_rps', 'public');
            }

            $detail->update($data);

            return redirect()->back()->with('success', 'Data silabus berhasil disimpan!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menyimpan silabus: ' . $e->getMessage());
        }
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY FILE RPS — Hapus hanya file RPS, bukan row-nya
    |--------------------------------------------------------------------------
    */
    public function destroyFileRps(string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::findOrFail($detailId);

        if ($detail->file_rps) {
            Storage::disk('public')->delete($detail->file_rps);
            $detail->update(['file_rps' => null]);
        }

        return redirect()->back()->with('success', 'File RPS berhasil dihapus.');
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY — Hapus matakuliah dari kurikulum (file RPS ikut terhapus)
    |--------------------------------------------------------------------------
    */
    public function destroy(string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::findOrFail($detailId);

        $detail->kurikulum()
               ->where('id_prodi', auth()->user()->id_prodi)
               ->firstOrFail();

        if ($detail->file_rps) {
            Storage::disk('public')->delete($detail->file_rps);
        }

        $detail->delete();

        return redirect()->back()->with('success', 'Matakuliah berhasil dihapus dari kurikulum.');
    }
}