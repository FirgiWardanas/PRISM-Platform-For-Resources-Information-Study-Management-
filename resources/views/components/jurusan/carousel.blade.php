<section id="home" class="w-full min-h-[100vh] flex items-center justify-center overflow-hidden">
    <div id="slider" class="flex transition-transform duration-500 h-full">

        {{-- SLIDE 1 --}}
        <div class="min-w-full flex flex-col-reverse md:flex-row items-center justify-between md:gap-10 w-full max-w-6xl xl:px-34">
            <div class="text-center md:text-left">
                <h2 class="text-sm sm:text-lg md:text-xl lg:text-2xl">
                    Sistem Informasi Kurikulum
                </h2>
                <h1 class="text-2xl md:text-4xl font-bold lg:text-5xl">
                    Teknik Informatika
                </h1>
                <h3 class="text-sm md:text-base text-white lg:text-lg">
                    Politeknik Negeri Batam
                </h3>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/ilustrasi-jurusan.png') }}" class="w-64 md:w-80 lg:w-115 drop-shadow-xl hover:scale-105 transition duration-300">
            </div>
        </div>

        {{-- SLIDE 2 --}}
        <div class="min-w-full flex items-center justify-center min-h-[60vh]">
            <div class="flex flex-col md:flex-row items-start justify-center gap-12 max-w-6xl w-full px-12">

                {{-- VISI --}}
                <div class="w-full md:w-1/2 flex flex-col gap-3">
                    <h1 class="text-2xl md:text-4xl font-bold lg:text-5xl text-center w-full">Visi</h1>
                    <p class="text-justify">
                        Menjadi jurusan generasi baru yang bermutu, unggul dalam pengembangan ilmu terapan komputasi,
                        teknologi spasial, digital kreatif, dan siber, melalui pendidikan vokasi yang adaptif,
                        inovatif, dan berdaya saing global serta bermitra erat dengan industri dan masyarakat
                        untuk mendukung Indonesia yang maju dan sejahtera.
                    </p>
                </div>

                {{-- MISI --}}
                <div class="w-full md:w-1/2 flex flex-col gap-3">
                    <h1 class="text-2xl md:text-4xl font-bold lg:text-5xl text-center w-full">Misi</h1>
                    <p class="text-justify">
                        Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang ilmu
                        terapan komputasi, teknologi spasial, digital kreatif, dan siber, melalui layanan pendidikan
                        tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat
                        dengan masyarakat dan industri dengan penerapan tata kelola jurusan yang baik.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- TOMBOL PREV / NEXT --}}
<button onclick="prev()" class="absolute top-1/2 left-5 -translate-y-1/2 bg-white/50 w-10 h-10 rounded-full hover:scale-110 text-2xl font-bold text-orange-500 flex justify-center items-center">
    ‹
</button>
<button onclick="next()" class="absolute top-1/2 right-5 -translate-y-1/2 bg-white/50 w-10 h-10 rounded-full hover:scale-110 text-2xl font-bold text-orange-500 flex justify-center items-center">
    ›
</button>

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