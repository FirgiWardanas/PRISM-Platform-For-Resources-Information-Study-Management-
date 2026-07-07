<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\DetailKurikulumController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardKurikulumController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\ProfileKajurController;
use App\Http\Controllers\ProfileTimController;
use App\Http\Controllers\KustomisasiController;
use App\Http\Controllers\TampilanProgramStudiController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::resource('/', JurusanController::class);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/admin/logout', [LoginController::class, 'destroy'])->name('logout');

// Halaman dinamis prodi
Route::get('/prodi/{kode}', [TampilanProgramStudiController::class, 'show'])->name('prodi.show');

Route::middleware(['auth', 'role:ketua_jurusan'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('/ketua-jurusan', DashboardJurusanController::class);
        Route::resource('/program-studi', ProgramStudiController::class);
        Route::resource('/akun', AkunController::class);
        Route::resource('/profile-ketua-jurusan', ProfileKajurController::class);
        Route::resource('/kelola-dosen', DosenController::class);
    });

Route::middleware(['auth', 'role:tim_kurikulum'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('/tim-kurikulum', DashboardKurikulumController::class);
        Route::resource('/kurikulum', KurikulumController::class);
        Route::resource('/profile-tim-kurikulum', ProfileTimController::class);
        Route::resource('/matakuliah', matakuliahController::class);
        Route::resource('/kustomisasi', KustomisasiController::class);

        Route::post('/kurikulum/{kurikulum}/detail', [DetailKurikulumController::class, 'store'])
            ->name('detail-kurikulum.store');
        Route::put('/detail-kurikulum/{detail}', [DetailKurikulumController::class, 'update'])
            ->name('detail-kurikulum.update');
        Route::delete('/detail-kurikulum/{detail}', [DetailKurikulumController::class, 'destroy'])
            ->name('detail-kurikulum.destroy');
        Route::post('/detail-kurikulum/{detail}/silabus', [DetailKurikulumController::class, 'updateSilabus'])
            ->name('detail-kurikulum.updateSilabus');
        Route::delete('/detail-kurikulum/{detail}/file-rps', [DetailKurikulumController::class, 'destroyFileRps'])
            ->name('detail-kurikulum.destroyFileRps');


        Route::post('/profil-lulusan', [KustomisasiController::class, 'storeProfilLulusan'])
            ->name('profil-lulusan.store');
        Route::put('/profil-lulusan/{id}', [KustomisasiController::class, 'updateProfilLulusan'])
            ->name('profil-lulusan.update');
        Route::delete('/profil-lulusan/{id}', [KustomisasiController::class, 'destroyProfilLulusan'])
            ->name('profil-lulusan.destroy');
    });

    ;