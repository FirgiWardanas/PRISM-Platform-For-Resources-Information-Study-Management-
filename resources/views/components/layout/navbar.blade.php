<header class="w-full fixed z-100 bg-[#112c66a8]">
    <nav class="flex justify-between items-center border-b-1 px-8 py-3">
        <div class="flex items-center">
            <img src="{{ asset('images/logo-prism.png') }}" class="h-11">
        </div>
        <div class="flex items-center gap-20">
            <ul class="hidden lg:flex gap-20 font-bold text-xs">
                <li>
                    <a href="#home" class="hover:text-orange-400 transition duration-300 cursor-pointer">Beranda</a>
                </li>
                <li>
                    <a href="#tentang" class="hover:text-orange-400 transition duration-300 cursor-pointer">Tentang Kami</a>
                </li>
                <li>
                    <a href="#programStudi" class="hover:text-orange-400 transition duration-300 cursor-pointer">Program Studi</a>
                </li>
                <li>
                    <a href="#kontak" class="hover:text-orange-400 transition duration-300 cursor-pointer">Kontak</a>
                </li>
            </ul>

            <div class="hidden lg:flex">
                <a href="/admin/login"  class="bg-gradient-to-r from-[#ff7700] to-[#ffa600] shadow-2xl px-8 py-2 rounded-lg text-primary text-xs font-bold hover:from-[#b95600] hover:to-[#af7200] hover:cursor-pointer hover:scale-105 transition">
                    LOGIN
                </a>
            </div>
        </div>

        <button id="menu-btn" class="lg:hidden block">
            <img src="{{ asset('images/menu.png') }}" alt="Menu" class="w-5 hover:cursor-pointer hover:opacity-50 hover:scale-105 transition">
        </button>
    </nav>

    {{-- MOBILE MENU --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-black/40 backdrop-blur-sm mx-6 mt-4 p-4 rounded-xl transition duration-300">
        <ul class="flex flex-col gap-3 text-sm font-semibold">
            <li class="p-3 rounded-lg hover:bg-white/10 transition">Beranda</li>
            <li class="p-3 rounded-lg hover:bg-white/10 transition">Tentang Kami</li>
            <li class="p-3 rounded-lg hover:bg-white/10 transition">Program Studi</li>
            <li class="p-3 rounded-lg hover:bg-white/10 transition">Kontak</li>
        </ul>
        <div class="flex flex-col gap-4 mt-4 px-2">
            <button class="bg-gradient-to-r from-[#ff7700] to-[#ffa600] shadow-2xl px-8 py-3 rounded-lg text-white text-xs font-bold transition duration-200 hover:from-[#b95600] hover:to-[#af7200] hover:scale-102 hover:cursor-pointer">
                LOGIN
            </button>
        </div>
    </div>
</header>

