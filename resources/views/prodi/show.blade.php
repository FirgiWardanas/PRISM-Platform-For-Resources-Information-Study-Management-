<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $prodi->nama_prodi }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('..\resources\css\app.css')

    @php
        $primary   = $prodi->kustomisasi->primary_color   ?? '#136479';
        $secondary = $prodi->kustomisasi->secondary_color ?? '#01B2C2';
        $tertiary  = $prodi->kustomisasi->tertiary_color  ?? '#7EFFE1';
        $quaternary = $prodi->kustomisasi->quaternary_color ?? '#01B2C2';
    @endphp

    <style>
        :root {
            --color-primary:    {{ $primary }};
            --color-secondary:  {{ $secondary }};
            --color-tertiary:   {{ $tertiary }};
            --color-quaternary: {{ $quaternary }};
        }
        .navbar-bg   { background-color: var(--color-primary); }
        .btn-login   { background: var(--color-quaternary) }
        .btn-login:hover { opacity: 0.85; }
        .nav-hover:hover { color: var(--color-quaternary); }
        .text-primary-color  { color: var(--color-primary); }
        .text-secondary-color { color: var(--color-secondary); }
        .text-tertiary-color  { color: var(--color-tertiary); }
        .profil-slide { background: linear-gradient(to bottom right, var(--color-primary), var(--color-secondary), var(--color-tertiary)); }
        .tab-bg {background-color: color-mix(in srgb, var(--color-secondary) 20%, white); color: var(--color-primary);
        }
        #tab1:checked + label,#tab2:checked + label {background-color: color-mix(in srgb, var(--color-secondary) 60%, white);color: white;
        }
        .tab-active-bg { background-color: color-mix(in srgb, var(--color-secondary) 60%, white); }
        .tab-text      { color: var(--color-primary); }
        .visi-nomor    { color: color-mix(in srgb, var(--color-tertiary) 60%, white); }
    </style>
</head>

