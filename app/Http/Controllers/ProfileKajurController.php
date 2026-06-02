<?php

namespace App\Http\Controllers;

use App\Mail\TransferConfirmationMail;
use App\Models\PendingTransfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ProfileKajurController extends Controller
{
    // ── Tampilkan halaman profil ──────────────────────────────────────────
    public function index()
    {
        $user = Auth::user();

        $pendingTransfer = PendingTransfer::where('id_user', $user->id_user)
            ->where('is_used', false)
            ->where('expires_at', '>', now())
            ->first();

        return view('admin.ketua_jurusan.profil', compact('user', 'pendingTransfer'));
    }

    // ── Update profil biasa ───────────────────────────────────────────────
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'required|unique:users,nip,' . $user->id_user . ',id_user',
            'email'    => 'required|email|unique:users,email,' . $user->id_user . ',id_user',
            'password' => 'nullable|min:6',
        ]);

        $user->nama  = $request->nama;
        $user->nip   = $request->nip;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()
            ->with('success', 'Profil berhasil diperbarui!');
    }

    // ── Verifikasi identitas ketua lama ───────────────────────────────────
    public function verify(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = Auth::user();

        if ($request->email !== $user->email || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah!'
            ], 401);
        }

        return response()->json(['success' => true]);
    }

    // ── Kirim link ke email ketua baru ────────────────────────────────────
    public function initiateTransfer(Request $request)
    {
        $request->validate([
            'new_email' => 'required|email',
        ]);

        $user = Auth::user();

        if ($request->new_email === $user->email) {
            return response()->json([
                'success' => false,
                'message' => 'Email baru tidak boleh sama dengan email saat ini!'
            ], 422);
        }

        // Hapus token lama kalau ada
        PendingTransfer::where('id_user', $user->id_user)
            ->where('is_used', false)
            ->delete();

        $token     = Str::random(64);
        $expiresAt = now()->addHours(24);

        PendingTransfer::create([
            'id_user'    => $user->id_user,
            'new_email'  => $request->new_email,
            'token'      => $token,
            'expires_at' => $expiresAt,
        ]);

        Mail::to($request->new_email)->send(
            new TransferConfirmationMail($token, $expiresAt->format('d M Y, H:i'))
        );

        return response()->json([
            'success'    => true,
            'expires_at' => $expiresAt->toIso8601String(),
            'new_email'  => $request->new_email,
        ]);
    }

    // ── Batalkan transfer ─────────────────────────────────────────────────
    public function cancelTransfer()
    {
        $user = Auth::user();

        PendingTransfer::where('id_user', $user->id_user)
            ->where('is_used', false)
            ->delete();

        return response()->json(['success' => true]);
    }

    // ── Halaman konfirmasi untuk ketua baru ───────────────────────────────
    public function showConfirmPage(string $token)
    {
        $transfer = PendingTransfer::where('token', $token)
            ->where('is_used', false)
            ->where('expires_at', '>', now())
            ->firstOrFail();

        return view('emails.transfer-confirm', compact('transfer', 'token'));
    }

    // ── Proses konfirmasi, update data user ───────────────────────────────
    public function processConfirm(Request $request, string $token)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $transfer = PendingTransfer::where('token', $token)
            ->where('is_used', false)
            ->where('expires_at', '>', now())
            ->firstOrFail();

        // Update email + password, ID tetap sama
        $user           = User::findOrFail($transfer->id_user);
        $user->email    = $transfer->new_email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Tandai token sudah dipakai
        $transfer->is_used = true;
        $transfer->save();

        return redirect()->route('login')
            ->with('success', 'Akun berhasil diperbarui! Silakan login dengan akun baru.');
    }
}