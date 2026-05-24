<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Dashboard</x-admin.header>

            
            
            
            <!-- Welcome Banner -->
            <!-- CONTENT -->
            <div class="flex-1 overflow-y-auto px-2 pb-6 space-y-6">

                <!-- WELCOME -->
                <div class="relative bg-gradient-to-r from-[#AD00F1] via-[#3700E9] to-[#009DFF]
                    text-white px-7 rounded-[24px] shadow-sm overflow-hidden
                    flex items-center min-h-[170px]">

                    <div class="space-y-1 z-10 pr-[260px]">

                        <p class="text-xs uppercase tracking-wider font-semibold opacity-90">
                            HELLO Name!
                        </p>

                        <h2 class="text-4xl font-extrabold tracking-tight">
                            Welcome Back
                        </h2>

                        <p class="text-[11px] pt-4 opacity-75 font-medium">
                            1 Januari 2026
                        </p>

                    </div>

                    <div class="absolute right-0 top-5 h-full flex items-end">

                        <img src="{{ asset('images/illustrasi_welcome.png') }}" alt="" class="h-[190px] object-contain">

                    </div>

                </div>

                <!-- CARD -->
                <div class="grid grid-cols-3 gap-5">

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

                                <h1 class="text-[40px] font-extrabold text-[#044894] leading-none">
                                    7
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

                                <h1 class="text-[40px] font-extrabold text-[#5100C6] leading-none">
                                    4
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

                                <h1 class="text-[40px] font-extrabold text-[#A900C7] leading-none">
                                    32
                                </h1>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- GRAFIK KURIKULUM -->
                <div class="grid grid-cols-1 gap-5">

                    <div class="bg-white p-5 rounded-2xl shadow-sm border border-[#DDE8FF] flex flex-col items-center max-w-2xl">

                        <h4 class="text-xs font-bold text-[#001286] mb-6 text-center w-full">
                            Jumlah kurikulum per program studi
                        </h4>

                        <div class="flex w-full pr-2 h-56 relative pl-10">

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
                            <div class="flex-1 h-full relative flex flex-col justify-between">

                                <div id="prodi-bars-container"
                                    class="absolute inset-x-0 top-0 bottom-6 flex flex-col justify-between py-1">
                                </div>

                                <!-- SCALE -->
                                <div
                                    class="absolute inset-x-0 bottom-0 top-0 flex justify-between text-[9px] font-bold text-gray-400 pointer-events-none items-end">

                                    <div class="h-full border-r border-gray-100 relative flex items-end w-0">
                                        <span class="absolute top-full pt-1 -left-1">0</span>
                                    </div>

                                    <div class="h-full border-r border-gray-100 relative flex items-end w-0">
                                        <span class="absolute top-full pt-1 -left-1">1</span>
                                    </div>

                                    <div class="h-full border-r border-gray-100 relative flex items-end w-0">
                                        <span class="absolute top-full pt-1 -left-1">2</span>
                                    </div>

                                    <div class="h-full border-r border-gray-100 relative flex items-end w-0">
                                        <span class="absolute top-full pt-1 -left-1">3</span>
                                    </div>

                                    <div class="h-full relative flex items-end w-0">
                                        <span class="absolute top-full pt-1 -left-1">4</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </main>
    </div>
    <script>

        // GRAFIK KURIKULUM
        const dataProdi = [

            {
                prodi: "GM",
                jumlah: 1,
                width: "w-[23%]",
                bgGradient: "from-[#E555FF] to-[#A900C7]"
            },

            {
                prodi: "Animasi",
                jumlah: 2,
                width: "w-[46%]",
                bgGradient: "from-[#9A55FF] to-[#7928CA]"
            },

            {
                prodi: "RKS",
                jumlah: 2,
                width: "w-[46%]",
                bgGradient: "from-[#9A55FF] to-[#6B00FF]"
            },

            {
                prodi: "TP",
                jumlah: 2,
                width: "w-[46%]",
                bgGradient: "from-[#7928CA] to-[#5100C6]"
            },

            {
                prodi: "TRM",
                jumlah: 3,
                width: "w-[69%]",
                bgGradient: "from-[#4364F7] to-[#3307CC]"
            },

            {
                prodi: "TRPL",
                jumlah: 3,
                width: "w-[69%]",
                bgGradient: "from-[#067AFA] to-[#044894]"
            },

            {
                prodi: "IF",
                jumlah: 4,
                width: "w-[92%]",
                bgGradient: "from-[#0088FF] to-[#0052D4]"
            }

        ];

        const prodiContainer = document.getElementById("prodi-bars-container");

        dataProdi.forEach(item => {

            const rowGroup = document.createElement("div");

            rowGroup.className =
                "flex items-center w-full text-[9px] font-bold text-gray-700";

            rowGroup.innerHTML = `
                <span class="w-12 text-right pr-2 text-gray-800">
                    ${item.prodi}
                </span>

                <div class="flex-1 bg-gray-50 h-4 rounded-full overflow-hidden relative flex items-center">

                    <div class="bg-gradient-to-r ${item.bgGradient} h-full rounded-full ${item.width} transition-all duration-500"></div>

                    <span class="absolute left-full pl-2 text-gray-600 font-bold">
                        ${item.jumlah}
                    </span>

                </div>
            `;

            prodiContainer.appendChild(rowGroup);

        });

    </script>
    </body>
    </x-layout.layout>