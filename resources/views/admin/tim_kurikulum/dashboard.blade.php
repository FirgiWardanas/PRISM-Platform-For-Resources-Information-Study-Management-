<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat h-screen overflow-hidden"
        style="background-image: url('{{ asset('images/image-7.png') }}');">

        <div class="flex h-full px-4 py-4 gap-4">

            <!-- Sidebar -->
            <aside class="w-64 shrink-0 rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
                <div class="mb-10 flex items-center gap-3">
                    <div class="h-12 w-20 rounded-full bg-cover bg-center"
                        style="background-image: url('{{ asset('images/logo prism.svg') }}');"></div>

                    <div>
                        <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
                        <p class="text-xs text-[#0161C5]">platform for resource & study Management</p>
                    </div>
                </div>

                        <nav class="space-y-3">
            <a href="/admin/tim-kurikulum"
                class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                <img src="{{ asset('images/Structure.svg') }}" class="h-4 w-4">Dashboard</a>
            <a href="/admin/kurikulum"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1">Kurikulum</a>
            <a href="/admin/matakuliah"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4">Matakuliah</a>
            <a href="/admin/kustomisasi"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kustomisasi(putih).svg') }}" class="h-4 w-4">Kustomisasi</a>
            <a href="/admin/profile-tim-kurikulum"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>
        </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 flex flex-col h-full">

                <div class="p-1 pb-0">
                    <div class="flex items-start justify-between mb-6">
                        <h1 class="text-2xl font-semibold">Dashboard</h1>
                        <img src="{{ asset('images/Profile Circle.svg') }}"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF]  rounded-full ">
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto px-2 pb-6 space-y-6">

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

                <div class="grid grid-cols-3 gap-5">

                    <div class="bg-white rounded-[24px] p-5 border border-[#DDE8FF]
                shadow-[#0447945a] shadow-lg
                relative overflow-hidden">

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

                    <div class="bg-white rounded-[24px] p-5 border border-[#E8D7FF]
                shadow-[#5200c663] shadow-lg
                relative overflow-hidden">

                        <div class="absolute right-0 top-4 w-[8px] h-[75px]
                    rounded-l-full bg-gradient-to-b
                    from-[#9A55FF] to-[#5100C6]">
                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-full bg-[#9955ff7a]
                        flex items-center  justify-center text-2xl">
                                <img class="relative bottom-1" src="{{ asset('images/logo-kurikulum(ungu).png') }}" alt="">
                            </div>

                            <div>
                                <p class="text-[#5100C6] font-semibold text-sm">
                                    Kurikulum
                                </p>

                                <h1 class="text-[40px] font-extrabold text-[#5100C6] leading-none">
                                    4
                                </h1>
                            </div>

                        </div>

                    </div>

                    <div class="bg-white rounded-[24px] p-5 border border-[#FFD9F7]
                shadow-[#a900c760] shadow-lg
                relative overflow-hidden">

                        <div class="absolute right-0 top-4 w-[8px] h-[75px]
                    rounded-l-full bg-gradient-to-b
                    from-[#E555FF] to-[#A900C7]">
                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14 rounded-full bg-[#e555ff6d]
                        flex items-center justify-center text-2xl">
                                <img src="{{ asset('images/logo-matakuliah(ungu).png') }}" alt="">
                            </div>

                            <div>
                                <p class="text-[#A900C7] font-semibold text-sm">
                                    Mata Kuliah
                                </p>

                                <h1 class="text-[40px] font-extrabold text-[#A900C7] leading-none">
                                    32
                                </h1>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="grid grid-cols-3 gap-5">

                    <div class="col-span-2 bg-white p-5 rounded-2xl shadow-sm flex flex-col items-center">
                        <h4 class="text-xs font-bold text-[#1E293B] mb-6 text-center w-full">Jumlah SKS per semester
                        </h4>

                        <div id="sks-chart-container"
                            class="flex items-end justify-between w-full px-4 h-36 border-b border-gray-100 pb-2 relative">
                            <div class="absolute left-0 top-0 bottom-8 flex items-center">
                                <div
                                    class="border border-[#3700E9] text-[#3700E9] p-1 rounded-xl flex flex-col items-center justify-center gap-1 h-full w-8">
                                    <span class="text-[14px]">🎓</span>
                                    <span
                                        class="text-[8px] font-bold uppercase tracking-widest [writing-mode:vertical-lr] rotate-180">Jumlah
                                        SKS</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="text-xs font-bold text-[#1E293B]">Matakuliah</h4>
                                <span id="total-matakuliah" class="text-[10px] text-gray-400 font-medium">jumlah
                                    0</span>
                            </div>

                            <div id="matakuliah-bar-container" class="space-y-3.5">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" mx-auto bg-white p-5 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between w-full mb-5 p-5">

                        <div></div>

                        <div>
                            <h1 class="text-2xl font-bold">Kurikulum</h1>
                        </div>
                        <div>
                            <button
                                class="px-4 py-2 bg-gradient-to-r from-[#0282FD] to-[#3502CA] hover:scale-110 text-white rounded-full transition flex justify-center items-center gap-1">
                                Selengkapnya
                                <img class="w-5 h-5" src="{{ asset('images/panah1.png') }}" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="space-y-4">

                        <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                            <div onclick="toggleSemester(this)"
                                class="flex justify-between items-center cursor-pointer">

                                <span class="tracking-widest font-semibold text-[#001286]">
                                    SEMESTER 1
                                </span>

                                <img src="{{ asset('images/panah.png') }}"
                                    class="h-5 w-5 transition-transform duration-300 arrow">
                            </div>

                            <div class="mt-3 hidden content">

                                <div class="overflow-x-auto">

                                    <div
                                        class="min-w-[700px] rounded-t-lg overflow-hidden shadow border border-gray-300">
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
                                                        <img src="{{ asset('images/silabus.png') }}"
                                                            class="cursor-pointer w-4 sm:w-5"
                                                            onclick="openModalSilabus()">
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 2</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 3</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 4</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 5</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 6</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 7</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>

                        <div
                            class="bg-white rounded-xl p-4 flex justify-between items-center shadow-md border border-gray-300">
                            <span class="tracking-widest font-semibold text-[#001286]">SEMESTER 8</span>
                            <img src="{{ asset('images/panah.png') }}" class="h-5 w-5">
                        </div>


                    </div>
                    <!-- MODAL SILABUS -->
                    <div id="modalSilabus"
                        class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50 p-3">


                        <div
                            class="w-full max-w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

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

                                        <table
                                            class="w-full min-w-[500px] border border-gray-400 border-collapse text-xs sm:text-sm">

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
                                                    Mata kuliah ini membahas konsep dasar basis data, perancangan
                                                    database,
                                                    serta implementasi menggunakan SQL dan DBMS.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border p-2">Capaian Pembelajaran Umum</td>
                                                <td class="border p-2 text-center">:</td>
                                                <td class="border p-2">
                                                    Mahasiswa mampu memahami konsep basis data dan
                                                    mengimplementasikannya
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
                                                                <p class="text-[10px] sm:text-xs text-gray-500">100 kb
                                                                </p>
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

            </div>
            </main>
        </div>
    </body>
    <script>
        // 1. DATA UNTUK DIAGRAM BATANG SKS
        const dataSKS = [
            { semester: "Semester 1", sks: 20, heightClass: "h-24", textColor: "text-blue-600", bgGradient: "from-[#0052D4] to-[#4364F7]", opacity: "" },
            { semester: "Semester 2", sks: 21, heightClass: "h-26", textColor: "text-blue-600", bgGradient: "from-[#0052D4] to-[#4364F7]", opacity: "" },
            { semester: "Semester 3", sks: 22, heightClass: "h-28", textColor: "text-purple-600", bgGradient: "from-[#7928CA] to-[#B800FF]", opacity: "" },
            { semester: "Semester 4", sks: 20, heightClass: "h-24", textColor: "text-purple-600", bgGradient: "from-[#7928CA] to-[#B800FF]", opacity: "" },
            { semester: "Semester 5", sks: 20, heightClass: "h-24", textColor: "text-purple-600", bgGradient: "from-[#7928CA] to-[#B800FF]", opacity: "" },
            { semester: "Semester 6", sks: 18, heightClass: "h-20", textColor: "text-pink-500", bgGradient: "from-[#FF0080] to-[#FF007F]", opacity: "" },
            { semester: "Semester 7", sks: 14, heightClass: "h-14", textColor: "text-pink-500", bgGradient: "from-[#FF0080] to-[#FF758C]", opacity: "opacity-75" },
            { semester: "Semester 8", sks: 6, heightClass: "h-6", textColor: "text-pink-500", bgGradient: "from-[#FF0080] to-[#FF758C]", opacity: "opacity-50" }
        ];

        const chartContainer = document.getElementById("sks-chart-container");

        dataSKS.forEach((item, index) => {
            const barWrapper = document.createElement("div");
            // Menambahkan margin-left hanya pada bar pertama agar posisinya sama dengan layout Anda sebelumnya
            barWrapper.className = `flex flex-col items-center gap-1 w-1/8 ${index === 0 ? 'ml-8' : ''}`;

            barWrapper.innerHTML = `
                <span class="text-[9px] font-bold ${item.textColor}">${item.sks} SKS</span>
                <div class="w-5 bg-gradient-to-t ${item.bgGradient} ${item.heightClass} rounded-full ${item.opacity}"></div>
                <span class="text-[8px] font-medium text-gray-400 mt-1">${item.semester}</span>
            `;
            chartContainer.appendChild(barWrapper);
        });


        // 2. DATA UNTUK PROGRESS BAR MATAKULIAH
        const dataMatakuliah = {
            total: 30,
            categories: [
                { name: "langsung", jumlah: 20, width: "w-[66%]", bgGradient: "from-[#0052D4] to-[#4364F7]" },
                { name: "pendukung", jumlah: 6, width: "w-[30%]", bgGradient: "from-[#7928CA] to-[#B800FF]" },
                { name: "tidak langsung", jumlah: 4, width: "w-[20%]", bgGradient: "from-[#FF0080] to-[#FF758C]" }
            ]
        };

        document.getElementById("total-matakuliah").textContent = `jumlah ${dataMatakuliah.total}`;
        const barContainer = document.getElementById("matakuliah-bar-container");

        dataMatakuliah.categories.forEach(item => {
            const row = document.createElement("div");
            row.className = "flex items-center justify-between gap-2 text-xs";

            row.innerHTML = `
                <span class="w-24 text-gray-600 font-medium text-[11px]">${item.name}</span>
                <div class="flex-1 bg-gray-100 h-6 rounded-lg overflow-hidden relative">
                    <div class="bg-gradient-to-r ${item.bgGradient} h-full rounded-lg ${item.width}"></div>
                </div>
                <span class="w-6 text-right font-semibold text-gray-700">${item.jumlah}</span>
            `;
            barContainer.appendChild(row);
        });

        function toggleSemester(el) {
      const parent = el.parentElement;
      const content = parent.querySelector(".content");
      const arrow = parent.querySelector(".arrow");

      content.classList.toggle("hidden");
      arrow.classList.toggle("rotate-180");
    }

    function openModalSilabus() {
      const modal = document.getElementById("modalSilabus");
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    }

    function closeModalSilabus() {
      const modal = document.getElementById("modalSilabus");
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
    </script>
</body>
</x-layout.layout>