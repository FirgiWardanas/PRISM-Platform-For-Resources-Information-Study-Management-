<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KustomisasiController extends Controller
{
    public function index()
    {
        return view('admin.tim_kurikulum.kustomisasi');
    }
}
