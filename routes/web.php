<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/program-studi', function () {
    return view('admin.program-studi');
});

Route::get('/admin/akun', function () {
    return view('admin.akun');
});

Route::get('/admin/profil', function () {
    return view('admin.profil');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::get('/', function () {
    return view('jurusan.jurusan-informatika');
});


