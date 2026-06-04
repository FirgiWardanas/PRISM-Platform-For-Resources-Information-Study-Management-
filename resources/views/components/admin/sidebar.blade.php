<aside id="sidebar" class="fixed top-4 left-4 w-64 h-[calc(100vh-2rem)] rounded-3xl bg-white p-5 shadow-lg border border-gray-300 z-50
    -translate-x-[120%]
    transition-transform duration-300
    lg:translate-x-0">
    <div class="mb-10 flex items-center gap-3">
        <div class="h-12 w-20 rounded-full bg-cover bg-center">
            <img src="{{ asset('images/logo prism.png') }}" alt="">
        </div>

        <div>
            <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
            <p class="text-xs text-[#0161C5]">platform for resource & study Management</p>
        </div>
    </div>

    <nav class="space-y-3">
        {{-- dashboar --}}
        <a href="/admin/ketua-jurusan" class="{{ request()->is('admin/ketua-jurusan')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/ketua-jurusan')
    ? asset('images/icon-dashboard (putih).svg')
    : asset('images/Structure.svg') }}" alt="Dashboard" class="w-4 h-4">

            <span>Dashboard</span>
        </a>
        {{-- program-studi --}}
        <a href="/admin/program-studi" class="{{ request()->is('admin/program-studi')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/program-studi')
    ? asset('images/icon-program studi(putih).svg')
    : asset('images/icon-program studi(biru).svg') }}" alt="Program studi" class="w-4 h-4">

            <span>Program studi</span>
        </a>
        {{-- akun --}}
        <a href="/admin/akun" class="{{ request()->is('admin/akun')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/akun')
    ? asset('images/icon-dosen(putih).svg')
    : asset('images/icon-dosen(biru).svg') }}" alt="Dosen" class="w-4 h-4">

            <span>Dosen</span>
        </a>
        {{-- kelola-dosen --}}
        <a href="/admin/kelola-dosen" class="{{ request()->is('admin/kelola-dosen')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/kelola-dosen')
    ? asset('images/icon-akun(putih).svg')
    : asset('images/icon-akun(biru).svg') }}" alt="Kelola-dosen" class="w-4 h-4">

            <span>Kelola dosen</span>
        </a>
        {{-- profile --}}
        <a href="/admin/profile-ketua-jurusan" class="{{ request()->is('admin/profile-ketua-jurusan')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-100' }}">

            <img src="{{ request()->is('admin/profile-ketua-jurusan')
    ? asset('images/icon-profil(putih).svg')
    : asset('images/icon-profile(biru).svg') }}" alt="profile" class="w-4 h-4">

            <span>Profile</span>
        </a>
    </nav>
</aside>