<body class="font-[Montserrat]">

    {{-- HERO SECTION dengan SVG header dinamis --}}
    <div class="min-h-screen w-full relative text-white overflow-hidden">

        {{-- SVG Header sebagai background --}}
        <div class="absolute inset-0 z-0">
           <svg class="w-full h-full" viewBox="0 0 1441 750" preserveAspectRatio="xMidYMid slice" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Background utama -->
                <rect width="1440" height="750" fill="url(#headerGrad)"/>
                <!-- Fade putih -->
                <rect width="1440" height="750" fill="url(#fadeWhite)"/>
                <defs>
                    <!-- Gradient utama -->
                    <linearGradient id="headerGrad" x1="1052" y1="750" x2="626" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="{{ $tertiary }}"/>
                        <stop offset="45%" stop-color="{{ $secondary }}"/>
                        <stop offset="100%" stop-color="{{ $primary }}"/>
                    </linearGradient>
                    <!-- Fade putih yang sangat smooth -->
                    <linearGradient id="fadeWhite" x1="720" y1="0" x2="720" y2="750" gradientUnits="userSpaceOnUse">
                        <stop offset="30%" stop-color="white" stop-opacity="0"/>
                        <stop offset="45%" stop-color="white" stop-opacity="0.02"/>
                        <stop offset="60%" stop-color="white" stop-opacity="0.08"/>
                        <stop offset="72%" stop-color="white" stop-opacity="0.18"/>
                        <stop offset="82%" stop-color="white" stop-opacity="0.35"/>
                        <stop offset="90%" stop-color="white" stop-opacity="0.60"/>
                        <stop offset="96%" stop-color="white" stop-opacity="0.85"/>
                        <stop offset="100%" stop-color="white" stop-opacity="1"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        {{-- NAVBAR --}}
        <header class="w-full fixed z-50 navbar-bg">
            <nav class="flex justify-between items-center px-8 py-3">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo-prism.png') }}" class="h-11">
                </div>
                <div class="flex items-center gap-20">
                    <ul class="hidden lg:flex gap-20 font-bold text-xs">
                        <li><a href="#home"      class="nav-hover transition duration-300 cursor-pointer">Beranda</a></li>
                        <li><a href="#tentang"   class="nav-hover transition duration-300 cursor-pointer">Tentang Kami</a></li>
                        <li><a href="#visimisi"  class="nav-hover transition duration-300 cursor-pointer">Visi Misi</a></li>
                        <li><a href="#kurikulum" class="nav-hover transition duration-300 cursor-pointer">Kurikulum</a></li>
                        <li><a href="#dosen"     class="nav-hover transition duration-300 cursor-pointer">Dosen</a></li>
                    </ul>
                    <div class="hidden lg:flex items-center gap-3">
                    <a href="{{ route('index') }}"
                        class="shadow-2xl px-8 py-2 rounded-lg text-white text-xs font-bold hover:scale-105 transition cursor-pointer border border-white/40 bg-white/10 backdrop-blur-sm">
                        ← Beranda
                    </a>
                    <a href="/admin/login"
                        class="btn-login shadow-2xl px-8 py-2 rounded-lg text-white text-xs font-bold hover:scale-105 transition cursor-pointer">
                        LOGIN
                    </a>
                </div>
                </div>
                <button id="menu-btn" class="lg:hidden block">
                    <img src="{{ asset('images/menu.png') }}" alt="Menu" class="w-5 hover:opacity-50 transition">
                </button>
            </nav>

            <div id="mobile-menu" class="hidden lg:hidden bg-black/40 backdrop-blur-sm mx-6 mt-4 p-4 rounded-xl transition duration-300">
                <ul class="flex flex-col gap-3 text-sm font-semibold">
                    <li><a href="#home"      class="block w-full p-3 rounded-lg hover:bg-white/10 transition">Beranda</a></li>
                    <li><a href="#tentang"   class="block w-full p-3 rounded-lg hover:bg-white/10 transition">Tentang Kami</a></li>
                    <li><a href="#visimisi"  class="block w-full p-3 rounded-lg hover:bg-white/10 transition">Visi Misi</a></li>
                    <li><a href="#kurikulum" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">Kurikulum</a></li>
                    <li><a href="#dosen"     class="block w-full p-3 rounded-lg hover:bg-white/10 transition">Dosen</a></li>
                    <li>
                    <a href="{{ route('index') }}" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                        ← Beranda
                    </a>
                </li>
                </ul>
                <div class="flex flex-col gap-4 mt-4 px-2">
                    <a href="/admin/login" class="btn-login shadow-2xl px-8 py-3 rounded-lg text-white text-xs font-bold transition hover:scale-102 cursor-pointer">
                        LOGIN
                    </a>
                </div>
            </div>
        </header>

        {{-- HERO CONTENT --}}
        <section id="home" class="relative z-10 w-full min-h-screen flex items-center justify-center overflow-hidden px-4 md:px-10 lg:px-16">
            <div class="w-full max-w-6xl flex flex-col-reverse md:flex-row items-center justify-between gap-10">
                <div class="text-center md:text-left space-y-2">
                    @if($prodi->detailProdi?->logo)
                        <img src="{{ Storage::url($prodi->detailProdi->logo) }}" class="w-24 sm:w-28 md:w-32 mx-auto md:mx-0">
                    @endif
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">{{ $prodi->nama_prodi }}</h1>
                    <h3 class="text-sm sm:text-base md:text-lg lg:text-2xl text-white/60 font-semibold">Program Studi {{ $prodi->jenjang }}</h3>
                    <button class="btn-login shadow-2xl px-12 md:px-12  py-3 md:py-3 rounded-full text-sm md:text-lg font-bold mt-5 transition hover:scale-105 cursor-pointer">
                        <a href="#kurikulum">
                        Kurikulum</a>
                    </button>
                </div>
                <div class="flex justify-center">
                    @if($prodi->detailProdi?->ilustrasi)
                <img src="{{ Storage::url($prodi->detailProdi->ilustrasi) }}"
                    class="w-52 sm:w-64 md:w-80 lg:w-[420px] drop-shadow-xl hover:scale-105 transition duration-300">
                @endif
                </div>
            </div>
        </section>
    </div>

    {{-- TENTANG --}}
    <section id="tentang" class="flex flex-col justify-center items-center px-8 lg:px-45 py-48 mt-20">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-primary-color text-center">{{ $prodi->nama_prodi }}</h1>
            <h1 class="text-2xl md:text-3xl font-semibold lg:text-4xl mb-3 text-secondary-color">{{ $prodi->jenjang }}</h1>
            <p class="text-center mb-12">{{ $prodi->detailProdi?->deskripsi_prodi }}</p>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section id="visimisi" class="py-20 relative overflow-hidden flex flex-col justify-center items-center mb-40">

        {{-- Ring dekorasi SVG kiri --}}
        <div class="absolute top-25 -left-12 w-40 sm:w-50 md:w-60 lg:w-80 z-0">
            <svg class="w-full h-auto"
                viewBox="0 0 439 439"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="219.5" cy="219.5" r="179.5"
                        stroke="url(#ringGradLeft)"
                        stroke-width="80"/>
                <defs>
                    <linearGradient id="ringGradLeft" x1="105.605" y1="35.4126" x2="433.895" y2="321.087" gradientUnits="userSpaceOnUse">
                        <stop stop-color="{{ $primary }}"/>
                        <stop offset="0.579929" stop-color="{{ $secondary }}"/>
                        <stop offset="1" stop-color="{{ $tertiary }}"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        {{-- Ring dekorasi SVG kanan --}}
        <div class="absolute bottom-0 -right-12 w-40 sm:w-50 md:w-60 lg:w-80 z-0">
            <svg class="w-full h-auto"
                viewBox="0 0 439 439"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="219.5" cy="219.5" r="179.5"
                        stroke="url(#ringGradRight)"
                        stroke-width="80"/>
                <defs>
                    <linearGradient id="ringGradRight" x1="105.605" y1="35.4126" x2="433.895" y2="321.087" gradientUnits="userSpaceOnUse">
                        <stop stop-color="{{ $primary }}"/>
                        <stop offset="0.579929" stop-color="{{ $secondary }}"/>
                        <stop offset="1" stop-color="{{ $tertiary }}"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <h1 class="text-3xl md:text-5xl font-bold text-primary-color mb-16 text-center">Visi Misi</h1>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-6 z-10">
            <div class="bg-white rounded-2xl shadow-md p-6 md:p-10 text-center hover:scale-105 transition flex flex-col items-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 visi-nomor">01</h1>
                <p class="font-bold text-primary-color mb-3 text-lg md:text-xl">Visi Prodi {{ $prodi->nama_prodi }}</p>
                <p class="text-sm md:text-base text-justify leading-relaxed">{{ $prodi->detailProdi?->visi }}</p>
            </div>
            <div class="bg-white rounded-2xl shadow-md p-6 md:p-10 text-center hover:scale-105 transition flex flex-col items-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 visi-nomor">02</h1>
                <p class="font-bold text-primary-color mb-3 text-lg md:text-xl">Misi Prodi {{ $prodi->nama_prodi }}</p>
                <p class="text-sm md:text-base text-justify leading-relaxed">{{ $prodi->detailProdi?->misi }}</p>
            </div>
        </div>
    </section>

    {{-- PROFIL LULUSAN --}}
    <section class="flex flex-col justify-center items-center mb-48 px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-10 md:mb-16 text-primary-color text-center">Profil Lulusan</h1>

        <div class="relative w-full max-w-[900px] h-[450px] md:h-[320px] flex items-center justify-center overflow-hidden md:overflow-visible">
            <div class="relative w-full h-full">
                @forelse($prodi->detailProdi?->profilLulusans ?? [] as $profil)
                    <div class="slide absolute left-1/2 w-[90%] md:w-[700px] h-[380px] md:h-[300px] rounded-3xl profil-slide flex flex-col md:flex-row items-center justify-center md:justify-start px-6 md:px-10 shadow-2xl transition-all duration-500">
                       @php
                            $fotoLulusan = $profil->icon_lulusan ?? $prodi->detailProdi?->icon_lulusan;
                        @endphp
                        @if($fotoLulusan)
                            <img src="{{ Storage::url($fotoLulusan) }}" class="w-32 md:w-56 rounded-2xl object-cover">
                        @endif
                        <div class="text-white md:ml-6 text-center md:text-left mt-4 md:mt-0">
                            <h1 class="text-2xl md:text-4xl font-bold">{{ $profil->judul_lulusan }}</h1>
                            <p class="text-[10px] md:text-sm mt-2 leading-relaxed">{{ $profil->deskripsi_lulusan }}</p>
                        </div>
                    </div>
                @empty
                    <div class="flex items-center justify-center w-full h-full">
                        <p class="text-gray-400 italic">Belum ada profil lulusan.</p>
                    </div>
                @endforelse
            </div>
            <button onclick="prev()" class="absolute left-2 lg:left-20 z-20 bg-white/80 w-10 h-10 md:w-12 md:h-12 rounded-full shadow flex items-center justify-center hover:scale-110">❮</button>
            <button onclick="next()" class="absolute right-2 lg:right-20 z-20 bg-white/80 w-10 h-10 md:w-12 md:h-12 rounded-full shadow flex items-center justify-center hover:scale-110">❯</button>
        </div>
    </section>

    {{-- KURIKULUM --}}
    <section id="kurikulum" class="flex flex-col justify-center items-center mb-48 px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-6 text-primary-color text-center">Kurikulum</h1>

        <div class="w-full max-w-5xl mx-auto mt-4 p-4 md:p-6 flex flex-wrap">

            {{-- Tab Aktif --}}
            <input type="radio" name="tabs" id="tab1" class="peer/tab1 hidden" checked>
            <label for="tab1" class="w-1/2 md:w-40 h-12 md:h-14 flex items-center justify-center tab-bg font-bold cursor-pointer tab-text peer-checked/tab1:tab-active-bg peer-checked/tab1:text-white rounded-t-xl text-sm md:text-base">
                Aktif
            </label>

            <div class="w-full px-4 md:px-10 py-10 md:py-20 tab-active-bg order-1 hidden peer-checked/tab1:block rounded-b-xl rounded-tr-xl">
                @if($kurikulumAktif)
                    @include('prodi.partials.semester-list', ['kurikulum' => $kurikulumAktif, 'suffix' => 'aktif'])
                @else
                    <p class="text-white text-center italic">Belum ada kurikulum aktif.</p>
                @endif
            </div>

            {{-- Tab Tidak Aktif --}}
            <input type="radio" name="tabs" id="tab2" class="peer/tab2 hidden">
            <label for="tab2" class="w-1/2 md:w-40 h-12 md:h-14 flex items-center justify-center tab-bg font-bold cursor-pointer tab-text peer-checked/tab2:tab-active-bg peer-checked/tab2:text-white rounded-t-xl text-sm md:text-base">
                Tidak Aktif
            </label>

            <div class="w-full p-4 md:p-12 tab-active-bg order-1 hidden peer-checked/tab2:block rounded-b-xl rounded-tr-xl">
                @if($kurikulumTidakAktif->count() > 0)
                    <div class="flex flex-wrap gap-2 md:gap-4 mb-6">
                        @foreach($kurikulumTidakAktif as $idx => $kur)
                            <button data-id="{{ $idx }}" class="kur-btn w-full sm:w-auto min-w-[140px] px-6 py-3 md:px-8 md:py-4 rounded-lg shadow bg-white tab-text font-bold text-sm md:text-base text-center">
                                {{ $kur->nama_kurikulum }}
                            </button>
                        @endforeach
                    </div>
                    @foreach($kurikulumTidakAktif as $idx => $kur)
                        <div id="kur-{{ $idx }}" class="kur-content {{ $idx > 0 ? 'hidden' : '' }}">
                            @include('prodi.partials.semester-list', ['kurikulum' => $kur, 'suffix' => 'tidak-aktif-'.$idx])
                        </div>
                    @endforeach
                @else
                    <p class="text-white text-center italic">Belum ada kurikulum tidak aktif.</p>
                @endif
            </div>
        </div>
    </section>

    {{-- MODAL SILABUS --}}
    <div id="modalSilabus" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50 p-3">
        <div class="w-full max-w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">
            <div class="flex justify-center items-center py-3 relative border-b">
                <h2 class="text-base sm:text-lg font-semibold text-[#1B4597]">Silabus</h2>
                <button onclick="closeModalSilabus()" class="absolute right-3 sm:right-4 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">✕</button>
            </div>
            <div class="p-3 sm:p-5 overflow-y-auto max-h-[75vh]">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[500px] border border-gray-400 border-collapse text-xs sm:text-sm" id="silabusTable">
                        <tr><td class="border p-2 w-40">Mata Kuliah</td><td class="border p-2 w-10 text-center">:</td><td class="border p-2" id="sil-matkul"></td></tr>
                        <tr><td class="border p-2">Kode</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-kode"></td></tr>
                        <tr><td class="border p-2">SKS</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-sks"></td></tr>
                        <tr><td class="border p-2">Deskripsi Mata Kuliah</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-deskripsi"></td></tr>
                        <tr><td class="border p-2">Capaian Pembelajaran Umum</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-cpm"></td></tr>
                        <tr><td class="border p-2">Capaian Pembelajaran Khusus</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-cpk"></td></tr>
                        <tr><td class="border p-2">Daftar Pustaka</td><td class="border p-2 text-center">:</td><td class="border p-2" id="sil-pustaka"></td></tr>
                        <tr>
                            <td class="border p-2">Rencana Pembelajaran Semester</td>
                            <td class="border p-2 text-center">:</td>
                            <td class="border p-2" id="sil-rps"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- DOSEN --}}
    <section id="dosen" class="max-w-4xl mx-auto py-10 flex flex-col items-center px-5">
        <h1 class="text-3xl md:text-5xl font-bold mb-12 text-primary-color">Dosen</h1>

        @forelse($prodi->dosens as $idx => $dosen)
            <div class="w-full bg-white rounded-3xl shadow-md p-6 mb-6">
                <div class="flex items-center justify-between cursor-pointer" onclick="toggle({{ $idx }})">
                    <div class="flex items-center gap-4">
                        @if($dosen->foto_dosen)
                            <img src="{{ Storage::url($dosen->foto_dosen) }}" class="w-16 h-16 rounded-full object-cover">
                        @else
                            <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center text-gray-400 text-xl font-bold">
                                {{ strtoupper(substr($dosen->nama_dosen, 0, 1)) }}
                            </div>
                        @endif
                        <div>
                            <h2 class="text-xl font-bold text-primary-color">{{ $dosen->nama_dosen }}</h2>
                            <p class="text-gray-500">{{ $dosen->status_jabatan }}</p>
                        </div>
                    </div>
                    <span id="icon-{{ $idx }}" class="transition-transform duration-300">
                        <img src="{{ asset('images/panah.png') }}" class="w-10">
                    </span>
                </div>

                <div id="content-{{ $idx }}" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                    <div class="mt-4">
                        <hr class="mb-4">
                        <div class="grid md:grid-cols-2 gap-4 text-gray-700">
                            <div>
                                <p><b>NIK :</b> {{ $dosen->NIK }}</p>
                                <p><b>Program Studi :</b> {{ $prodi->nama_prodi }}</p>
                                <p><b>Pendidikan Terakhir :</b> {{ $dosen->jenjang_pendidikan }}</p>
                                <p><b>Email :</b> {{ $dosen->email }}</p>
                            </div>
                            <div>
                                <p class="font-bold text-primary-color mb-2">Riwayat Pendidikan</p>
                                @foreach($dosen->riwayatPendidikans as $riwayat)
                                    <p>{{ $riwayat->deskripsi_riwayat }}</p>
                                @endforeach
                                @if($dosen->bidangSpesialis->count() > 0)
                                    <p class="mt-2"><b>Bidang Spesialis :</b>
                                        {{ $dosen->bidangSpesialis->pluck('deskripsi_bidang')->join(', ') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-400 italic">Belum ada data dosen.</p>
        @endforelse
    </section>

    {{-- FOOTER dengan SVG dinamis --}}
    <footer id="kontak" class="relative text-white">
        <div class="absolute inset-0 z-0">
            <svg class="w-full h-full" viewBox="0 0 1440 349" preserveAspectRatio="xMidYMid slice" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="1440" height="349" fill="url(#footerGrad)"/>
                <defs>
                    <linearGradient id="footerGrad" x1="229.544" y1="0" x2="366.932" y2="466.126" gradientUnits="userSpaceOnUse">
                        <stop stop-color="{{ $tertiary }}"/>
                        <stop offset="0.206731" stop-color="{{ $secondary }}"/>
                        <stop offset="1" stop-color="{{ $primary }}"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img src="{{ asset('images/logo-prism.png') }}">
                <div class="w-full border-b border-white/50 mb-4"></div>
                <p class="text-sm text-white/80 mb-4">Platform for Resource & Study Management</p>
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/logo-ig.png') }}" class="w-6">
                    <p class="text-sm">@pbl.trpl215</p>
                </div>
            </div>
            <div>
                <h2 class="font-semibold text-lg mb-3">Program Studi</h2>
                <ul class="space-y-2 text-sm text-white/80">
    @foreach($semuaProdi as $p)
        <li>
            <a href="{{ route('prodi.show', $p->kode_prodi) }}"
               class="hover:text-white transition duration-200 {{ $p->kode_prodi === $prodi->kode_prodi ? 'text-white' : 'text-white opacity-80' }}">
                {{ $p->nama_prodi }}
            </a>
        </li>
    @endforeach
</ul>
            </div>
            <div>
                <h2 class="font-semibold text-lg mb-3">Menu</h2>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#home" class="text-white/80 hover:text-white transition duration-200">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="#tentang" class="text-white/80 hover:text-white transition duration-200">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="#visimisi" class="text-white/80 hover:text-white transition duration-200">
                            Visi Misi
                        </a>
                    </li>

                    <li>
                        <a href="#kurikulum" class="text-white/80 hover:text-white transition duration-200">
                            Kurikulum
                        </a>
                    </li>

                    <li>
                        <a href="#dosen" class="text-white/80 hover:text-white transition duration-200">
                            Dosen
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/logo-polibatam.png') }}" alt="" class="w-40">
                <p class="text-sm text-white/80 mb-3">Alamat : Jl. Ahmad Yani Batam Kota. Kota Batam. Kepulauan Riau. Indonesia</p>
                <p class="text-sm text-white/80">
                    Phone : +62-778-469858 Ext.1017<br>
                    Fax : +62-778-463620<br>
                    Email : info@polibatam.ac.id
                </p>
            </div>
        </div>

        <div class="relative z-10 copyright-bg text-center text-sm py-2 bg-gradient-to-r from-[#470398] via-[#1F41A9] to-[#00A5FE]">
            ©2026 Platform for Resource & Study Management
        </div>
    </footer>

    <script src="{{ asset('js/tampilan-program-studi.js') }}"></script>
    <script>
        // Data silabus untuk modal
        function openModalSilabus(data) {
            document.getElementById('sil-matkul').textContent   = data.nama_matkul   ?? '-';
            document.getElementById('sil-kode').textContent     = data.kode_matkul   ?? '-';
            document.getElementById('sil-sks').textContent      = data.sks           ?? '-';
            document.getElementById('sil-deskripsi').textContent = data.deskripsi    ?? '-';
            document.getElementById('sil-cpm').textContent      = data.cpm           ?? '-';
            document.getElementById('sil-cpk').textContent      = data.cpk           ?? '-';
            document.getElementById('sil-pustaka').textContent  = data.bahan_pustaka ?? '-';

            const rpsEl = document.getElementById('sil-rps');
            if (data.file_rps) {
                rpsEl.innerHTML = `<a href="/storage/${data.file_rps}" target="_blank" class="text-blue-600 underline text-sm">Lihat RPS</a>`;
            } else {
                rpsEl.textContent = '-';
            }

            const modal = document.getElementById('modalSilabus');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModalSilabus() {
            const modal = document.getElementById('modalSilabus');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        document.getElementById('modalSilabus').addEventListener('click', function(e) {
            if (e.target === this) closeModalSilabus();
        });
    </script>
</body>
</html>