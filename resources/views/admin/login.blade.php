<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen lg:overflow-hidden">

<div class="flex flex-col lg:flex-row min-h-screen">

    <!-- LEFT SIDE (TETAP ADA DI MOBILE) -->
    <div class="w-full lg:w-[58%] relative bg-[url('{{ asset('images/17.png') }}')] bg-cover bg-center">

        <!-- overlay biar teks kebaca -->
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="relative z-10 flex flex-col justify-between h-full md:p-12 lg:p-14 p-8">

            <!-- TEXT -->
            <div class="text-center lg:text-left">
                <h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-extrabold leading-none">
                    Welcome to
                </h1>

                <h2 class="text-white text-4xl md:text-5xl lg:text-6xl font-light leading-none mt-2">
                    PRISM
                </h2>

                <p class="text-white/80 mt-4 text-sm md:text-base lg:text-lg">
                    Login to access your account
                </p>
            </div>

            <!-- IMAGE -->
            <div class="flex justify-center mt-10 lg:mt-0">
                <img src="{{ asset('images/loginn.png') }}" class="w-[70%] md:w-[70%] lg:w-[95%]" alt="">
            </div>

        </div>
    </div>

    <!-- RIGHT SIDE LOGIN -->
    <div class="w-full lg:w-[42%] bg-[#e0f4ff] flex items-center justify-center px-6 sm:px-10 lg:px-16 py-12 lg:py-0">

        <div class="w-full max-w-md">

            <h1 class="text-[#0054ca] text-4xl md:text-5xl font-bold mb-3">
                Login
            </h1>

            <p class="text-[#0080c5] mb-10 md:mb-14">
                Enter your account details
            </p>

            <form method="POST" action="{{ route('login.store') }}" class="space-y-6 md:space-y-8">
                @csrf

                <!-- EMAIL -->
                <div>
                    <label class="block text-[#0080c5] mb-2">
                        Email
                    </label>

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required
                        class="w-full px-4 py-3 rounded-xl
                        bg-[#0054ca]/10
                        border border-[#0054ca]/20
                        text-[#0054ca]
                        placeholder:text-[#0054ca]/50
                        backdrop-blur-md
                        focus:border-cyan-300
                        focus:ring-2 focus:ring-cyan-300/40
                        outline-none transition">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div>
                    <label class="block text-[#0080c5] mb-2">
                        Password
                    </label>

                    <div class="relative">

                        <input type="password" name="password" id="password" placeholder="Enter your password" required
                            class="w-full px-4 py-3 rounded-xl
                            bg-[#0054ca]/10
                            border border-[#0054ca]/20
                            text-[#0054ca]
                            placeholder:text-[#0054ca]/50
                            backdrop-blur-md
                            focus:border-cyan-300
                            focus:ring-2 focus:ring-cyan-300/40
                            outline-none transition">

                        <button type="button" onclick="togglePassword()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-[#0054ca] cursor-pointer focus:outline-none">
                            👁
                        </button>

                    </div>

                    <a href="{{ url('/') }}" class="block text-[#0080c5] mt-4 text-sm hover:underline">
                        &larr; Kembali ke halaman utama
                    </a>
                </div>

                <!-- BUTTON -->
                <button type="submit"
                    class="w-full py-4 rounded-xl bg-gradient-to-r from-[#0084ff] to-[#5500ff] text-white font-medium shadow-xl hover:scale-[1.02] active:scale-95 transition">
                    Login
                </button>

            </form>

        </div>

    </div>

</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
</script>
</body>
</html>