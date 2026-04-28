<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AnController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GmController;
use App\Http\Controllers\IfController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\RksController;
use App\Http\Controllers\TpController;
use App\Http\Controllers\TrmController;
use App\Http\Controllers\TrplController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/kurikulum', function () {
    return view('tim_kurikulum.kurikulum');
});

Route::get('/profilekur', function () {
    return view('tim_kurikulum.profile');
});

Route::get('/dashboardkur', function () {
    return view('tim_kurikulum.dashboard');
});


Route::resource('/admin/dashboard',DashboardController::class);

Route::resource('/admin/program-studi',ProgramStudiController::class);

Route::resource('/admin/akun',AkunController::class);

Route::resource('/admin/profil',ProfileController::class);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/admin/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/tim_kurikulum/dashboard', [DashboardController::class, 'tim']);
Route::resource('/',JurusanController::class);

Route::resource('/prodi/if',IfController::class);

Route::resource('/prodi/gm',GmController::class);

Route::resource('/prodi/an',AnController::class);

Route::resource('/prodi/tp',TpController::class);

Route::resource('/prodi/trm',TrmController::class);

Route::resource('/prodi/trpl',TrplController::class);

Route::resource('/prodi/rks',RksController::class);

