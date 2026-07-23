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

      <div
        class="bg-gradient-to-r from-[#490097] via-[#203DA6] to-[#00A6FF] w-full rounded-3xl text-white flex flex-col sm:flex-row justify-center sm:justify-evenly items-center sm:items-start py-4 sm:py-6 md:py-8 px-4 sm:px-8 md:px-12 gap-4 sm:gap-8 md:gap-12 mx-20 sm:mx-0">

        <!-- Tahun Berdiri -->
        <div class="flex flex-col justify-center items-center w-full sm:flex-1 max-w-[180px] sm:max-w-none gap-1 sm:gap-2">
          <h1 class="text-[11px] sm:text-sm font-bold text-center">
            Tahun Berdiri
          </h1>

          <h1 class="text-lg sm:text-xl md:text-2xl font-bold">
            2000
          </h1>

          <p class="text-[10px] sm:text-xs text-center leading-tight">
            Berdiri sejak tahun 2000 dan terus menghasilkan lulusan yang kompeten di bidang teknologi informasi.
          </p>
        </div>

        <!-- Program Studi -->
        <div class="flex flex-col justify-center items-center w-full sm:flex-1 max-w-[180px] sm:max-w-none gap-1 sm:gap-2">
          <h1 class="text-[11px] sm:text-sm font-bold text-center">
            Program Studi
          </h1>

          <h1 class="text-lg sm:text-xl md:text-2xl font-bold">
            {{ $jumlah_prodi }}
          </h1>

          <a href="#programStudi">
            <button
              class="bg-gradient-to-r from-[#ff7700] to-[#ffa600]
                shadow-lg
                px-4 py-2
                sm:px-6 md:px-8
                sm:py-3
                rounded-full
                text-[10px] sm:text-xs
                font-bold
                transition hover:scale-105">
              Selengkapnya
            </button>
          </a>
        </div>

        <!-- Jumlah Dosen -->
        <div class="flex flex-col justify-center items-center w-full sm:flex-1 max-w-[180px] sm:max-w-none gap-1 sm:gap-2">
          <h1 class="text-[11px] sm:text-sm font-bold text-center">
            Jumlah Dosen
          </h1>

          <h1 class="text-lg sm:text-xl md:text-2xl font-bold">
            {{ $jumlah_dosen }}
          </h1>

          <p class="text-[10px] sm:text-xs text-center leading-tight">
            Didukung oleh dosen profesional yang berpengalaman di bidang akademik maupun industri.
          </p>
        </div>

      </div>
      <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-8 sm:mb-10 text-[#1B4597] mt-16 sm:mt-20 text-center">Profil Lulusan</h1>




      <div
        id="prodi-container"
        class="w-full max-w-screen-xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8 space-y-2 transition-all duration-300">

        @forelse($prodis as $index => $prodi)

        <div class="prodi-row {{ $index >= 3 ? 'hidden' : '' }}">

          <h2 class="text-xs sm:text-sm font-semibold text-purple-400">
            {{ $prodi->nama_prodi }} →
          </h2>

          <div class="flex gap-3 sm:gap-6 overflow-x-auto no-scrollbar snap-x scroll-smooth py-4 ">

            @forelse(optional($prodi->detailProdi)->profilLulusans ?? [] as $profil)

            <div class="flex-none w-[75vw] xs:w-[60vw] sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] snap-start">

              <div class="flex items-center gap-3 sm:gap-4 bg-white rounded-2xl shadow-md p-3 sm:p-4 hover:shadow-lg transition h-full">

                <div class="w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-full bg-purple-200/40 flex-shrink-0">

                  @if($profil->icon_lulusan)
                  <img
                    src="{{ Storage::url($profil->icon_lulusan) }}"
                    alt="{{ $profil->judul_lulusan }}"
                    class="w-9 h-9 sm:w-12 sm:h-12 object-contain">
                  @else
                  <img
                    src="{{ asset('images/icon-programming.png') }}"
                    alt="Default Icon"
                    class="w-9 h-9 sm:w-12 sm:h-12 object-contain">
                  @endif

                </div>

                <div class="min-w-0">

                  <h3 class="font-semibold text-blue-900 text-sm sm:text-base leading-tight">
                    {{ $profil->judul_lulusan }}
                  </h3>

                  <p class="text-xs text-gray-500 mt-0.5 line-clamp-3">
                    {{ $profil->deskripsi_lulusan }}
                  </p>

                </div>

              </div>

            </div>

            @empty

            <div class="w-full bg-gray-50 rounded-xl p-6 text-center text-gray-400 text-sm">
              Belum ada profil lulusan.
            </div>

            @endforelse

          </div>

        </div>

        @empty

        <div class="bg-gray-50 rounded-2xl p-10 text-center">
          <h3 class="text-xl font-semibold text-gray-600">
            Belum ada Program Studi
          </h3>
        </div>

        @endforelse

      </div>

      @if($prodis->count() > 3)
      <div class="text-center mt-5">
        <button
          id="btn-selengkapnya"
          class="mx-auto flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold text-white rounded-full shadow-md transition hover:scale-105">
          Selengkapnya
        </button>
      </div>
      @endif

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


        {{-- Google Maps --}}
        <div class="rounded-2xl lg:rounded-3xl overflow-hidden shadow-xl w-full h-64 sm:h-80 lg:h-96 mt-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.015!2d104.0462732!3d1.1186405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1700000000000"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>


      </div>
    </section>


    <x-layout.footer></x-layout.footer>
  </body>
  <!-- SCRIPT UNTUK TOMBOL SHOW/HIDE -->
  <script>
    document.getElementById('btn-selengkapnya').addEventListener('click', function() {
      const hiddenRows = document.querySelectorAll('.prodi-row.hidden');

      if (hiddenRows.length > 0) {
        hiddenRows.forEach(row => {
          row.classList.remove('hidden');
        });
        this.textContent = 'Sembunyikan';
      } else {
        const allRows = document.querySelectorAll('.prodi-row');
        allRows.forEach((row, index) => {
          if (index >= 3) {
            row.classList.add('hidden');
          }
        });
        this.textContent = 'Selengkapnya';
      }
    });
  </script>
</x-layout.layout>