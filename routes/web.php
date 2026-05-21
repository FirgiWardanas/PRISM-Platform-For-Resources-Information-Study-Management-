<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AnController;
use App\Http\Controllers\GmController;
use App\Http\Controllers\IfController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\RksController;
use App\Http\Controllers\TpController;
use App\Http\Controllers\TrmController;
use App\Http\Controllers\TrplController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardKurikulumController;
use App\Http\Controllers\ProfileKajurController;
use App\Http\Controllers\ProfileTimController;
use App\Http\Controllers\KustomisasiController;

use App\Models\Kustomisasi;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});




//Landing Page Jurusan

Route::resource('/', JurusanController::class);



// Login

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/admin/logout', [LoginController::class, 'destroy'])->name('logout');



// Ketua Jurusan
Route::resource('/admin/ketua-jurusan',DashboardJurusanController::class);

Route::resource('/admin/program-studi',ProgramStudiController::class);

Route::resource('/admin/akun',AkunController::class);

Route::resource('/admin/profile-ketua-jurusan',ProfileKajurController::class);
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



// Tim Kurikulum
Route::resource('/admin/tim-kurikulum',DashboardKurikulumController::class);

Route::resource('/admin/kurikulum',KurikulumController::class);

Route::resource('/admin/profile-tim-kurikulum',ProfileTimController::class);

Route::middleware(['auth', 'role:tim_kurikulum'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('/tim-kurikulum', DashboardKurikulumController::class);
        Route::resource('/kurikulum', KurikulumController::class);
        Route::resource('/profile-tim-kurikulum', ProfileTimController::class);
        Route::resource('/matakuliah', matakuliahController::class);
        Route::get('/kustomisasi', [KustomisasiController::class, 'index'])
            ->name('kustomisasi');
    });


// Halaman Prodi

// Informatika

Route::resource('/informatika', IfController::class);

// Geomatika

Route::resource('/geomatika', GmController::class);

// Animasi

Route::resource('/animasi', AnController::class);

// Teknologi Rekaya Multimedia

Route::resource('/tr-multimedia', TrmController::class);

// Rekayasa Keamanan Siber

Route::resource('/rekayasa-keamanan-siber', RksController::class);

// Teknologi Rekayasa Perangkat Lunak

Route::resource('/tr-perangkat-lunak', TrplController::class);

// Teknologi Permainan

Route::resource('/teknologi-permainan', TpController::class);
