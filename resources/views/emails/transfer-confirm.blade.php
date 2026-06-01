<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Jabatan - PRISM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-purple-50 flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">

        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-white text-2xl">✓</span>
            </div>
            <h1 class="text-xl font-bold text-[#1B4597]">Konfirmasi Jabatan Ketua Jurusan</h1>
            <p class="text-gray-500 text-sm mt-2">
                Anda akan menjadi Ketua Jurusan baru.<br>
                Buat password untuk akun Anda.
            </p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-3 rounded-lg text-sm mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('transfer.confirm.process', $token) }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm text-gray-700 mb-1">Email Akun</label>
                <input type="text" value="{{ $transfer->new_email }}" disabled
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm bg-gray-50 text-gray-500">
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 mb-1">Password Baru</label>
                <input type="password" name="password" required placeholder="Minimal 6 karakter"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-700 mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required placeholder="Ulangi password"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-xl py-3 font-medium hover:opacity-90">
                Konfirmasi & Simpan
            </button>
        </form>

    </div>
</body>
</html>