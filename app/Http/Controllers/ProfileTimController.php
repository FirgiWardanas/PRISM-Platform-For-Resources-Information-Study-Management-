<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileTimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.tim_kurikulum.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();

        $request->validate([
            'nama'     => 'required|string|max:100',
            'nip'      => 'required|string|max:20|unique:user,nip,' . $user->id_user . ',id_user',
            'email'    => 'required|email|unique:user,email,' . $user->id_user . ',id_user',
            'password' => 'nullable|min:6',
        ]);
        $user->nama  = $request->nama;
        $user->nip   = $request->nip;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
         if (!$user->isDirty()) {
        return back()->with('info', 'Tidak ada perubahan data yang disimpan.');
         }
        $user->save();

        return redirect()->route('admin.profile-tim-kurikulum.index')
            ->with('success', 'Profile berhasil diupdate');    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
