<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            <!-- Header -->
            <x-admin.header>Dashboard</x-admin.header>
            <!-- Welcome Banner -->
            <!-- CONTENT -->
            <div class="flex-1 overflow-y-auto px-2 pb-6 space-y-6">

                <!-- WELCOME -->
                <div class="relative bg-gradient-to-r from-[#AD00F1] via-[#3700E9] to-[#009DFF]
                    text-white px-7 rounded-[24px] shadow-sm overflow-hidden
                    flex flex-col md:flex-row items-center min-h-[170px] p-6">

                    <div class="space-y-1 z-10 md:pr-[260px]">

                        <p class="text-xs uppercase tracking-wider font-semibold opacity-90">
                            HELLO {{ $user->nama }}!
                        </p>

                        <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight">
                            Selamat Datang Kembali
                        </h2>

                        <p class="text-[11px] pt-4 opacity-75 font-medium">
                            {{ $tanggal }}
                        </p>

                    </div>

                    <div class="absolute right-0 top-5 h-full flex items-end">

                        <img src="{{ asset('images/illustrasi_welcome.png') }}" alt=""
                            class="h-[120px] md:h-[190px] object-contain">

                    </div>

                </div>

                <!-- CARD -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                    <!-- PROGRAM STUDI -->
                    <div class="bg-white rounded-[24px] p-5 border border-[#DDE8FF]
                        shadow-[#0447945a] shadow-lg relative overflow-hidden">

                        <div class="absolute right-0 top-4 w-[8px] h-[75px]
                            rounded-l-full bg-gradient-to-b
                            from-[#067AFA] to-[#044894]">
                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-full bg-[#067cfa74]
                                flex items-center justify-center text-2xl">

                                <img src="{{ asset('images/logo-prodi(biru).png') }}" alt="">

                            </div>

                            <div>

                                <p class="text-[#044894] font-semibold text-sm">
                                    Program Studi
                                </p>

                                <h1 class="text-3xl md:text-[40px] font-extrabold text-[#044894] leading-none">
                                    {{ $jumlah_prodi }}
                                </h1>

                            </div>

                        </div>

                    </div>

                    <!-- KURIKULUM -->
                    <div class="bg-white rounded-[24px] p-5 border border-[#E8D7FF]
                        shadow-[#5200c663] shadow-lg relative overflow-hidden">

                        <div class="absolute right-0 top-4 w-[8px] h-[75px]
                            rounded-l-full bg-gradient-to-b
                            from-[#9A55FF] to-[#5100C6]">
                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-full bg-[#9955ff7a]
                                flex items-center justify-center text-2xl">

                                <img src="{{ asset('images/logo-dosen(ungu).png') }}" alt="">

                            </div>

                            <div>

                                <p class="text-[#5100C6] font-semibold text-sm">
                                    Dosen
                                </p>

                                <h1 class="text-3xl md:text-[40px] font-extrabold text-[#5100C6] leading-none">
                                    {{ $jumlah_dosen }}
                                </h1>

                            </div>

                        </div>

                    </div>

                    <!-- MATAKULIAH -->
                    <div class="bg-white rounded-[24px] p-5 border border-[#FFD9F7]
                        shadow-[#a900c760] shadow-lg relative overflow-hidden">

                        <div class="absolute right-0 top-4 w-[8px] h-[75px]
                            rounded-l-full bg-gradient-to-b
                            from-[#E555FF] to-[#A900C7]">
                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-full bg-[#e555ff6d]
                                flex items-center justify-center text-2xl">

                                <img src="{{ asset('images/logo-akun(ungu).png') }}" alt="">

                            </div>

                            <div>

                                <p class="text-[#A900C7] font-semibold text-sm">
                                    Akun
                                </p>

                                <h1 class="text-3xl md:text-[40px] font-extrabold text-[#A900C7] leading-none">
                                    {{ $jumlah_akun }}
                                </h1>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- GRAFIK KURIKULUM -->
                <div class="grid grid-cols-1 gap-5">

                    <div
                        class="bg-white p-5 rounded-2xl shadow-sm border border-[#DDE8FF] flex flex-col items-center w-full max-w-full">

                        <h4 class="text-xs font-bold text-[#001286] mb-6 text-center w-full">
                            Jumlah kurikulum per program studi
                        </h4>

                        <div class="flex w-full pr-2 h-56 md:h-64 relative pl-8 md:pl-10">

                            <!-- LABEL -->
                            <div class="absolute left-0 top-0 bottom-6 flex items-center">

                                <div
                                    class="border border-[#3700E9] text-[#3700E9] p-1 rounded-xl flex flex-col items-center justify-center gap-1 h-full w-8">

                                    <span class="text-[14px]">🎓</span>

                                    <span
                                        class="text-[8px] font-bold uppercase tracking-widest [writing-mode:vertical-lr] rotate-180">

                                        Program Studi

                                    </span>

                                </div>

                            </div>


                            <!-- CHART -->
                            <div class="flex-1 h-full relative flex flex-col justify-between pl-2">

                                <!-- SCALE LINES (background) -->
                                <div id="scale-container"
                                    class="absolute inset-x-0 top-0 bottom-6 flex justify-between pointer-events-none">
                                </div>

                                <!-- BARS -->
                                <div id="prodi-bars-container"
                                    class="absolute inset-x-0 top-0 bottom-6 flex flex-col justify-between py-1">
                                </div>

                                <!-- ANGKA SKALA BAWAH -->
                                <div id="scale-numbers"
                                    class="absolute left-0 right-0 bottom-0 flex justify-between text-[9px] font-bold text-gray-400">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>
        </div>

        <script>
            const dataProdi = @json($Prodis->map(function ($prodi) {
                return [
                    'prodi' => $prodi->kode_prodi,
                    'jumlah' => $prodi->kurikulums->count(),
                ];
            }));

            const gradients = [
                'from-[#E555FF] to-[#A900C7]',
                'from-[#9A55FF] to-[#7928CA]',
                'from-[#9A55FF] to-[#6B00FF]',
                'from-[#7928CA] to-[#5100C6]',
                'from-[#4364F7] to-[#3307CC]',
                'from-[#067AFA] to-[#044894]',
                'from-[#0088FF] to-[#0052D4]',
            ];

            const maxJumlah = Math.max(...dataProdi.map(d => d.jumlah), 1);
            const offsetLeft = 48; // w-10 (40px) + gap-2 (8px)

            // isi bar
            const prodiContainer = document.getElementById("prodi-bars-container");
            dataProdi.forEach((item, index) => {
                const persen = Math.round((item.jumlah / maxJumlah) * 100);
                const gradient = gradients[index % gradients.length];

                const rowGroup = document.createElement("div");
                rowGroup.className = "flex items-center w-full text-[9px] font-bold text-gray-700 gap-2";
                rowGroup.innerHTML = `
            <span class="w-10 text-left text-gray-800 shrink-0">${item.prodi}</span>
            <div class="flex-1 bg-gray-100 h-3 rounded-full relative">
                <div class="bg-gradient-to-r ${gradient} h-full rounded-full transition-all duration-500"
                    style="width: ${persen}%"></div>
            </div>
        `;
                prodiContainer.appendChild(rowGroup);
            });

            // garis skala + angka bawah
            const scaleContainer = document.getElementById("scale-container");
            const scaleNumbers = document.getElementById("scale-numbers");

            for (let i = 0; i <= maxJumlah; i++) {
                const persen = (i / maxJumlah) * 100;
                const leftPos = `calc(${offsetLeft}px + ${persen}% * (100% - ${offsetLeft}px) / 100%)`;

                // garis vertikal
                const line = document.createElement("div");
                line.className = "absolute top-0 bottom-0 border-r border-gray-100";
                line.style.left = leftPos;
                scaleContainer.appendChild(line);

                // angka bawah
                const num = document.createElement("div");
                num.className = "absolute text-[9px] font-bold text-gray-400";
                num.style.left = leftPos;
                num.innerHTML = `<span class="-translate-x-1/2 block">${i}</span>`;
                scaleNumbers.appendChild(num);
            }
            const menuBtn = document.getElementById('menuBtn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');

            menuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-[120%]');
                overlay.classList.toggle('hidden');
            });

            overlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-[120%]');
                overlay.classList.add('hidden');
            });

            const profileBtn = document.getElementById('profileBtn');
            const profileCard = document.getElementById('profileCard');

            profileBtn.addEventListener('click', function (e) {

                e.stopPropagation();

                profileCard.classList.toggle('hidden');

            });

            profileCard.addEventListener('click', function (e) {

                e.stopPropagation();

            });

            document.addEventListener('click', function () {

                profileCard.classList.add('hidden');

            });

        </script>

    </body>
</x-layout.layout>