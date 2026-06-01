<?php

namespace App\Http\Controllers;

use App\Models\Silabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SilabusController extends Controller
{
    public function storeOrUpdate(Request $request, $detail)
    {
        // 1. Validasi input form modal silabus sesuai database
        $request->validate([
            'deskripsi'     => 'nullable|string',
            'cpk'           => 'nullable|string',
            'cpm'           => 'nullable|string',
            'bahan_pustaka' => 'nullable|string',
            'file_rps'      => 'nullable|file|mimes:pdf|max:5120', // Maksimal PDF 5MB
        ]);

        try {
            $silabus = Silabus::firstWhere('id_detail', $detail);
            $namaFileRPS = $silabus?->file_rps;

            // 2. Proses Upload File RPS jika ada file baru
            if ($request->hasFile('file_rps')) {
                if ($namaFileRPS) {
                    Storage::disk('public')->delete($namaFileRPS);
                }

                $file = $request->file('file_rps');
                $namaFileRPS = 'silabus_rps/' . time() . '_' . $file->getClientOriginalName();
                Storage::disk('public')->putFileAs('silabus_rps', $file, basename($namaFileRPS));
            }

            // 3. Simpan data silabus ke tabel yang benar
            Silabus::updateOrCreate(
                ['id_detail' => $detail],
                [
                    'deskripsi'     => $request->deskripsi,
                    'cpk'           => $request->cpk,
                    'cpm'           => $request->cpm,
                    'bahan_pustaka' => $request->bahan_pustaka,
                    'file_rps'      => $namaFileRPS,
                ]
            );

            return redirect()->back()->with('success', 'Data silabus mata kuliah berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan silabus: ' . $e->getMessage());
        }
    }

    public function destroy($silabusId)
    {
        $silabus = Silabus::findOrFail($silabusId);

        if ($silabus->file_rps) {
            $filePath = preg_replace('#^public/#', '', $silabus->file_rps);
            Storage::disk('public')->delete($filePath);
        }

        $silabus->delete();

        return redirect()->back()->with('success', 'Silabus berhasil dihapus.');
    }
}