<x-layout.layout>

  <body class="font-[Montserrat]">
    <x-jurusan.header></x-jurusan.header>

    <section id="tentang"
      class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 py-10 sm:py-16 md:py-20">

      <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-3 text-[#1B4597] text-center">
        Teknik Informatika
      </h1>

      <p class="text-center mb-10 sm:mb-12 text-xs sm:text-sm md:text-base max-w-4xl">
        Jurusan Teknik Informatika berkomitmen menghasilkan lulusan yang unggul, inovatif, dan berintegritas di bidang teknologi informasi melalui pendidikan berkualitas, penelitian, serta pengabdian kepada masyarakat yang selaras dengan perkembangan industri digital.
      </p>

      <div class="bg-gradient-to-r from-[#490097] via-[#203DA6] to-[#00A6FF] w-full rounded-3xl text-white py-4 sm:py-6 md:py-8 px-3 sm:px-8 md:px-12 flex justify-evenly items-start gap-3 sm:gap-8 md:gap-12">
        <div class="flex flex-col justify-center items-center flex-1 gap-1 sm:gap-2 ">
          <h1 class="text-[10px] sm:text-sm font-bold">Tahun berdiri</h1>
          <h1 class="text-base sm:text-xl md:text-2xl font-bold">2000</h1>
          <p class="text-[9px] sm:text-xs text-center leading-tight ">
            Berdiri sejak tahun 2000 dan terus menghasilkan lulusan yang kompeten di bidang teknologi informasi.
          </p>
        </div>

        <div class="flex flex-col justify-center items-center flex-1 gap-1 sm:gap-2">
          <h1 class="text-[10px] sm:text-sm font-bold">Program Studi</h1>
          <h1 class="text-base sm:text-xl md:text-2xl font-bold">{{ $jumlah_prodi }}</h1>

          <a href="#programStudi">
            <button class="bg-gradient-to-r from-[#ff7700] to-[#ffa600]
        shadow-lg px-3 sm:px-6 md:px-8 py-1 sm:py-3 rounded-full
        text-[9px] sm:text-xs font-bold transition hover:scale-105">
              Selengkapnya
            </button>
          </a>
        </div>

        <div class="flex flex-col justify-center items-center flex-1 gap-1 sm:gap-2">
          <h1 class="text-[10px] sm:text-sm font-bold">Jumlah Dosen</h1>
          <h1 class="text-base sm:text-xl md:text-2xl font-bold">{{ $jumlah_dosen }}</h1>
          <p class="text-[9px] sm:text-xs text-center leading-tight">
            Didukung oleh dosen profesional yang berpengalaman di bidang akademik maupun industri.
          </p>
        </div>

      </div>
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-8 sm:mb-10 text-[#1B4597] mt-16 sm:mt-20 text-center">Profil Lulusan</h1>


      <!-- GRID -->
      <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- CARD -->
        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">

          <!-- ICON -->
          <div class="w-20">
            <img src="{{ asset('images/icon-programming.png') }}" alt="">
          </div>

          <!-- TEXT -->
          <div>
            <h3 class="font-semibold text-blue-900">Programer</h3>
            <p class="text-xs text-gray-500">
              Memiliki pemahaman baik dalam algoritma dan pengembangan aplikasi
            </p>
          </div>

        </div>


        <!-- DUPLICATE CARD -->
        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-30">
            <img src="{{ asset('images/icon-mobile.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Mobile Apps Developer</h3>
            <p class="text-xs text-gray-500">
              Mengembangkan aplikasi berbasis mobile baik responsive mobile, atau aplikasi berbasis Android
            </p>
          </div>
        </div>


        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-30">
            <img src="{{ asset('images/icon-jaringan.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Administrator Jaringan</h3>
            <p class="text-xs text-gray-500">
              Mampu mengelola administrasi jaringan dan melakukan konfigurasi pada jaringan linux dan windows
            </p>
          </div>
        </div>

        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-20">
            <img src="{{ asset('images/icon-broadcasting.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Manager Broadcasting</h3>
            <p class="text-xs text-gray-500">
              Memiliki kemampuan dalam tahap produksi suatu film atau video yang dilakukan di studio.
            </p>
          </div>
        </div>



        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-18 rounded-xl overflow-hidden">
            <img src="{{ asset('images/icon-animator.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Animator</h3>
            <p class="text-xs text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
          </div>
        </div>

        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-30 rounded-xl overflow-hidden">
            <img src="{{ asset('images/icon-desaingrafis.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Desain Grafis</h3>
            <p class="text-xs text-gray-500">
              Mampu melakukan pengolahan gambar dengan memanfaatkan software editor seperti adobe dan corel
            </p>
          </div>
        </div>

        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-20 rounded-xl overflow-hidden">
            <img src="{{ asset('images/icon-surveyor.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Surveyor Hidrografi</h3>
            <p class="text-xs text-gray-500">
              Mampu mengamati, mengolah, dan menganalisis pasang surut laut, dan arus laut
            </p>
          </div>
        </div>

        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-30 rounded-xl overflow-hidden">
            <img src="{{ asset('images/icon-teknisiGIS.png') }}" alt="">
          </div>

          <div>
            <h3 class="font-semibold text-blue-900">Teknisi GIS</h3>
            <p class="text-xs text-gray-500">
              Mampu melakukan konversi data geospasial, editing data geospasial, and pengujian kualitas data geospasial
            </p>
          </div>
        </div>

        <div class="flex items-center gap-4 bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
          <div class="w-30 rounded-xl overflow-hidden">
            <img src="{{ asset('images/icon-cybersecurity.png') }}" alt="">
          </div>
          <div>
            <h3 class="font-semibold text-blue-900">Cyber Security Analyst</h3>
            <p class="text-xs text-gray-500">
              Memiliki kemampuan dan keterampilan dalam menindaklanjuti ancaman keamanan dalam suatu organisasi
            </p>
          </div>
        </div>

      </div>

    </section>

    <section id="programStudi" class="py-20 relative overflow-hidden flex flex-col justify-center items-center">

      <!-- DEKORASI BULAT -->
      <div class="absolute bottom-0 -right-12 w-40 sm:w-50 md:w-60 lg:w-80 z-0">
        <img src="{{ asset('images/ring.png') }}" alt="">
      </div>
      <div class="absolute top-25 -left-12 w-40 sm:w-50 md:w-60 lg:w-80 z-0">
        <img src="{{ asset('images/ring.png') }}" alt="">
      </div>

      <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#1B4597] mb-20">Program Studi</h1>

      <!-- GRID -->
      <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 px-6 w-full">

        @forelse($prodis as $prodi)
        @php
        $primary = $prodi->kustomisasi->primary_color ?? '#00766D';
        $secondary = $prodi->kustomisasi->secondary_color ?? '#01C7B8';
        $tertiary = $prodi->kustomisasi->tertiary_color ?? '#1BE1D1';

        $logoUrl = null;
        if ($prodi->detailProdi?->logo) {
        $logoUrl = Storage::url($prodi->detailProdi->logo);
        } else {
        $nameLower = strtolower($prodi->nama_prodi);
        if (str_contains($nameLower, 'informatika')) {
        $logoUrl = asset('images/logo-if.png');
        } elseif (str_contains($nameLower, 'geomatika')) {
        $logoUrl = asset('images/logo-gm.png');
        } elseif (str_contains($nameLower, 'animasi')) {
        $logoUrl = asset('images/logo-an.png');
        } elseif (str_contains($nameLower, 'multimedia')) {
        $logoUrl = asset('images/logo-trm.png');
        } elseif (str_contains($nameLower, 'siber') || str_contains($nameLower, 'keamanan')) {
        $logoUrl = asset('images/logo-rks.png');
        } elseif (str_contains($nameLower, 'perangkat lunak') || str_contains($nameLower, 'software')) {
        $logoUrl = asset('images/logo-trpl.png');
        } elseif (str_contains($nameLower, 'permainan') || str_contains($nameLower, 'game')) {
        $logoUrl = asset('images/logo-tp.png');
        }
        }

        // Initials fallback
        $initials = '';
        if (!$logoUrl) {
        $words = explode(' ', $prodi->nama_prodi);
        foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
        }
        $initials = substr($initials, 0, 3);
        }
        @endphp

        <div class="w-[250px] sm:w-full mx-auto relative bg-white rounded-2xl shadow-md p-4 md:p-6 text-center overflow-hidden hover:scale-105 transition flex flex-col items-center justify-between ">
          <!-- SVG Background -->
          <div class="absolute inset-0 pointer-events-none z-0">
            <svg class="w-full h-full" viewBox="0 0 541 418">
              <defs>
                <mask id="circleMask">
                  <circle cx="184" cy="441" r="250" fill="white" />
                  <circle cx="464" cy="388" r="150" fill="white" />
                </mask>
              </defs>
              <rect x="-70" y="191" width="688" height="508" fill="{{ $secondary }}" fill-opacity="0.18" mask="url(#circleMask)" />
            </svg>
          </div>

          <!-- Title & Jenjang -->
          <div class="z-10 w-full flex flex-col items-center">
            <h1 class="font-bold text-lg md:text-xl line-clamp-2" style="color: {{ $primary }}">{{ $prodi->nama_prodi }}</h1>
            <p class="font-semibold text-sm mb-3" style="color: {{ $primary }}">{{ $prodi->jenjang }}</p>
          </div>

          <!-- Logo  -->
          <div class="z-10 flex items-center justify-center h-28 my-auto">
            @if($logoUrl)
            <img src="{{ $logoUrl }}" class="w-24 md:w-28 h-24 md:h-28 object-contain">
            @else
            <div class="w-20 h-20 rounded-2xl flex items-center justify-center text-white font-extrabold text-2xl md:text-3xl shadow-inner" style="background-color: {{ $primary }}">
              {{ $initials }}
            </div>
            @endif
          </div>

          <!-- Action Button  -->
          <div class="z-10 mt-2">
            <a href="{{ route('prodi.show', $prodi->kode_prodi) }}">
              <button class="shadow-2xl px-8 py-3 rounded-full text-xs font-bold text-white transition duration-200 hover:scale-105 hover:cursor-pointer hover:opacity-90"
                style="background: linear-gradient(135deg, {{ $secondary }}, {{ $tertiary }})">
                Selengkapnya
              </button>
            </a>
          </div>
        </div>
        @empty

        <div class="col-span-full bg-gray-50 border border-gray-200 rounded-2xl p-12 text-center z-50">
          <div class="text-6xl mb-4">📚</div>

          <h3 class="text-2xl font-bold text-[#1B4597]">
            Belum Ada Program Studi
          </h3>

          <p class="mt-3 text-gray-500">
            Program studi pada Jurusan Teknik Informatika belum tersedia.
          </p>
        </div>

        @endforelse

      </div>
    </section>
    <section id="kontak" class="py-20 relative overflow-hidden flex flex-col justify-center items-center mb-60">
      <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#1B4597] mb-20">Kontak</h1>

      <div class="max-w-6xl mx-auto px-6">

        <!-- Contact Card -->
        <div class="grid grid-cols-3 gap-3 sm:gap-4 lg:gap-6 mb-10">

          <!-- Phone -->
          <div
            class="rounded-2xl lg:rounded-3xl bg-gradient-to-br from-[#490097] via-[#203DA6] to-[#00A6FF] p-3 sm:p-5 lg:p-8 text-center shadow-xl relative overflow-hidden">

            <div class="relative z-10">
              <div
                class="w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3 lg:mb-5">

                <svg xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 text-[#ffa600]"
                  fill="currentColor"
                  viewBox="0 0 24 24">
                  <path
                    d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.56 3.58.56a1 1 0 011 1V20a1 1 0 01-1 1C10.3 21 3 13.7 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.19 2.46.56 3.58a1 1 0 01-.25 1.02l-2.19 2.19z" />
                </svg>
              </div>

              <h3 class="text-sm sm:text-lg lg:text-xl font-semibold text-white">
                Nomor Telepon
              </h3>

              <p class="text-[10px] sm:text-xs lg:text-sm text-white/60 font-semibold mt-2 break-words">
                +62 895-6036-62530
              </p>
            </div>
          </div>

          <!-- Email -->
          <div
            class="rounded-2xl lg:rounded-3xl bg-gradient-to-br from-[#490097] via-[#203DA6] to-[#00A6FF] p-3 sm:p-5 lg:p-8 text-center shadow-xl relative overflow-hidden">

            <div class="relative z-10">
              <div
                class="w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3 lg:mb-5">

                <svg xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 text-[#ffa600]"
                  fill="currentColor"
                  viewBox="0 0 24 24">
                  <path
                    d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 2l-8 5L4 6h16z" />
                </svg>
              </div>

              <h3 class="text-sm sm:text-lg lg:text-xl font-semibold text-white">
                Email
              </h3>

              <p class="text-[10px] sm:text-xs lg:text-sm text-white/60 font-semibold mt-2 break-all">
                firgiwardanas257@gmail.com
              </p>
            </div>
          </div>

          <!-- Lokasi -->
          <div
            class="rounded-2xl lg:rounded-3xl bg-gradient-to-br from-[#490097] via-[#203DA6] to-[#00A6FF] p-3 sm:p-5 lg:p-8 text-center shadow-xl relative overflow-hidden">

            <div class="relative z-10">
              <div
                class="w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3 lg:mb-5">

                <svg xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 sm:w-6 sm:h-6 lg:w-8 lg:h-8 text-[#ffa600]"
                  fill="currentColor"
                  viewBox="0 0 24 24">
                  <path
                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z" />
                </svg>
              </div>

              <h3 class="text-sm sm:text-lg lg:text-xl font-semibold text-white">
                Lokasi
              </h3>

              <p class="text-[10px] sm:text-xs lg:text-sm text-white/60 font-semibold mt-2 break-words">
                Jl. Ahmad Yani, Batam Kota, Kepulauan Riau
              </p>
            </div>
          </div>

        </div>


      </div>
    </section>


    <x-layout.footer></x-layout.footer>
  </body>

</x-layout.layout>