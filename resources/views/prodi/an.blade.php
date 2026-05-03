<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>halaman animasi</title>
  <link rel="stylesheet" href="/src/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
@vite('..\resources\css\app.css')
</head>

<body class=" font-[Montserrat] ">
  <div class="min-h-screen w-full  bg-cover bg-bottom bg-no-repeat text-white" style="background-image: url('{{ asset('images/bg-animasi.png') }}')">
    <header class="w-full fixed z-100 bg-[#980003]">
      <nav class="flex justify-between items-center border-b-1 px-8 py-3">
        <div class="flex items-center">
          <img src="{{ asset('images/logo-prism.png') }}" class="h-11">
        </div>
        <div class="flex items-center gap-20">
          <ul class="hidden lg:flex gap-20 font-bold text-xs">
            <li>
              <a href="#home" class="hover:text-[#01D1FC] transition duration-300 cursor-pointer">Beranda</a>
            </li>
            <li>
              <a href="#tentang" class="hover:text-[#01D1FC] transition duration-300 cursor-pointer">Tentang Kami</a>
            </li>
            <li>
              <a href="#visimisi" class="hover:text-[#01D1FC] transition duration-300 cursor-pointer">Visi Misi</a>
            </li>
            <li>
              <a href="#kurikulum" class="hover:text-[#01D1FC] transition duration-300 cursor-pointer">Kurikulum</a>
            </li>
            <li>
              <a href="#dosen" class="hover:text-[#01D1FC] transition duration-300 cursor-pointer">Dosen</a>
            </li>
          </ul>

          <div class="hidden lg:flex">
            <button
              class="bg-gradient-to-r from-[#01D1FC] to-[#0162DD] shadow-2xl px-8 py-2 rounded-lg text-primary text-xs font-bold hover:from-[#00a7c9] hover:to-[#0358C4]hover:cursor-pointer hover:scale-105 transition">
              LOGIN
            </button>
          </div>
        </div>

        <button id="menu-btn" class="lg:hidden block">
          <img src="{{ asset('images/menu.png') }}" alt="Menu"
            class="w-5 hover:cursor-pointer hover:opacity-50 hover:scale-105 transition">
        </button>
      </nav>

      <div id="mobile-menu"
        class="hidden lg:hidden bg-black/40 backdrop-blur-sm  mx-6 mt-4 p-4 rounded-xl  transition duration-300">

        <ul class="flex flex-col gap-3 text-sm font-semibold">

          <ul class="flex flex-col gap-3 text-sm font-semibold">

            <li>
              <a href="#home" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                Beranda
              </a>
            </li>

            <li>
              <a href="#tentang" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                Tentang Kami
              </a>
            </li>

            <li>
              <a href="#visimisi" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                Visi Misi
              </a>
            </li>

            <li>
              <a href="#kurikulum" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                Kontak
              </a>
            </li>

            <li>
              <a href="#dosen" class="block w-full p-3 rounded-lg hover:bg-white/10 transition">
                Dosen
              </a>
            </li>

          </ul>

        </ul>
        <div class="flex flex-col gap-4 mt-4 px-2">
          <button
            class="bg-gradient-to-r from-[#01D1FC] to-[#0162DD]  shadow-2xl px-8 py-3 rounded-lg text-white text-xs font-bold transition duration-200 hover:from-[#00a7c9] hover:to-[#0358C4] hover:scale-102 hover:cursor-pointer">
            LOGIN
          </button>
        </div>
      </div>
    </header>
    <section id="home"
      class="w-full min-h-screen flex items-center justify-center overflow-hidden px-4 md:px-10 lg:px-16">

      <div class="w-full max-w-6xl flex flex-col-reverse md:flex-row items-center justify-between gap-10">

        <!-- TEXT -->
        <div class="text-center md:text-left space-y-2">

          <img src="{{ asset('images/logo-an.png') }}" class="w-24 sm:w-28 md:w-32 mx-auto md:mx-0">

          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">
            Animasi
          </h1>

          <h3 class="text-sm sm:text-base md:text-lg lg:text-2xl text-white/60 font-semibold">
            Program Studi Diploma 4
          </h3>

          <button class="bg-gradient-to-r from-[#01D1FC] to-[#0162DD] 
        shadow-2xl px-6 md:px-8 py-2 md:py-3 rounded-full
        text-sm md:text-lg font-bold mt-5
        transition hover:scale-105 hover:cursor-pointer">
            Selengkapnya
          </button>

        </div>

        <!-- IMAGE -->
        <div class="flex justify-center">
          <img src="{{ asset('images/illustrasi-an.png') }}" class="w-52 sm:w-64 md:w-88 sm:w-64 md:w-80 lg:w-[420px]
        drop-shadow-xl hover:scale-105 transition duration-300">
        </div>

      </div>

    </section>
  </div>
  <section id="tentang" class="flex flex-col justify-center items-center px-8 sm:h-20 md:h-32 lg:px-45 py-48 mt-20
  ">
    <div class="flex flex-col justify-center items-center">
      <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-3 text-[#980102] text-center">Animasi</h1>
      <h1 class="text-2xl md:text-3xl font-semibold lg:text-4xl mb-3 text-[#FF2C7D]">Diploma 4</h1>
      <p class="text-center mb-12">D4 Animasi merupakan program studi yang mengkhususkan pada pembuatan animasi untuk tujuan tertentu. Lulusan memiliki keterampilan yang baik di bidang animasi serta kemampuan tambahan di bidang multimedia dan informatika.</p>

  </section>
  <section id="visimisi" class="py-20 relative overflow-hidden flex flex-col justify-center items-center mb-40">

    <!-- DEKORASI -->
    <div class="absolute top-20 -left-20 w-80 z-0">
      <img src="{{ asset('images/ring-an.png') }}" alt="">
    </div>

    <div class="absolute bottom-0 -right-20 w-80 z-0">
      <img src="{{ asset('images/ring-an.png') }}" alt="">
    </div>

    <!-- TITLE -->
    <h1 class="text-3xl md:text-5xl font-bold text-[#980102] mb-16 text-center">
      Visi Misi
    </h1>

    <!-- GRID -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-6 z-10">

      <!-- CARD 1 -->
      <div class="bg-white rounded-2xl shadow-md p-6 md:p-10 text-center
      hover:scale-105 transition flex flex-col items-center">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-[#FFB1BB]">
          01
        </h1>

        <p class="font-bold text-[#980102] mb-3 text-lg md:text-xl">
          Visi Prodi Animasi
        </p>

        <p class="text-sm md:text-base text-justify leading-relaxed">
          Menjadi program studi vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang animasi mendukung Indonesia Maju dan Sejahtera 2045.
        </p>

      </div>

      <!-- CARD 2 -->
      <div class="bg-white rounded-2xl shadow-md p-6 md:p-10 text-center
      hover:scale-105 transition flex flex-col items-center">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 text-[#FFB1BB]">
          02
        </h1>

        <p class="font-bold text-[#980102] mb-3 text-lg md:text-xl">
          Misi Prodi Animasi
        </p>

        <p class="text-sm md:text-base text-justify leading-relaxed">
          Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang animasi melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.
        </p>

      </div>

    </div>

  </section>

  <section class="flex flex-col justify-center items-center mb-48 px-4">
    <h1 class="text-3xl md:text-5xl font-bold mb-10 md:mb-16 text-[#980102] text-center">Profil Lulusan</h1>

    <div
      class="relative w-full max-w-[900px] h-[450px] md:h-[320px] flex items-center justify-center overflow-hidden md:overflow-visible">

      <div class="relative w-full h-full">

        <div
          class="slide absolute left-1/2 w-[90%] md:w-[700px] h-[380px] md:h-[300px] rounded-3xl bg-gradient-to-br from-[#E3016E] to-[#FB01BD] flex flex-col md:flex-row items-center justify-center md:justify-start px-6 md:px-10 shadow-2xl transition-all duration-500">
          <img src="{{ asset('images/illustrasi programming.png') }}"  class="w-32 md:w-56">
          <div class="text-white md:ml-6 text-center md:text-left mt-4 md:mt-0">
            <h1 class="text-2xl md:text-4xl font-bold">Concept Artist</h1>
            <p class="text-[10px] md:text-sm mt-2 leading-relaxed">seorang individu yang menghasilkan desain visual untuk item, karakter, atau setting area yang belum ada. Ini termasuk, namun tidak terbatas pada, produksi video game produksi film, produksi animasi dan terus berkembang luas di era digital ini. CONCEPT ARTIST dituntut sebuah komitmen tinggi dalam perannya di dalam bagian produksi besar.</p>
          </div>
        </div>

        <div
          class="slide absolute left-1/2 w-[90%] md:w-[700px] h-[380px] md:h-[300px] rounded-3xl bg-gradient-to-br from-[#E3016E] to-[#FB01BD] flex flex-col md:flex-row items-center justify-center md:justify-start px-6 md:px-10 shadow-2xl transition-all duration-500">
          <img src="{{ asset('images/illustrasi programming.png') }}"  class="w-32 md:w-56">
          <div class="text-white md:ml-6 text-center md:text-left mt-4 md:mt-0">
            <h1 class="text-2xl md:text-4xl font-bold">Animator</h1>
            <p class="text-[10px] md:text-sm mt-2">seorang seniman yang menciptakan berbagai ragam gambar yang akan membentuk ilusi seolah-olah bergerak pada saat ditayangkan dengan cepat yang disebut dengan frame. Animator dapat bekerja dalam berbagai bidang seperti film, televisi, video game, dan Internet. Biasanya, sebuah karya animasi membutuhkan beberapa animator. Cara kerja dalam menciptakan gambar tersebut, sangat bergantung dari gaya dan keahlian mereka.</p>
          </div>
        </div>

        <div
          class="slide absolute left-1/2 w-[90%] md:w-[700px] h-[380px] md:h-[300px] rounded-3xl bg-gradient-to-br from-[#E3016E] to-[#FB01BD] flex flex-col md:flex-row items-center justify-center md:justify-start px-6 md:px-10 shadow-2xl transition-all duration-500">
          <img src="{{ asset('images/illustrasi programming.png') }}"  class="w-32 md:w-56">
          <div class="text-white md:ml-6 text-center md:text-left mt-4 md:mt-0">
            <h1 class="text-2xl md:text-4xl font-bold">Soryboard Artist</h1>
            <p class="text-[10px] md:text-sm mt-2">Storyboard artist merupakan bagian pekerjaan dimana kita akan lebih banyak menggambar panel-panel storyboard berdasarkan script yang sudah ada, serta menentukan sudut pandang kamera dan komposisi yang sesuai dengan alur cerita animasi yang terdapat pada scriptnya.</p>
          </div>
        </div>

        <div
          class="slide absolute left-1/2 w-[90%] md:w-[700px] h-[380px] md:h-[300px] rounded-3xl bg-gradient-to-br from-[#E3016E] to-[#FB01BD] flex flex-col md:flex-row items-center justify-center md:justify-start px-6 md:px-10 shadow-2xl transition-all duration-500">
          <img src="{{ asset('images/illustrasi programming.png') }}"  class="w-32 md:w-56">
          <div class="text-white md:ml-6 text-center md:text-left mt-4 md:mt-0">
            <h1 class="text-2xl md:text-4xl font-bold">Layout Artist</h1>
            <p class="text-[10px] md:text-sm mt-2">Layout artist bertanggung jawab untuk meletakkan elemen-elemen yang akan digunakan pada suatu shot animasi dan kemudian menggerakkan elemen-elemen didalamnya secara draft sesuai dengan petunjuk visual dari storyboard dan timing audio dari departemen audio untuk animasi tersebut. Hasil pekerjaan dari para 3D layout artist nantinya yang akan di lanjutkan oleh para animator untuk diberikan gerakan-gerakan animasi yang lebih detail dan lanjut.</p>
          </div>
        </div>

      </div>

      <button onclick="prev()"
        class="absolute left-2 md:right-10 lg:left-20 z-20 bg-white/80 w-10 h-10 md:w-12 md:h-12 rounded-full shadow flex items-center justify-center hover:scale-110">❮</button>
      <button onclick="next()"
        class="absolute right-2 md:right-10 lg:right-20 z-20 bg-white/80 w-10 h-10 md:w-12 md:h-12 rounded-full shadow flex items-center justify-center hover:scale-110">❯</button>

    </div>
  </section>

  <section id="kurikulum" class="flex flex-col justify-center items-center mb-48 px-4">
    <h1 class="text-3xl md:text-5xl font-bold mb-6 text-[#980102] text-center">
      Kurikulum
    </h1>

    <!-- WRAPPER RESPONSIVE -->
    <div class="w-full max-w-5xl mx-auto mt-4 p-4 md:p-6 flex flex-wrap">

      <!-- TAB AKTIF -->
      <input type="radio" name="tabs" id="tab1" class="peer/tab1 hidden" checked>

      <label for="tab1" class="w-1/2 md:w-40 h-12 md:h-14 flex items-center justify-center bg-[#EDC4CF]
      font-bold cursor-pointer text-[#841443]
      peer-checked/tab1:bg-[#DE869D] peer-checked/tab1:text-white
      rounded-t-xl text-sm md:text-base">
        Aktif
      </label>

      <div class="w-full px-4 md:px-10 py-10 md:py-20 bg-[#DE869D]
      order-1 hidden peer-checked/tab1:block rounded-b-xl rounded-tr-xl text-sm md:text-base">
        <div class="max-w-6xl mx-auto ">

          <!-- Semester List -->
          <div class="space-y-4">

            <!-- SEMESTER 1 -->
            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

              <!-- HEADER -->
              <div onclick="toggleSemester(this)" class="flex justify-between items-center cursor-pointer">

                <span class="tracking-widest font-semibold text-[#001286]">
                  SEMESTER 1
                </span>

                <img src="{{ asset('images/panah.png') }}" class="h-5 w-5 transition-transform duration-300 arrow">
              </div>

              <!-- CONTENT -->
              <div class="mt-3 hidden content">

                <!-- ✅ TAMBAHAN: overflow-x-auto -->
                <div class="overflow-x-auto">

                  <div class="min-w-[700px] rounded-t-lg overflow-hidden shadow border border-gray-300">
                    <table class="w-full text-[10px] sm:text-xs border-collapse">

                      <colgroup>
                        <col class="w-[40px]">
                        <col class="w-[70px]">
                        <col class="w-[150px]">
                        <col class="w-[50px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[90px]">
                        <col class="w-[70px]">
                      </colgroup>

                      <thead>
                        <tr class="bg-[#D9E5FF] text-[10px] sm:text-[11px] text-center">
                          <th rowspan="2" class="p-2">No</th>
                          <th rowspan="2" class="p-2">Kode</th>
                          <th rowspan="2" class="p-2 text-left">Nama</th>
                          <th rowspan="2" class="p-2">Sks</th>

                          <th colspan="2" class="p-2">Bobot SKS</th>
                          <th colspan="2" class="p-2">Jam/Sesi</th>

                          <th rowspan="2" class="p-2">Kategori</th>
                          <th rowspan="2" class="p-2">Silabus</th>
                        </tr>

                        <tr class="bg-[#D9E5FF] text-[8px] sm:text-[9px] text-center">
                          <th class="p-1">T</th>
                          <th class="p-1">P</th>
                          <th class="p-1">T</th>
                          <th class="p-1">P</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="text-center">
                          <td class="p-2">1</td>
                          <td class="p-2">201</td>
                          <td class="p-2 text-left">Pemrograman basis data</td>
                          <td class="p-2">3</td>

                          <td class="p-2">2</td>
                          <td class="p-2">1</td>
                          <td class="p-2">2</td>
                          <td class="p-2">1</td>

                          <td class="p-2">Wajib</td>

                          <td class="p-2 flex justify-center items-center">
                            <img src="{{ asset('images/silabus.png') }}" class="cursor-pointer w-4 sm:w-5"
                              onclick="openModalSilabus()">
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>

                </div>
              </div>
            </div>

            <!-- SEMESTER LAIN (tetap sama tampilan) -->
            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 2</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 3</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 4</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 5</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 6</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 7</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 8</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

          </div>
        </div>

        <!-- MODAL SILABUS -->
        <div id="modalSilabus" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50 p-3">


          <div class="w-full max-w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

            <!-- HEADER -->
            <div class="flex justify-center items-center py-3 relative border-b">
              <h2 class="text-base sm:text-lg font-semibold text-[#1B4597]">Silabus</h2>

              <button onclick="closeModalSilabus()"
                class="absolute right-3 sm:right-4 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">
                ✕
              </button>
            </div>

            <!-- CONTENT -->
            <div class="p-3 sm:p-5">
              <div class="overflow-y-auto max-h-[75vh]">

                <!-- ✅ scroll horizontal kalau sempit -->
                <div class="overflow-x-auto">

                  <table class="w-full min-w-[500px] border border-gray-400 border-collapse text-xs sm:text-sm">

                    <tr>
                      <td class="border p-2 w-[120px] sm:w-40">Mata Kuliah</td>
                      <td class="border p-2 w-[20px] text-center">:</td>
                      <td class="border p-2">Pemrograman Basis Data</td>
                    </tr>

                    <tr>
                      <td class="border p-2">Kode</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">201</td>
                    </tr>

                    <tr>
                      <td class="border p-2">SKS</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">3</td>
                    </tr>

                    <tr>
                      <td class="border p-2">Deskripsi Mata Kuliah</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mata kuliah ini membahas konsep dasar basis data, perancangan database,
                        serta implementasi menggunakan SQL dan DBMS.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Capaian Pembelajaran Umum</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mahasiswa mampu memahami konsep basis data dan mengimplementasikannya
                        dalam pengembangan aplikasi.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Capaian Pembelajaran Khusus</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mahasiswa mampu merancang database, membuat query SQL,
                        serta mengelola data secara efektif.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Daftar Pustaka</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        - Database System Concepts - Silberschatz<br>
                        - Fundamentals of Database Systems - Elmasri
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Rencana Pembelajaran Semester</td>
                      <td class="border p-2 text-center">:</td>

                      <td class="border p-2">

                        <div class="space-y-2">

                          <div class="flex items-center gap-2 border rounded-lg p-2">
                            <img src="../foto/file.svg" class="w-4 sm:w-5">
                            <div>
                              <p class="text-xs sm:text-sm font-medium">RPS.pdf</p>
                              <p class="text-[10px] sm:text-xs text-gray-500">100 kb</p>
                            </div>
                          </div>

                        </div>

                      </td>
                    </tr>

                  </table>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- TAB TIDAK AKTIF -->
      <input type="radio" name="tabs" id="tab2" class="peer/tab2 hidden">

      <label for="tab2" class="w-1/2 md:w-40 h-12 md:h-14 flex items-center justify-center bg-[#EDC4CF]
      font-bold cursor-pointer text-[#841443]
      peer-checked/tab2:bg-[#DE869D] peer-checked/tab2:text-white
      rounded-t-xl text-sm md:text-base">
        Tidak Aktif
      </label>

      <div class="w-full p-4 md:p-12 bg-[#DE869D]
      order-1 hidden peer-checked/tab2:block rounded-b-xl rounded-tr-xl">

        <div class="flex flex-wrap gap-2 md:gap-4 mb-6">

          <button data-id="a" class="kur-btn w-full sm:w-auto min-w-[140px]
    px-6 py-3 md:px-8 md:py-4
    rounded-lg shadow bg-white text-[#A30115]
    font-bold text-sm md:text-base text-center">
            Kurikulum A
          </button>

          <button data-id="b" class="kur-btn w-full sm:w-auto min-w-[140px]
    px-6 py-3 md:px-8 md:py-4
    rounded-lg shadow bg-white text-[#A30115]
    font-bold text-sm md:text-base text-center">
            Kurikulum B
          </button>

          <button data-id="c" class="kur-btn w-full sm:w-auto min-w-[140px]
    px-6 py-3 md:px-8 md:py-4
    rounded-lg shadow bg-white text-[#A30115]
    font-bold text-sm md:text-base text-center">
            Kurikulum C
          </button>

        </div>
        <!-- CONTENT -->
        <div id="kur-a" class="kur-content text-sm md:text-base">
          <div class="max-w-6xl mx-auto ">

          <!-- Semester List -->
          <div class="space-y-4">

            <!-- SEMESTER 1 -->
            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

              <!-- HEADER -->
              <div onclick="toggleSemester(this)" class="flex justify-between items-center cursor-pointer">

                <span class="tracking-widest font-semibold text-[#001286]">
                  SEMESTER 1
                </span>

                <img src="{{ asset('images/panah.png') }}" class="h-5 w-5 transition-transform duration-300 arrow">
              </div>

              <!-- CONTENT -->
              <div class="mt-3 hidden content">

                <!-- ✅ TAMBAHAN: overflow-x-auto -->
                <div class="overflow-x-auto">

                  <div class="min-w-[700px] rounded-t-lg overflow-hidden shadow border border-gray-300">
                    <table class="w-full text-[10px] sm:text-xs border-collapse">

                      <colgroup>
                        <col class="w-[40px]">
                        <col class="w-[70px]">
                        <col class="w-[150px]">
                        <col class="w-[50px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[40px]">
                        <col class="w-[90px]">
                        <col class="w-[70px]">
                      </colgroup>

                      <thead>
                        <tr class="bg-[#D9E5FF] text-[10px] sm:text-[11px] text-center">
                          <th rowspan="2" class="p-2">No</th>
                          <th rowspan="2" class="p-2">Kode</th>
                          <th rowspan="2" class="p-2 text-left">Nama</th>
                          <th rowspan="2" class="p-2">Sks</th>

                          <th colspan="2" class="p-2">Bobot SKS</th>
                          <th colspan="2" class="p-2">Jam/Sesi</th>

                          <th rowspan="2" class="p-2">Kategori</th>
                          <th rowspan="2" class="p-2">Silabus</th>
                        </tr>

                        <tr class="bg-[#D9E5FF] text-[8px] sm:text-[9px] text-center">
                          <th class="p-1">T</th>
                          <th class="p-1">P</th>
                          <th class="p-1">T</th>
                          <th class="p-1">P</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="text-center">
                          <td class="p-2">1</td>
                          <td class="p-2">201</td>
                          <td class="p-2 text-left">Pemrograman basis data</td>
                          <td class="p-2">3</td>

                          <td class="p-2">2</td>
                          <td class="p-2">1</td>
                          <td class="p-2">2</td>
                          <td class="p-2">1</td>

                          <td class="p-2">Wajib</td>

                          <td class="p-2 flex justify-center items-center">
                            <img src="{{ asset('images/silabus.png') }}" class="cursor-pointer w-4 sm:w-5"
                              onclick="openModalSilabus()">
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>

                </div>
              </div>
            </div>

            <!-- SEMESTER LAIN (tetap sama tampilan) -->
            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 2</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 3</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 4</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 5</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 6</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 7</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            <div class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
              <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 8</span>
              <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
            </div>

            

          </div>
        </div>

        <!-- MODAL SILABUS -->
        <div id="modalSilabus" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50 p-3">


          <div class="w-full max-w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

            <!-- HEADER -->
            <div class="flex justify-center items-center py-3 relative border-b">
              <h2 class="text-base sm:text-lg font-semibold text-[#1B4597]">Silabus</h2>

              <button onclick="closeModalSilabus()"
                class="absolute right-3 sm:right-4 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm">
                ✕
              </button>
            </div>

            <!-- CONTENT -->
            <div class="p-3 sm:p-5">
              <div class="overflow-y-auto max-h-[75vh]">

                <!-- ✅ scroll horizontal kalau sempit -->
                <div class="overflow-x-auto">

                  <table class="w-full min-w-[500px] border border-gray-400 border-collapse text-xs sm:text-sm">

                    <tr>
                      <td class="border p-2 w-[120px] sm:w-40">Mata Kuliah</td>
                      <td class="border p-2 w-[20px] text-center">:</td>
                      <td class="border p-2">Pemrograman Basis Data</td>
                    </tr>

                    <tr>
                      <td class="border p-2">Kode</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">201</td>
                    </tr>

                    <tr>
                      <td class="border p-2">SKS</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">3</td>
                    </tr>

                    <tr>
                      <td class="border p-2">Deskripsi Mata Kuliah</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mata kuliah ini membahas konsep dasar basis data, perancangan database,
                        serta implementasi menggunakan SQL dan DBMS.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Capaian Pembelajaran Umum</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mahasiswa mampu memahami konsep basis data dan mengimplementasikannya
                        dalam pengembangan aplikasi.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Capaian Pembelajaran Khusus</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        Mahasiswa mampu merancang database, membuat query SQL,
                        serta mengelola data secara efektif.
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Daftar Pustaka</td>
                      <td class="border p-2 text-center">:</td>
                      <td class="border p-2">
                        - Database System Concepts - Silberschatz<br>
                        - Fundamentals of Database Systems - Elmasri
                      </td>
                    </tr>

                    <tr>
                      <td class="border p-2">Rencana Pembelajaran Semester</td>
                      <td class="border p-2 text-center">:</td>

                      <td class="border p-2">

                        <div class="space-y-2">

                          <div class="flex items-center gap-2 border rounded-lg p-2">
                            <img src="../foto/file.svg" class="w-4 sm:w-5">
                            <div>
                              <p class="text-xs sm:text-sm font-medium">RPS.pdf</p>
                              <p class="text-[10px] sm:text-xs text-gray-500">100 kb</p>
                            </div>
                          </div>

                        </div>

                      </td>
                    </tr>

                  </table>

                </div>

              </div>
            </div>
          </div>
        </div>
        </div>

        <div id="kur-b" class="kur-content hidden text-sm md:text-base">
          <p>Isi Kurikulum B</p>
        </div>

        <div id="kur-c" class="kur-content hidden text-sm md:text-base">
          <p>Isi Kurikulum C</p>
        </div>

      </div>

    </div>
  </section>


  <section id="dosen" class="max-w-4xl mx-auto py-10 flex flex-col items-center px-5">

    <!-- Title -->
    <h1 class="text-3xl md:text-5xl font-bold lg:text-5xl mb-12 text-[#A30115] ">Dosen</h1>


    <!-- CARD 1 -->
    <div class="w-full bg-white rounded-3xl shadow-md p-6 mb-6">
      <div class="flex items-center justify-between cursor-pointer" onclick="toggle(1)">

        <div class="flex items-center gap-4">
          <img src="{{ asset('images/dosen-an1.png') }}" class="w-16 h-16 rounded-full">
          <div>
            <h2 class="text-xl font-bold text-[#A30115]">Riki, S.Tr., M.F.A</h2>
            <p class="text-gray-500">Kepala Program Studi Animasi</p>
          </div>
        </div>

        <span id="icon-1" class="text-[#A30115] text-xl transition-transform duration-300"><img
            src="{{ asset('images/panah.png') }}" class="w-10"></span>
      </div>

      <div id="content-1" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
        <div class="mt-4">
          <hr class="mb-4">
          <div class="grid md:grid-cols-2 gap-4 text-gray-700">
            <div>
              <p><b>NIK :</b> 124329</p>
              <p><b>Program Studi :</b> Animasi</p>
              <p><b>Pendidikan Terakhir :</b> Magister Strata 2 (S2)</p>
              <p><b>Email :</b> riki@polibatam.ac.idid</p>
            </div>
            <div>
              <p class="font-bold text-[#A30115] mb-2">Riwayat Pendidikan</p>
              <p>Sarjana Terapan (DIV) Politeknik Negeri Batam : Multimedia & Jaringan</p>
              <p>Magister (S2) -</p>
              <p class="mt-2"><b>Bidang Spesialis :</b> Animasi</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full bg-white rounded-3xl shadow-md p-6 mb-6">
      <div class="flex items-center justify-between cursor-pointer" onclick="toggle(2)">

        <div class="flex items-center gap-4">
          <img src="{{ asset('images/dosen-an2.png') }}" class="w-16 h-16 rounded-full">
          <div>
            <h2 class="text-xl font-bold text-[#A30115]">Gendhy Dwi Harlyan, S.Sn.,M.Sn</h2>
            <p class="text-gray-500">Dosen</p>
          </div>
        </div>

        <span id="icon-2" class="text-[#A30115] text-xl transition-transform duration-300"><img
            src="{{ asset('images/panah.png') }}" class="w-10"></span>
      </div>

      <div id="content-2" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
        <div class="mt-4">
          <hr class="mb-4">
          <div class="grid md:grid-cols-2 gap-4 text-gray-700">
            <div>
              <p><b>NIK :</b> 112086</p>
              <p><b>Program Studi :</b> Animasi</p>
              <p><b>Pendidikan Terakhir :</b> Magister Strata 2 (S2)</p>
              <p><b>Email :</b> Gendhy@polibatam.ac.id</p>
            </div>
            <div>
              <p class="font-bold text-[#A30115] mb-2">Riwayat Pendidikan</p>
              <p>Sarjana (S1) Universitas Negeri Malang : Desain Komunikasi Visual</p>
              <p>Magister (S2) Institut kesenian Jakarta : Pengkajian Seni</p>
              <p class="mt-2"><b>Bidang Spesialis :</b> Audio Visual</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="w-full bg-white rounded-3xl shadow-md p-6 mb-6">
      <div class="flex items-center justify-between cursor-pointer" onclick="toggle(3)">

        <div class="flex items-center gap-4">
          <img src="{{ asset('images/dosen-an3.png') }}" class="w-16 h-16 rounded-full">
          <div>
            <h2 class="text-xl font-bold text-[#A30115]">Ir. Selly Artaty Zega, S.ST., M.Sc</h2>
            <p class="text-gray-500">Dosen</p>
          </div>
        </div>

        <span id="icon-3" class="text-[#A30115] text-xl transition-transform duration-300"><img
            src="{{ asset('images/panah.png') }}" class="w-10"></span>
      </div>

      <div id="content-3" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
        <div class="mt-4">
          <hr class="mb-4">
          <div class="grid md:grid-cols-2 gap-4 text-gray-700">
            <div>
              <p><b>NIK :</b> 113104</p>
              <p><b>Program Studi :</b> Animasi</p>
              <p><b>Pendidikan Terakhir :</b> Magister Strata 2 (S2)</p>
              <p><b>Email :</b> selly@polibatam.ac.id</p>
            </div>
            <div>
              <p class="font-bold text-[#A30115] mb-2">Riwayat Pendidikan</p>
              <p>Sarjana Terapan (DIV) Institut Teknologi Bandung : Desain Komunikasi Visual - Animasi</p>
              <p>Magister (S2) Nanyang Technological University</p>
              <p class="mt-2"><b>Bidang Spesialis :</b> Digital Media Technology</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    



    </div>

  </section>


  <footer id="kontak" class=" bg-cover bg-center bg-no-repeat text-white" style="background-image: url('{{ asset('images/footer-an.png') }}')">

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">

      <!-- LOGO & DESKRIPSI -->
      <div>
        <img src="{{ asset('images/logo-prism.png') }}">

        <div class="w-full border-b border-white/50 mb-4"></div>

        <p class="text-sm text-white/80 mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eum, quasi voluptas nulla temporibus soluta.
        </p>

        <div class="flex items-center gap-2">
          <img src="{{ asset('images/logo-ig.png') }}" class="w-6">
          <p class="text-sm">@pbl.trpl215</p>
        </div>
      </div>

      <!-- PROGRAM STUDI -->
      <div>
        <h2 class="font-semibold text-lg mb-3">Program Studi</h2>
        <ul class="space-y-2 text-sm text-white/80">
          <li>Teknik Informatika</li>
          <li>Teknologi Geomatika</li>
          <li>Animasi</li>
          <li>Teknologi Rekayasa Multimedia</li>
          <li>Rekayasa Keamanan Siber</li>
          <li>Teknologi Rekayasa Perangkat Lunak</li>
          <li>Teknologi Permainan</li>
        </ul>
      </div>

      <!-- MENU -->
      <div>
        <h2 class="font-semibold text-lg mb-3">Menu</h2>
        <ul class="space-y-2 text-sm text-white/80">
          <li>Beranda</li>
          <li>Tentang Kami</li>
          <li>Program Studi</li>
          <li>Kontak</li>
        </ul>
      </div>

      <!-- KONTAK -->
      <div>
        <img src="{{ asset('images/logo-polibatam.png') }}" alt="" class="w-40">

        <p class="text-sm text-white/80 mb-3">
          Alamat : Jl. Ahmad Yani Batam Kota. Kota Batam. Kepulauan Riau. Indonesia
        </p>

        <p class="text-sm text-white/80">
          Phone : +62-778-469858 Ext.1017 <br>
          Fax : +62-778-463620 <br>
          Email : info@polibatam.ac.id
        </p>
      </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="bg-gradient-to-r from-[#005BDB] to-[#00DDFF] text-center text-sm py-2">
      ©2026 Platform for Resource & Study Management
    </div>

  </footer>
  
  <script src="{{ asset('js/tampilan-program-studi.js') }}"></script>
</body>

</html>