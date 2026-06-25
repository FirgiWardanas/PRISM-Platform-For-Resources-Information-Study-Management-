<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailKurikulumRequest;
use App\Http\Requests\UpdateDetailKurikulumRequest;
use App\Models\DetailKurikulum;
use App\Models\Kurikulum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DetailKurikulumController extends Controller
{
    public function store(StoreDetailKurikulumRequest $request, string $kurikulumId): RedirectResponse
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $kurikulumId)
            ->where('id_prodi', auth()->user()->id_prodi)
            ->firstOrFail();
     $sudahDipakai = DetailKurikulum::where('id_kurikulum', $kurikulumId)
        ->where('id_MK', $request->id_MK)
        ->where('semester', '!=', $request->semester)
        ->exists();

    if ($sudahDipakai) {
        $semesterYangDipakai = DetailKurikulum::where('id_kurikulum', $kurikulumId)
            ->where('id_MK', $request->id_MK)
            ->where('semester', '!=', $request->semester)
            ->pluck('semester')
            ->sort()
            ->join(', ');

        return redirect()->back()
            ->withInput()
            ->with('error', "Matakuliah ini sudah digunakan di semester {$semesterYangDipakai} dalam kurikulum ini.");
    }
    $duplikat = DetailKurikulum::where('id_kurikulum', $kurikulumId)
        ->where('id_MK', $request->id_MK)
        ->where('semester', $request->semester)
        ->exists();

    if ($duplikat) {
        return redirect()->back()
            ->withInput()
            ->with('error', 'Matakuliah ini sudah ada di semester ' . $request->semester . '.');
    }

        // Langsung pakai id_MK dari dropdown, tidak perlu create/update matakuliah
        $detailData = $request->only([
        'id_MK', 'semester',
        'bobot_teori', 'bobot_praktikum',
        'sesi_teori', 'sesi_praktikum',
        'status_matkul',
    ]);
    $detailData['sks'] = ($request->bobot_teori ?? 0) + ($request->bobot_praktikum ?? 0);
    $detail = $kurikulum->detailKurikulums()->create($detailData);
        $silabusData = [
            'deskripsi'     => $request->filled('deskripsi')     ? $request->input('deskripsi')     : null,
            'cpm'           => $request->filled('cpm')           ? $request->input('cpm')           : null,
            'cpk'           => $request->filled('cpk')           ? $request->input('cpk')           : null,
            'bahan_pustaka' => $request->filled('bahan_pustaka') ? $request->input('bahan_pustaka') : null,
        ];

        $hasSilabusText = collect($silabusData)->filter(fn($v) => $v !== null)->isNotEmpty();
        $hasSilabusFile = $request->hasFile('file_rps');

        if ($hasSilabusText || $hasSilabusFile) {
            if ($hasSilabusFile) {
                $silabusData['file_rps'] = $request->file('file_rps')->store('rps', 'public');
            }
            $detail->silabus()->updateOrCreate(
                ['id_detail' => $detail->id_detail],
                $silabusData
            );
        }

        return redirect()->back()->with('success', 'Matakuliah berhasil ditambahkan ke semester ' . $request->semester . '.');
    }

    public function update(UpdateDetailKurikulumRequest $request, string $detailId): RedirectResponse
    {
        $detail = DetailKurikulum::findOrFail($detailId);

        $detail->kurikulum()
               ->where('id_prodi', auth()->user()->id_prodi)
               ->firstOrFail();

        // Langsung pakai id_MK dari dropdown
        $detailData = $request->validated();
        $detailData['sks'] = ($detailData['bobot_teori'] ?? 0) + ($detailData['bobot_praktikum'] ?? 0);
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