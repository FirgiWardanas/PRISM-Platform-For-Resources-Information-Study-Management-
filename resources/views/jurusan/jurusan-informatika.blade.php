<x-layout.layout>
  <body class="font-[Montserrat]">
    <x-jurusan.header></x-jurusan.header>
    
      <section id="tentang" class="flex flex-col justify-center items-center px-45 py-25">
    <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#1B4597]">Teknik Informatika</h1>
    <p class="text-center mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi voluptas
      nulla temporibus soluta obcaecati repudiandae quam accusamus dicta totam, unde tenetur molestias possimus
      voluptatibus ipsum quo nemo. Sunt harum eius accusamus earum quos illo, voluptas facilis corrupti et? Modi rerum
      quam, iure doloribus numquam enim quis! Quidem, quibusdam.</p>

    <div class="bg-gradient-to-r from-[#490097] via-[#203DA6] to-[#00A6FF] w-full rounded-4xl text-white py-8 px-12 flex justify-evenly items-start gap-18">
      <div class="flex flex-col justify-center items-center flex-1 gap-4">
        <h1 class="text-sm font-bold">Tahun berdiri</h1>
        <h1 class="text-2xl font-bold">0000</h1>
        <p class="text-xs text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi
          voluptas nulla temporibus soluta </p>
      </div>
      <div class="flex flex-col justify-evenly items-center w-45 flex-1 gap-4">
        <h1 class="text-sm font-bold">Program Studi</h1>
        <h1 class="text-2xl font-bold">7</h1>
        <button
          class="bg-gradient-to-r from-[#ff7700] to-[#ffa600] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#b95600] hover:to-[#af7200] hover:scale-102 hover:cursor-pointer">Selengkapnya</button>
      </div>
      <div class="flex flex-col justify-center items-center w-45 flex-1 gap-4">
        <h1 class="text-sm font-bold">jumlah Mahasiswa</h1>
        <h1 class="text-2xl font-bold">0000</h1>
        <p class="text-xs text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi
          voluptas nulla temporibus soluta </p>
      </div>
    </div>
    <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#1B4597] mt-25">Profil Lulusan</h1>


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
            Mampu melakukan konversi data geospasial, editing data geospasial, dan pengujian kualitas data geospasial
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
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 px-6">

      <!-- CARD -->
      <!-- TEMPLATE CARD -->
      <!-- Ganti warna sesuai kebutuhan -->

      <!-- 1 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-if.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#00766D] font-bold text-xl">Teknik Informatika</h1>
        <p class=" font-semibold text-[#00766D] mb-3">Diploma 3</p>

        <img src="{{ asset('images/logo-if.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#01C7B8] to-[#1BE1D1] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#00aa9c] hover:to-[#17cbbc] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

      <!-- 2 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-gm.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#589230] font-bold text-xl">Teknologi Geomatika</h1>
        <p class=" font-semibold text-[#589230] mb-3">Diploma 3</p>

        <img src="{{ asset('images/logo-gm.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#54CD00] to-[#AEE353] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#4ab000] hover:to-[#94c243] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

      <!-- 3 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-an.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#B60019] font-bold text-xl">Animasi</h1>
        <p class=" font-semibold text-[#B60019] mb-3">Sarjana Terapan</p>

        <img src="{{ asset('images/logo-an.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#E80527] to-[#FD3168] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#b7041f] hover:to-[#dd2757] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

      <!-- 4 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-trm.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#C03F0B] font-bold text-xl">Teknologi Rekayasa Multimedia</h1>
        <p class=" font-semibold text-[#C03F0B] mb-3">Sarjana Terapan</p>

        <img src="{{ asset('images/logo-trm.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#FF4D01] to-[#FEBA00] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#d13f00] hover:to-[#cf9801] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

      <!-- 5 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-rks.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#6A6A6A] font-bold text-xl">Rekayasa Keamanan Siber</h1>
        <p class=" font-semibold text-[#6A6A6A] mb-3">Sarjana Terapan</p>

        <img src="{{ asset('images/logo-rks.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#313131] to-[#DBDBDB] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#191919] hover:to-[#aaaaaa] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

      <!-- 6 -->
      <div
        class="relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-trpl.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#0F3F7F] font-bold text-xl">Teknologi Rekayasa Perangkat Lunak</h1>
        <p class=" font-semibold text-[#0F3F7F] mb-3">Sarjana Terapan</p>

        <img src="{{ asset('images/logo-trpl.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#00439C] to-[#0159D0] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#003171] hover:to-[#00459e] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>
      <!-- 7 (CENTER) -->

      <div
        class="md:col-start-2 relative bg-white rounded-2xl shadow-md p-6 text-center overflow-hidden hover:scale-105 transition bg-[url('/card-tp.png')] bg-cover bg-center bg-no-repeat flex flex-col items-center">
        <h1 class="text-[#462471] font-bold text-xl">Teknologi Permainan</h1>
        <p class=" font-semibold text-[#462471] mb-3">Sarjana Terapan</p>

        <img src="{{ asset('images/logo-tp.png') }}" class="w-28">

        <button
          class="bg-gradient-to-r from-[#5D02D2] to-[#7F1CFF] shadow-2xl px-8 py-3 rounded-full  text-xs font-bold transition duration-200 hover:from-[#4702a1] hover:to-[#6717cf] hover:scale-102 hover:cursor-pointer text-white">Selengkapnya</button>

      </div>

    </div>
  </section>


    <x-layout.footer></x-layout.footer>
    </body>
  <script src="{{ asset('js/jurusan-informatika.js') }}"></script>
</x-layout.layout>