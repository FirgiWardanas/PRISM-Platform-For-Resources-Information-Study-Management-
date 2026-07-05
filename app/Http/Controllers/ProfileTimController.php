<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileTimController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('admin.tim_kurikulum.profile', compact('user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

  
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'required|unique:user,nip,' . $user->id_user . ',id_user',
            'email'    => 'required|email|unique:user,email,' . $user->id_user . ',id_user',
            'password' => 'nullable|confirmed',
    ], [
        'nama.required' => 'Nama wajib diisi.',

        'nip.required' => 'NIP wajib diisi.',
        'nip.unique' => 'NIP sudah digunakan.',

        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email sudah digunakan.',


        'password.confirmed' => 'Konfirmasi password tidak cocok.',
    ]);

    try {

        $user->nama  = $request->nama;
        $user->nip   = $request->nip;
        $user->email = $request->email;

        if ($request->filled('password')) {

            if (Hash::check($request->password, $user->password)) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Password baru tidak boleh sama dengan password saat ini.');
            }

            $user->password = Hash::make($request->password);
        }

        if (!$user->isDirty()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Tidak ada data yang diubah.');
        }

        $user->save();

        return redirect()->back()
            ->with('success', 'Profil berhasil diperbarui!');

    } catch (\Exception $e) {

        return redirect()->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat memperbarui profil.');

    }
}
    
    public function destroy(string $id)
    {
        //
    }
}
