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

Route::get('/kurikulum', function () {
    return view('tim_kurikulum.index');
});


Route::resource('/admin/dashboard',DashboardController::class);

Route::resource('/admin/program-studi',ProgramStudiController::class);

Route::resource('/admin/akun',AkunController::class);

Route::resource('/admin/profil',ProfileController::class);

Route::resource('/admin/login',LoginController::class);

Route::resource('/',JurusanController::class);



