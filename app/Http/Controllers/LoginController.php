<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\kurikulum;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return $this->redirectByRole(Auth::user()->role);
        }

        $statistik = [
            'prodi' => Prodi::count(),
            'kurikulum' => Kurikulum::count(),
            'matakuliah' => Matakuliah::count(),
        ];
        return view('admin.login' , compact('statistik') );
    }

    public function store(Request $request)
     {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return $this->redirectByRole(Auth::user()->role);
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    private function redirectByRole(string $role)
    {
        return match($role) {
            'ketua_jurusan' => redirect()
                ->route('admin.ketua-jurusan.index')
                ->with('login_success', 'Selamat datang kembali!'),

            'tim_kurikulum' => redirect()
                ->route('admin.tim-kurikulum.index')
                ->with('login_success', 'Selamat datang kembali!'),

            default => redirect()
                ->route('login')
                ->withErrors([
                    'email' => 'Role tidak dikenali.'
                ]),
        };
    }
}