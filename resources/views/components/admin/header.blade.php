<div class="relative flex items-center justify-between mb-6">

    <div class="flex items-center gap-4">
        <button id="menuBtn" class="lg:hidden bg-white p-3 rounded-xl shadow border">

            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

        </button>

        <h1 class="text-2xl font-semibold">
            {{ $slot }}
        </h1>
    </div>

    <button id="profileBtn">
        <img src="{{ asset('../images/Profile-Circle.png') }}" alt="profil"
            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full cursor-pointer">
    </button>

    {{-- modal profile --}}
    <div id="profileCard"
        class="hidden absolute top-16 right-0 z-[999] w-[90vw] max-w-[320px] transition-all duration-200">

        <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-4 sm:p-5">

            <div class="flex items-center gap-4 mb-4">

                <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil" class="w-14 h-14 rounded-full">

                <h2 class="text-lg sm:text-xl font-semibold">
                    {{ Auth::user()->nama }}
                </h2>

            </div>

            <div class="text-sm text-gray-600 space-y-2 break-words">

                <p>Nama : {{ Auth::user()->nama }}</p>

                <p>NIP : {{Auth::user()->nip }}</p>

                <p>Email : {{ Auth::user()->email }}</p>

                <p>Program Studi : Teknik Informatika</p>

                <p>Password : ••••••••</p>

            </div>

            <div class="flex flex-col sm:flex-row gap-2 mt-5">

                <a href="/admin/profile-ketua-jurusan"
                    class="w-full sm:w-auto text-center px-4 py-2 rounded-xl bg-slate-400 text-white">
                    Selengkapnya
                </a>

                <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">

                    @csrf

                    <button type="submit"
                        class="w-full px-4 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow">
                        Logout
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>