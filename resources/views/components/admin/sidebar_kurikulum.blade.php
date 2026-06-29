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
        {{-- dashboard --}}
        <a href="/admin/tim-kurikulum" class="{{ request()->is('admin/tim-kurikulum')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200' }}">

            <img src="{{ request()->is('admin/tim-kurikulum')
    ? asset('images/icon-dashboard (putih).svg')
    : asset('images/Structure.svg') }}" alt="Dashboard" class="w-4 h-4">

            <span>Beranda</span>
        </a>
        {{-- kurikulum --}}
        <a href="/admin/kurikulum" class="{{ request()->is('admin/kurikulum')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200' }}">

            <img src="{{ request()->is('admin/kurikulum')
    ? asset('images/icon-kurikulum (putih).svg')
    : asset('images/icon-kurikulum(biru).svg') }}" alt="Kurikulum" class="w-4 h-4 mb-2">

            <span>Kurikulum</span>
        </a>
        {{-- mata kuliah --}}
        <a href="/admin/matakuliah" class="{{ request()->is('admin/matakuliah')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200' }}">

            <img src="{{ request()->is('admin/matakuliah')
    ? asset('images/icon-matakuliah (putih).svg')
    : asset('images/icon-matakuliah.svg') }}" alt="Mata kuliah" class="w-4 h-4">

            <span>Mata kuliah</span>
        </a>
        {{-- kustomisasi --}}
        <a href="/admin/kustomisasi" class="{{ request()->is('admin/kustomisasi')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200' }}">

            <img src="{{ request()->is('admin/kustomisasi')
    ? asset('images/icon-kustomisasi(putih).svg')
    : asset('images/icon-kustomisasi (biru).svg') }}" alt="Kustomisasi" class="w-4 h-4">

            <span>Kustomisasi</span>
        </a>
        {{-- profile --}}
        <a href="/admin/profile-tim-kurikulum" class="{{ request()->is('admin/profile-tim-kurikulum')
    ? 'flex items-center gap-0.5 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow'
    : 'flex items-center gap-0.5 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200' }}">

            <img src="{{ request()->is('admin/profile-tim-kurikulum')
    ? asset('images/icon-profil(putih).svg')
    : asset('images/icon-profile(biru).svg') }}" alt="profile" class="w-4 h-4">

            <span>Profil</span>
        </a>
    </nav>
</aside>