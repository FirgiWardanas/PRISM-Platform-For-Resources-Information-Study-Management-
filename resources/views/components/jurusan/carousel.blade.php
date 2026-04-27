<section id="home" class="w-full min-h-screen flex items-center justify-center overflow-hidden relative">

  <!-- SLIDER -->
  <div id="slider" class="flex transition-transform duration-500 h-full w-full">

    <!-- SLIDE 1 -->
    <div class="min-w-full flex flex-col-reverse md:flex-row items-center justify-center gap-8 lg:gap-68 max-w-6xl mx-auto px-4 md:px-10 lg:px-16">

      <!-- TEXT -->
      <div class="text-center md:text-left md:gap-2">
        <h2 class="text-sm sm:text-lg md:text-xl lg:text-2xl font-semibold">
          Sistem Informasi Kurikulum
        </h2>

        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold">
          Teknik Informatika
        </h1>

        <h3 class="text-sm md:text-base lg:text-lg text-white">
          Politeknik Negeri Batam
        </h3>
      </div>

      <!-- IMAGE -->
      <div class="flex justify-center">
        <img 
          src="{{ asset('images/ilustrasi-jurusan.png') }}" 
          class="w-52 sm:w-64 md:w-80 lg:w-[420px] drop-shadow-xl hover:scale-105 transition duration-300"
        >
      </div>

    </div>

    <!-- SLIDE 2 -->
    <div class="min-w-full flex items-center justify-center px-4 md:px-10">

      <div class="flex flex-col gap-10 max-w-2xl w-full">

        <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-5xl font-bold text-center">
          Visi
        </h1>

        <p class="text-xs sm:text-sm md:text-base text-justify">
          Menjadi jurusan generasi baru yang bermutu, unggul dalam pengembangan ilmu terapan komputasi,
          teknologi spasial, digital kreatif, dan siber, melalui pendidikan vokasi yang adaptif,
          inovatif, dan berdaya saing global serta bermitra erat dengan industri dan masyarakat
          untuk mendukung Indonesia yang maju dan sejahtera.
        </p>

        <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-5xl font-bold text-center">
          Misi
        </h1>

        <p class="text-xs sm:text-sm md:text-base text-justify">
          Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang ilmu
          terapan komputasi, teknologi spasial, digital kreatif, dan siber, melalui layanan pendidikan
          tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat
          dengan masyarakat dan industri dengan penerapan tata kelola jurusan yang baik.
        </p>

      </div>
    </div>

  </div>

  <!-- BUTTON PREV -->
  <button 
    onclick="prev()" 
    class="absolute left-3 md:left-5 top-1/2 -translate-y-1/2
           bg-white/60 backdrop-blur w-9 h-9 md:w-10 md:h-10
           rounded-full text-xl font-bold text-orange-500 flex items-center justify-center
           hover:scale-110 transition">
    ‹
  </button>

  <!-- BUTTON NEXT -->
  <button 
    onclick="next()" 
    class="absolute right-3 md:right-5 top-1/2 -translate-y-1/2
           bg-white/60 backdrop-blur w-9 h-9 md:w-10 md:h-10
           rounded-full text-xl font-bold text-orange-500 flex items-center justify-center
           hover:scale-110 transition">
    ›
  </button>

</section>

<script>
  let index = 0;
  const slider = document.getElementById('slider');
  const total = slider.children.length;

  function updateSlide() {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  function next() {
    index = (index + 1) % total;
    updateSlide();
  }

  function prev() {
    index = (index - 1 + total) % total;
    updateSlide();
  }
</script>