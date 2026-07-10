<aside id="sidebar" class="fixed top-4 left-4 w-64 h-[calc(100vh-2rem)] rounded-3xl bg-white p-5 shadow-lg border border-gray-300 z-50
    -translate-x-[120%]
    transition-transform duration-300
    lg:translate-x-0">

    <button id="closeBtn" onclick="toggleSidebar()"
        class="absolute top-3 right-2 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600 cursor-pointer flex items-center justify-center text-sm font-bold focus:outline-none lg:hidden">
        ✕
    </button>

    <div class="mb-10 flex items-center gap-2 pr-6 lg:pr-0">
        <div class="h-14.5 w-14.5 flex-shrink-0">
            <img src="{{ asset('images/logo-prism.svg') }}" class="w-full h-full object-contain" alt="Logo PRISM">
        </div>

        <div>
            <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
            <p class="text-[11px] text-[#0161C5] font-semibold">Platform for Resource & Information Study Management</p>
        </div>
    </div>

    <nav class="space-y-3">
        {{-- dashboar --}}
        <a href="/admin/ketua-jurusan"
            class="{{ request()->is('admin/ketua-jurusan')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/ketua-jurusan')
    ? asset('images/icon-dashboard (putih).svg')
    : asset('images/Structure.svg') }}" alt="Dashboard" class="w-4 h-4">

            <span>Beranda</span>
        </a>

        {{-- program-studi --}}
        <a href="/admin/program-studi"
            class="{{ request()->is('admin/program-studi')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/program-studi')
    ? asset('images/icon-program studi(putih).svg')
    : asset('images/icon-program studi(biru).svg') }}" alt="Program studi" class="w-4 h-4">

            <span>Program studi</span>
        </a>

        {{-- akun --}}
        <a href="/admin/akun"
            class="{{ request()->is('admin/akun')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/akun')
    ? asset('images/icon-dosen(putih).svg')
    : asset('images/icon-dosen(biru).svg') }}" alt="Dosen" class="w-4 h-4 mb-1">

            <span>Kelola Akun</span>
        </a>

        {{-- kelola-dosen --}}
        <a href="/admin/kelola-dosen"
            class="{{ request()->is('admin/kelola-dosen')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/kelola-dosen')
    ? asset('images/icon-akun(putih).svg')
    : asset('images/icon-akun(biru).svg') }}" alt="Kelola-dosen" class="w-4 h-4">

            <span>Kelola Dosen</span>
        </a>

        {{-- profile --}}
        <a href="/admin/profile-ketua-jurusan"
            class="{{ request()->is('admin/profile-ketua-jurusan')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/profile-ketua-jurusan')
    ? asset('images/icon-profil(putih).svg')
    : asset('images/icon-profile(biru).svg') }}" alt="profile" class="w-4 h-4">

            <span>Profil</span>
        </a>
    </nav>
</aside>