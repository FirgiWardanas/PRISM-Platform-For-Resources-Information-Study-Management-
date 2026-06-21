<x-layout.layout>

  <body class="font-[Montserrat]">
    <x-jurusan.header></x-jurusan.header>

    <section id="tentang"
      class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 lg:px-24 py-10 sm:py-16 md:py-20">

      <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-3 text-[#1B4597] text-center">
        Teknik Informatika
      </h1>

      <p class="text-center mb-10 sm:mb-12 text-xs sm:text-sm md:text-base max-w-4xl">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi voluptas
        nulla temporibus soluta obcaecati repudiandae quam accusamus dicta totam.
      </p>

      <div class="bg-gradient-to-r from-[#490097] via-[#203DA6] to-[#00A6FF] w-full rounded-3xl text-white py-4 sm:py-6 md:py-8 px-3 sm:px-8 md:px-12 flex justify-evenly items-start gap-3 sm:gap-8 md:gap-12">
        <div class="flex flex-col justify-center items-center flex-1 gap-1 sm:gap-2">
          <h1 class="text-[10px] sm:text-sm font-bold">Tahun berdiri</h1>
          <h1 class="text-base sm:text-xl md:text-2xl font-bold">2000</h1>
          <p class="text-[9px] sm:text-xs text-center leading-tight">
            [isi ini]
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
            Lorem ipsum dolor sit amet consectetur
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

    <section id="programStudi" class="py-20 relative overflow-hidden flex flex-col justify-center items-center mb-60">

      <!-- DEKORASI BULAT -->
      <div class="absolute top-40 -left-20 w-80 ">
        <img src="{{ asset('images/ring.png') }}" alt="">
      </div>
      <div class="absolute bottom-50 -right-20 w-80 ">
        <img src="{{ asset('images/ring.png') }}" alt="">
      </div>

      <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#1B4597] mb-20">Program Studi</h1>

      <!-- GRID -->
      <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 px-6 w-full">

        @foreach($prodis as $prodi)
          @php
            $primary = $prodi->kustomisasi->primary_color ?? '#00766D';
            $secondary = $prodi->kustomisasi->secondary_color ?? '#01C7B8';
            $tertiary = $prodi->kustomisasi->tertiary_color ?? '#1BE1D1';

            $logoUrl = $prodi->detailProdi?->logo ? Storage::url($prodi->detailProdi->logo) : null;
          @endphp

          <div class="w-[250px] sm:w-full mx-auto relative bg-white rounded-2xl shadow-md p-4 md:p-6 text-center overflow-hidden hover:scale-105 transition flex flex-col items-center justify-between min-h-[340px]">
            <!-- Wave background (secondary color with low opacity) -->
            <div class="absolute bottom-0 left-0 w-full h-[50%] pointer-events-none z-0">
              <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,50 C20,35 40,35 60,55 C80,75 90,65 100,50 L100,100 L0,100 Z" fill="{{ $secondary }}" fill-opacity="0.15" />
              </svg>
            </div>

            <!-- Title & Jenjang -->
            <div class="z-10 w-full flex flex-col items-center">
              <h1 class="font-bold text-xl line-clamp-2" style="color: {{ $primary }}">{{ $prodi->nama_prodi }}</h1>
              <p class="font-semibold text-sm mb-3" style="color: {{ $primary }}">{{ $prodi->jenjang }}</p>
            </div>

            <!-- Logo  -->
            <div class="z-10 flex items-center justify-center h-28 my-auto">
              @if($logoUrl)
                <img src="{{ $logoUrl }}" class="w-20 md:w-28 h-20 md:h-28 object-contain">
              @endif
            </div>

            <!-- Action Button  -->
            <div class="z-10 mt-4">
              <a href="{{ route('prodi.show', $prodi->kode_prodi) }}">
                <button class="shadow-2xl px-8 py-3 rounded-full text-xs font-bold text-white transition duration-200 hover:scale-105 hover:cursor-pointer hover:opacity-90"
                        style="background: linear-gradient(135deg, {{ $secondary }}, {{ $tertiary }})">
                  Selengkapnya
                </button>
              </a>
            </div>
          </div>
        @endforeach

      </div>
    </section>

    <x-layout.footer></x-layout.footer>
  </body>
  <script src="{{ asset('js/jurusan-informatika.js') }}"></script>
</x-layout.layout>
