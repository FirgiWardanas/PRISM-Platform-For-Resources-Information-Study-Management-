<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRISM - Sistem Informasi Manajemen Kurikulum</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen overflow-x-hidden">

    <div class="w-full min-h-screen flex flex-col lg:flex-row">

        <!-- LEFT SIDE -->
        <div
            class="hidden lg:flex lg:w-[55%] relative overflow-hidden bg-gradient-to-br from-blue-700 via-indigo-600 to-purple-700">

            <!-- Background Decoration -->
            <div class="absolute -top-40 -right-40 w-[550px] h-[550px] rounded-full bg-white/10"></div>
            <div class="absolute -bottom-48 -left-48 w-[650px] h-[650px] rounded-full bg-white/10"></div>
            <div class="absolute top-1/2 right-16 w-64 h-64 rounded-full bg-white/5"></div>

            <!-- Content -->
            <div class="relative z-10 flex flex-col justify-center h-full px-16 xl:px-24">

                <!-- Logo -->
                <div class="flex items-center gap-4 mb-20">

                    <div class="w-14 h-14 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center">
                        <img src="{{ asset('images/prism.png') }}"  alt="PRISM" class="rounded-full ring-4">
                    </div>

                    <div>
                        <h1 class="text-4xl font-bold text-white">
                            PRISM
                        </h1>

                        <p class="text-blue-100 text-sm">
                            Platform for Resource and Study Management
                        </p>
                    </div>

                </div>

                <!-- Hero -->
                <div class="max-w-xl">

                    <h2 class="text-white text-3xl xl:text-4xl font-bold leading-tight">
                        Pengelolaan Akademik
                        <br>
                        yang Terintegrasi
                    </h2>

                    <p class="mt-6 text-md text-blue-100 leading-relaxed">
                        PRISM menyediakan platform terintegrasi untuk mengelola kurikulum,
                        menyusun struktur mata kuliah, dan mendukung perancangan akademik
                        program studi secara efektif.
                    </p>

                </div>

                <!-- Dashboard -->
                <div class="mt-10 max-w-xl">

                    <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-5">

                        <div class="flex justify-between items-center mb-4">

                            <h3 class="text-white font-semibold">
                                Dashboard Overview
                            </h3>

                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>

                        </div>

                        <div class="grid grid-cols-3 gap-3">

                            <div
                                class="bg-white/10 rounded-2xl p-4 cursor-pointer transition-all duration-300 hover:bg-white/20 hover:-translate-y-1 hover:shadow-2xl">

                                <div class="text-2xl font-bold text-white">
                                    {{ $statistik['prodi'] }}
                                </div>

                                <div class="text-sm text-blue-100 mt-1">
                                    Program Studi
                                </div>

                            </div>

                            <div
                                class="bg-white/10 rounded-2xl p-4 cursor-pointer transition-all duration-300 hover:bg-white/20 hover:-translate-y-1 hover:shadow-2xl">

                                <div class="text-2xl font-bold text-white">
                                    {{ $statistik['kurikulum'] }}
                                </div>

                                <div class="text-sm text-blue-100 mt-1">
                                    Kurikulum
                                </div>

                            </div>

                            <div
                                class="bg-white/10 rounded-2xl p-4 cursor-pointer transition-all duration-300 hover:bg-white/20 hover:-translate-y-1 hover:shadow-2xl">

                                <div class="text-2xl font-bold text-white">
                                    {{ $statistik['matakuliah'] }}
                                </div>

                                <div class="text-sm text-blue-100 mt-1">
                                    Mata Kuliah
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="w-full lg:w-[45%] bg-white flex items-center justify-center min-h-screen lg:min-h-0">

            <div class="w-full max-w-lg px-6 sm:px-8 md:px-10 py-10">

                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-10">

                    <h1
                        class="text-4xl sm:text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        PRISM
                    </h1>

                    <p class="text-slate-500 mt-2 text-sm sm:text-base">
                        Platform for Resource and Study Management
                    </p>

                </div>

                <!-- Heading -->
                <div class="mb-10">

                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
                        Selamat Datang di
                    </h2>

                    <h2 class="text-4xl md:text-5xl font-bold text-blue-600">
                        PRISM
                    </h2>

                    <p class="text-sm md:text-base text-slate-400 mt-2">
                        Login untuk melanjutkan
                    </p>

                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login.store') }}"  class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="Masukkan email Anda"
                            class="w-full px-5 py-4 border border-slate-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{      $message }}</p>
                        @enderror
                    </div>


                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Kata Sandi</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" required placeholder="Masukkan kata sandi"
                                class="w-full px-5 py-4 pr-14 border border-slate-300 rounded-xl focus:ring-4 focus:ring-purple-100 focus:border-purple-500 outline-none transition">
                            <button type="button" onclick="togglePassword()"
                                class="text-xl absolute right-4 top-1/2 -translate-y-1/2 text-blue-300 hover:text-blue-500">
                                👁
                            </button>
                        </div>

                   <a href="{{ url('/') }}" class="block text-[#4f00c5] mt-4 text-sm hover:underline">
                        &larr; Kembali ke halaman utama
                    </a>

                    </div>

                    <button type="submit"
                        class="w-full py-4 rounded-xl text-white font-semibold bg-gradient-to-r from-[#0084ff] to-[#5500ff] font-medium shadow-xl hover:scale-[1.02] active:scale-95 transition">
                        Masuk
                    </button>

                </form>

            </div>

        </div>

    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');

            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        }
    </script>

</body>

</html>