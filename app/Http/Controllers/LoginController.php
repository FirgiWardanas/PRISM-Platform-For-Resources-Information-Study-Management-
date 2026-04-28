<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserKurikulum;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = UserKurikulum::where('email', $request->email)->first();

        // Cek user ada dan password cocok
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }

        // Login user
        Auth::login($user);

        // Redirect berdasarkan role
        if ($user->role === 'ketua_jurusan') {
            return redirect('/admin/dashboard');
        } elseif ($user->role === 'tim_kurikulum') {
            return redirect('/tim_kurikulum/dashboard');
        }

        return back()->withErrors(['email' => 'Role tidak dikenali.']);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}