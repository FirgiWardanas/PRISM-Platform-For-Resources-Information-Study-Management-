<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailKurikulumRequest;
use App\Http\Requests\UpdateDetailKurikulumRequest;
use App\Models\DetailKurikulum;
use App\Models\Kurikulum;
use App\Models\Silabus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DetailKurikulumController extends Controller
{


public function store(StoreDetailKurikulumRequest $request, string $kurikulumId): RedirectResponse
{
    $kurikulum = Kurikulum::where('id_kurikulum', $kurikulumId)
        ->where('id_prodi', auth()->guard()->user()->id_prodi)
        ->firstOrFail();

    $detailData = $request->only([
        'id_MK',
        'semester',
        'sks',
        'bobot_teori',
        'bobot_praktikum',
        'sesi_teori',
        'sesi_praktikum',
        'status_matkul',
    ]);

    $silabusData = [
        'deskripsi'     => $request->filled('deskripsi')
            ? $request->deskripsi
            : null,

        'cpm'           => $request->filled('cpm')
            ? $request->cpm
            : null,

        'cpk'           => $request->filled('cpk')
            ? $request->cpk
            : null,

        'bahan_pustaka' => $request->filled('bahan_pustaka')
            ? $request->bahan_pustaka
            : null,
    ];

    if ($request->hasFile('file_rps')) {
        $silabusData['file_rps'] = $request->file('file_rps')
            ->store('rps', 'public');
    }

    /*
    |--------------------------------------------------------------------------
    | Buat Silabus
    |--------------------------------------------------------------------------
    */
    $silabus = Silabus::create($silabusData);

    /*
    |--------------------------------------------------------------------------
    | Simpan FK Silabus ke Detail Kurikulum
    |--------------------------------------------------------------------------
    */
    $detailData['id_silabus'] = $silabus->id_silabus;

    $kurikulum->detailKurikulums()->create($detailData);

    return redirect()->back()->with(
        'success',
        'Matakuliah berhasil ditambahkan ke semester ' . $request->semester . '.'
    );
}

    public function update(UpdateDetailKurikulumRequest $request, string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::findOrFail($detailId);

        $detail->kurikulum()
               ->where('id_prodi', auth()->user()->id_prodi)
               ->firstOrFail();

        // Langsung pakai id_MK dari dropdown
        $detailData = $request->validated();

        $detail->update($detailData);

        return redirect()->back()->with('success', 'Data matakuliah berhasil diperbarui.');
    }

    public function destroy(string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::with('silabus')->findOrFail($detailId);

        $detail->kurikulum()
               ->where('id_prodi', auth()->user()->id_prodi)
               ->firstOrFail();

        if ($detail->silabus && $detail->silabus->file_rps) {
            Storage::disk('public')->delete($detail->silabus->file_rps);
        }

        $detail->delete();

        return redirect()->back()->with('success', 'Matakuliah berhasil dihapus dari kurikulum.');
    }
}