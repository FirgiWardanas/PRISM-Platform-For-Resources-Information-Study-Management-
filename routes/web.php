<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::resource('/admin/dashboard',DashboardController::class);

Route::resource('/admin/program-studi',ProgramStudiController::class);

Route::resource('/admin/akun',AkunController::class);

Route::resource('/admin/profil',ProfileController::class);

Route::resource('/admin/login',LoginController::class);

Route::resource('/',JurusanController::class);





// Route::get('/admin/program-studi', function () {
//     return view('admin.program-studi');
// });

// Route::get('/admin/akun', function () {
//     return view('admin.akun');
// });

// Route::get('/admin/profil', function () {
//     return view('admin.profil');
// });

// Route::get('/admin/login', function () {
//     return view('admin/login');
// });

// Route::get('/', function () {
//     return view('jurusan.jurusan-informatika');
// });


