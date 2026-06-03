<?php

namespace App\Http\Controllers;

use App\Models\DetailProdi;
use App\Models\Kustomisasi;
use App\Models\ProfilLulusan;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KustomisasiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with(['kustomisasi', 'detailProdi.profilLulusans'])
            ->where('id_prodi', auth()->user()->id_prodi)
            ->firstOrFail();

        return view('admin.tim_kurikulum.kustomisasi', compact('prodi'));
    }

    public function store(Request $request)
   {
    $idProdi = auth()->user()->id_prodi;
    
    // Kalau kustomisasi sudah ada, jalankan logic update langsung
    $this->simpanData($request, $idProdi);
    
    return redirect()->back()->with('success', 'Kustomisasi berhasil disimpan.');
    }

    private function simpanData(Request $request, $idProdi)
    {
    $request->validate([
        'deskripsi_prodi'  => 'nullable|string',
        'visi'             => 'nullable|string',
        'misi'             => 'nullable|string',
        'logo'             => 'nullable|image|max:2048',
        'ilustrasi'        => 'nullable|image|max:2048',
        'icon_lulusan'     => 'nullable|image|max:2048',
        'primary_color'    => 'nullable|string|max:20',
        'secondary_color'  => 'nullable|string|max:20',
        'tertiary_color'   => 'nullable|string|max:20',
        'quaternary_color' => 'nullable|string|max:20',
        'status_prodi'     => 'nullable|in:draft,published',
    ]);

    Kustomisasi::updateOrCreate(
        ['id_prodi' => $idProdi],
        [
            'primary_color'    => $request->primary_color,
            'secondary_color'  => $request->secondary_color,
            'tertiary_color'   => $request->tertiary_color,
            'quaternary_color' => $request->quaternary_color,
        ]
    );

    $detailProdi = DetailProdi::firstOrNew(['id_prodi' => $idProdi]);
    $detailProdi->deskripsi_prodi = $request->deskripsi_prodi;
    $detailProdi->visi            = $request->visi;
    $detailProdi->misi            = $request->misi;

    if ($request->hasFile('logo')) {
        if ($detailProdi->logo) Storage::disk('public')->delete($detailProdi->logo);
        $detailProdi->logo = $request->file('logo')->store('prodi/logo', 'public');
    }

    if ($request->hasFile('ilustrasi')) {
        if ($detailProdi->ilustrasi) Storage::disk('public')->delete($detailProdi->ilustrasi);
        $detailProdi->ilustrasi = $request->file('ilustrasi')->store('prodi/ilustrasi', 'public');
    }

    if ($request->hasFile('icon_lulusan')) {
        if ($detailProdi->icon_lulusan) Storage::disk('public')->delete($detailProdi->icon_lulusan);
        $detailProdi->icon_lulusan = $request->file('icon_lulusan')->store('prodi/icon', 'public');
    }

    $detailProdi->save();

    if ($request->filled('status_prodi')) {
        Prodi::where('id_prodi', $idProdi)->update([
            'status_prodi' => $request->status_prodi,
        ]);
    }
}

    // Tambah profil lulusan
    public function storeProfilLulusan(Request $request)
    {
        $request->validate([
            'judul_lulusan'    => 'required|string|max:255',
            'deskripsi_lulusan' => 'required|string',
        ]);

        $idProdi = auth()->user()->id_prodi;

        $detailProdi = DetailProdi::firstOrCreate(['id_prodi' => $idProdi]);

        ProfilLulusan::create([
            'id_detail_prodi'   => $detailProdi->id_detail_prodi,
            'judul_lulusan'     => $request->judul_lulusan,
            'deskripsi_lulusan' => $request->deskripsi_lulusan,
        ]);

        return redirect()->back()->with('success', 'Profil lulusan berhasil ditambahkan.');
    }

    // Hapus profil lulusan
    public function destroyProfilLulusan(string $id)
    {
        ProfilLulusan::where('id_lulusan', $id)->delete();
        return redirect()->back()->with('success', 'Profil lulusan berhasil dihapus.');
    }

    // Edit profil lulusan
    public function updateProfilLulusan(Request $request, string $id)
    {
        $request->validate([
            'judul_lulusan'     => 'required|string|max:255',
            'deskripsi_lulusan' => 'required|string',
        ]);

        ProfilLulusan::where('id_lulusan', $id)->update([
            'judul_lulusan'     => $request->judul_lulusan,
            'deskripsi_lulusan' => $request->deskripsi_lulusan,
        ]);

        return redirect()->back()->with('success', 'Profil lulusan berhasil diperbarui.');
    }
}