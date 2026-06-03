<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat h-screen overflow-hidden"
        style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebbar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main Content -->
        <main class="flex flex-col h-screen p-4 md:p-6 lg:ml-72">

            {{-- header --}}
            <x-admin.header_kurikulum>Dashboard</x-admin.header-kurikulum>

                <div class="flex-1 overflow-y-auto px-2 pb-6 space-y-6">

                    {{-- ── WELCOME BANNER ── --}}
                    <div class="relative bg-gradient-to-r from-[#AD00F1] via-[#3700E9] to-[#009DFF]
                        text-white px-7 rounded-[24px] overflow-hidden
                            flex flex-col md:flex-row justify-center md:justify-between
                            min-h-[170px] p-5 md:px-7">
                        <div class="space-y-1 z-10 pr-[260px]">
                            <p class="text-xs uppercase tracking-wider font-semibold opacity-90">
                                HELLO {{ strtoupper(auth()->user()->nama) }}!
                            </p>
                            <h2 class="text-4xl font-extrabold tracking-tight">Welcome Back</h2>
                            <p class="text-[11px] pt-4 opacity-75 font-medium">
                                {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                            </p>
                        </div>
                        <div class="hidden md:flex absolute right-0 top-5 h-full items-end">
                            <img src="{{ asset('images/illustrasi_welcome.png') }}" alt=""
                                class="h-[190px] object-contain">
                        </div>
                    </div>

                    {{-- ── STAT CARDS ── --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                        {{-- Program Studi --}}
                        <div
                            class="bg-white rounded-[24px] p-5 border border-[#DDE8FF] shadow-[#0447945a] shadow-lg relative overflow-hidden">
                            <div
                                class="absolute right-0 top-4 w-[8px] h-[75px] rounded-l-full bg-gradient-to-b from-[#067AFA] to-[#044894]">
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-[#067cfa74] flex items-center justify-center">
                                    <img src="{{ asset('images/logo-prodi(biru).png') }}" alt="">
                                </div>
                                <div>
                                    <p class="text-[#044894] font-semibold text-sm">Program Studi</p>
                                    <h1 class="text-[40px] font-extrabold text-[#044894] leading-none">
                                        {{ $jumlahProdi }}
                                    </h1>
                                </div>
                            </div>
                        </div>

                        {{-- Kurikulum --}}
                        <div
                            class="bg-white rounded-[24px] p-5 border border-[#E8D7FF] shadow-[#5200c663] shadow-lg relative overflow-hidden">
                            <div
                                class="absolute right-0 top-4 w-[8px] h-[75px] rounded-l-full bg-gradient-to-b from-[#9A55FF] to-[#5100C6]">
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-[#9955ff7a] flex items-center justify-center">
                                    <img class="relative bottom-1" src="{{ asset('images/logo-kurikulum(ungu).png') }}"
                                        alt="">
                                </div>
                                <div>
                                    <p class="text-[#5100C6] font-semibold text-sm">Kurikulum</p>
                                    <h1 class="text-[40px] font-extrabold text-[#5100C6] leading-none">
                                        {{ $jumlahKurikulum }}
                                    </h1>
                                </div>
                            </div>
                        </div>

                        {{-- Mata Kuliah --}}
                        <div
                            class="bg-white rounded-[24px] p-5 border border-[#FFD9F7] shadow-[#a900c760] shadow-lg relative overflow-hidden">
                            <div
                                class="absolute right-0 top-4 w-[8px] h-[75px] rounded-l-full bg-gradient-to-b from-[#E555FF] to-[#A900C7]">
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-full bg-[#e555ff6d] flex items-center justify-center">
                                    <img src="{{ asset('images/logo-matakuliah(ungu).png') }}" alt="">
                                </div>
                                <div>
                                    <p class="text-[#A900C7] font-semibold text-sm">Mata Kuliah</p>
                                    <h1 class="text-[40px] font-extrabold text-[#A900C7] leading-none">
                                        {{ $jumlahMatakuliah }}
                                    </h1>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- ── CHART + KATEGORI ── --}}
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                        {{-- Diagram SKS per Semester --}}
                        <div class="lg:col-span-2 bg-white p-5 rounded-2xl shadow-sm flex flex-col items-center">
                            <h4 class="text-xs font-bold text-[#1E293B] mb-6 text-center w-full">Jumlah SKS per semester
                            </h4>

                            @if($kurikulumAktif && count($sksPerSemester))
                                @php
                                    $maxSks = max($sksPerSemester) ?: 1;
                                    $barColors = [
                                        1 => ['from-[#0052D4]', 'to-[#4364F7]', 'text-blue-600'],
                                        2 => ['from-[#0052D4]', 'to-[#4364F7]', 'text-blue-600'],
                                        3 => ['from-[#7928CA]', 'to-[#B800FF]', 'text-purple-600'],
                                        4 => ['from-[#7928CA]', 'to-[#B800FF]', 'text-purple-600'],
                                        5 => ['from-[#7928CA]', 'to-[#B800FF]', 'text-purple-600'],
                                        6 => ['from-[#FF0080]', 'to-[#FF007F]', 'text-pink-500'],
                                        7 => ['from-[#FF0080]', 'to-[#FF758C]', 'text-pink-500'],
                                        8 => ['from-[#FF0080]', 'to-[#FF758C]', 'text-pink-500'],
                                    ];
                                @endphp
                                <div
                                    class="flex items-end justify-between w-full px-4 h-36 border-b border-gray-100 pb-2 relative">
                                    {{-- Y-axis label --}}
                                    <div class="absolute left-0 top-0 bottom-8 flex items-center">
                                        <div
                                            class="border border-[#3700E9] text-[#3700E9] p-1 rounded-xl flex flex-col items-center justify-center gap-1 h-full w-8">
                                            <span class="text-[14px]">🎓</span>
                                            <span
                                                class="text-[8px] font-bold uppercase tracking-widest [writing-mode:vertical-lr] rotate-180">Jumlah
                                                SKS</span>
                                        </div>
                                    </div>

                                    @foreach($sksPerSemester as $sem => $sks)
                                        @php
                                            $pct = $maxSks > 0 ? ($sks / $maxSks) : 0;
                                            $px = max(8, intval($pct * 96)); // max h-24 = 96px
                                            $colors = $barColors[$sem] ?? ['from-[#0052D4]', 'to-[#4364F7]', 'text-blue-600'];
                                        @endphp
                                        <div class="flex flex-col items-center gap-1 {{ $sem === 1 ? 'ml-8' : '' }}"
                                            style="flex:1">
                                            <span class="text-[9px] font-bold {{ $colors[2] }}">{{ $sks }} SKS</span>
                                            <div class="w-5 bg-gradient-to-t {{ $colors[0] }} {{ $colors[1] }} rounded-full"
                                                style="height: {{ $px }}px;"></div>
                                            <span class="text-[8px] font-medium text-gray-400 mt-1">Sem {{ $sem }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="flex items-center justify-center h-36 text-gray-400 text-xs italic">
                                    Belum ada kurikulum aktif.
                                </div>
                            @endif
                        </div>

                        {{-- Kategori Matakuliah --}}
                        <div class="bg-white p-5 rounded-2xl shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-4">
                                    <h4 class="text-xs font-bold text-[#1E293B]">Matakuliah</h4>
                                    <span class="text-[10px] text-gray-400 font-medium">jumlah
                                        {{ $jumlahMatakuliah }}</span>
                                </div>

                                @php
                                    $katConfig = [
                                        'langsung' => ['label' => 'Langsung', 'from' => 'from-[#0052D4]', 'to' => 'to-[#4364F7]'],
                                        'pendukung' => ['label' => 'Pendukung', 'from' => 'from-[#7928CA]', 'to' => 'to-[#B800FF]'],
                                        'tidak langsung' => ['label' => 'Tidak Langsung', 'from' => 'from-[#FF0080]', 'to' => 'to-[#FF758C]'],
                                    ];
                                    $maxKat = max(array_values($kategoriMatakuliah)) ?: 1;
                                @endphp

                                <div class="space-y-3.5">
                                    @foreach($katConfig as $key => $cfg)
                                        @php
                                            $jumlah = $kategoriMatakuliah[$key] ?? 0;
                                            $pct = $jumlahMatakuliah > 0 ? ($jumlah / $jumlahMatakuliah * 100) : 0;
                                        @endphp
                                        <div class="flex items-center justify-between gap-2 text-xs">
                                            <span
                                                class="w-24 text-gray-600 font-medium text-[11px]">{{ $cfg['label'] }}</span>
                                            <div class="flex-1 bg-gray-100 h-6 rounded-lg overflow-hidden">
                                                <div class="bg-gradient-to-r {{ $cfg['from'] }} {{ $cfg['to'] }} h-full rounded-lg"
                                                    style="width: {{ $pct }}%"></div>
                                            </div>
                                            <span class="w-6 text-right font-semibold text-gray-700">{{ $jumlah }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- ── KURIKULUM ACCORDION ── --}}
                    <div class="bg-white p-5 rounded-2xl shadow-lg">
                        <div class="flex flex-col md:flex-row items-center gap-3 md:justify-between">
                            <div></div>
                            <h1
                                class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent mx-auto">
                                Kurikulum
                                @if($kurikulumAktif)
                                    <span
                                        class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent mx-auto">{{ $kurikulumAktif->nama_kurikulum }}</span>
                                @endif
                            </h1>
                            <a href="/admin/kurikulum"
                                class="px-4 py-2 w-full md:w-auto  bg-gradient-to-r from-[#0282FD] to-[#3502CA] hover:scale-110 text-white rounded-full transition flex justify-center items-center gap-1 text-sm">
                                Selengkapnya
                                <img class="w-5 h-5" src="{{ asset('images/panah1.png') }}" alt="">
                            </a>
                        </div>

                        @if($kurikulumAktif && count($semesterData))
                            <div class="space-y-4">
                                @foreach($semesterData as $semester => $details)
                                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                        <div onclick="toggleSemester(this)"
                                            class="flex justify-between items-center cursor-pointer">
                                            <span class="tracking-widest font-bold text-[#001286]">SEMESTER
                                                {{ $semester }}</span>
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
                                                            <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                                <th rowspan="2" class="p-2">No</th>
                                                                <th rowspan="2" class="p-2">Kode</th>
                                                                <th rowspan="2" class="p-2 text-left">Nama</th>
                                                                <th rowspan="2" class="p-2">SKS</th>
                                                                <th colspan="2" class="p-2">Bobot SKS</th>
                                                                <th colspan="2" class="p-2">Jam/Sesi</th>
                                                                <th rowspan="2" class="p-2">Kategori</th>
                                                                <th rowspan="2" class="p-2">Silabus</th>
                                                            </tr>
                                                            <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                                <th class="p-1">T</th>
                                                                <th class="p-1">P</th>
                                                                <th class="p-1">T</th>
                                                                <th class="p-1">P</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($details as $idx => $detail)
                                                                <tr
                                                                    class="text-[10px] text-center border-t border-gray-100 hover:bg-blue-50">
                                                                    <td class="p-2">{{ $idx + 1 }}</td>
                                                                    <td class="p-2">{{ $detail->matakuliah->kode_matkul }}</td>
                                                                    <td class="p-2 text-left">{{ $detail->matakuliah->nama_matkul }}
                                                                    </td>
                                                                    <td class="p-2">{{ $detail->sks }}</td>
                                                                    <td class="p-2">{{ $detail->bobot_teori ?? '-' }}</td>
                                                                    <td class="p-2">{{ $detail->bobot_praktikum ?? '-' }}</td>
                                                                    <td class="p-2">{{ $detail->sesi_teori ?? '-' }}</td>
                                                                    <td class="p-2">{{ $detail->sesi_praktikum ?? '-' }}</td>
                                                                    <td class="p-2 capitalize">{{ $detail->status_matkul }}</td>
                                                                    <td class="p-2 flex justify-center items-center">
                                                                        @if($detail->silabus)
                                                                            <img src="{{ asset('images/silabus.png') }}"
                                                                                class="cursor-pointer w-4 sm:w-5"
                                                                                onclick='openModalSilabus({
                                                                                                                                                    "nama_matkul":   "{{ addslashes($detail->matakuliah->nama_matkul) }}",
                                                                                                                                                    "kode_matkul":   "{{ $detail->matakuliah->kode_matkul }}",
                                                                                                                                                    "sks":           "{{ $detail->sks }}",
                                                                                                                                                    "deskripsi":     "{{ addslashes($detail->silabus->deskripsi ?? '') }}",
                                                                                                                                                    "cpm":           "{{ addslashes($detail->silabus->cpm ?? '') }}",
                                                                                                                                                    "cpk":           "{{ addslashes($detail->silabus->cpk ?? '') }}",
                                                                                                                                                    "bahan_pustaka": "{{ addslashes($detail->silabus->bahan_pustaka ?? '') }}",
                                                                                                                                                    "file_rps":      "{{ $detail->silabus->file_rps ?? '' }}"
                                                                                                                                                })'>
                                                                        @else
                                                                            <span class="text-gray-300 text-[10px]">—</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="10"
                                                                        class="p-4 text-center text-gray-400 italic text-xs">
                                                                        Belum ada matakuliah untuk semester ini.
                                                                    </td>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center text-gray-400 italic text-sm py-8">
                                Belum ada kurikulum aktif. Buat kurikulum di halaman
                                <a href="/admin/kurikulum" class="text-blue-500 underline">Kurikulum</a>.
                            </div>
                        @endif
                    </div>

                    {{-- ── MODAL SILABUS (read-only di dashboard) ── --}}
                    <div id="modalSilabus"
                        class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50 p-3">
                        <div
                            class="w-full max-w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                            <div class="flex justify-center items-center py-3 relative border-b">
                                <h2 class="text-base sm:text-lg font-semibold text-[#1B4597]">Silabus</h2>
                                <button onclick="closeModalSilabus()"
                                    class="absolute right-3 sm:right-4 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm cursor-pointer">✕</button>
                            </div>

                            <div class="p-3 sm:p-5 overflow-y-auto max-h-[75vh]">
                                <div class="overflow-x-auto">
                                    <table
                                        class="w-full min-w-[500px] border border-gray-400 border-collapse text-xs sm:text-sm">
                                        <tr>
                                            <td class="border p-2 w-[140px] font-medium">Mata Kuliah</td>
                                            <td class="border p-2 w-[20px] text-center">:</td>
                                            <td class="border p-2 font-semibold" id="silabus-nama-mk"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">Kode</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2" id="silabus-kode"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">SKS</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2" id="silabus-sks"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">Deskripsi Mata Kuliah</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2 whitespace-pre-line" id="silabus-deskripsi"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">Capaian Pembelajaran Umum</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2 whitespace-pre-line" id="silabus-cpm"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">Capaian Pembelajaran Khusus</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2 whitespace-pre-line" id="silabus-cpk"></td>
                                        </tr>
                                        <tr>
                                            <td class="border p-2 font-medium">Daftar Pustaka</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2 whitespace-pre-line" id="silabus-bahan-pustaka"></td>
                                        </tr>
                                        <tr id="silabus-rps-row">
                                            <td class="border p-2 font-medium">Rencana Pembelajaran Semester</td>
                                            <td class="border p-2 text-center">:</td>
                                            <td class="border p-2" id="silabus-rps-cell"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        </main>

    </body>

    <script>
        // ── Toggle Semester Accordion ──────────────────────────────
        function toggleSemester(el) {
            const parent = el.parentElement;
            const content = parent.querySelector('.content');
            const arrow = parent.querySelector('.arrow');
            content.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }

        // ── Modal Silabus (read-only) ──────────────────────────────
        function openModalSilabus(data) {
            document.getElementById('silabus-nama-mk').textContent = data.nama_matkul || '—';
            document.getElementById('silabus-kode').textContent = data.kode_matkul || '—';
            document.getElementById('silabus-sks').textContent = data.sks || '—';
            document.getElementById('silabus-deskripsi').textContent = data.deskripsi || '—';
            document.getElementById('silabus-cpm').textContent = data.cpm || '—';
            document.getElementById('silabus-cpk').textContent = data.cpk || '—';
            document.getElementById('silabus-bahan-pustaka').textContent = data.bahan_pustaka || '—';

            const rpsCell = document.getElementById('silabus-rps-cell');
            if (data.file_rps) {
                rpsCell.innerHTML = `
                    <a href="/storage/${data.file_rps}" target="_blank"
                        class="flex items-center gap-2 border rounded-lg p-2 w-fit hover:bg-blue-50 transition">
                        <img src="{{ asset('images/silabus.png') }}" class="w-5">
                        <div>
                            <p class="text-xs font-medium">RPS.pdf</p>
                            <p class="text-[10px] text-gray-500">Klik untuk melihat</p>
                        </div>
                    </a>`;
            } else {
                rpsCell.textContent = '—';
            }

            const modal = document.getElementById('modalSilabus');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModalSilabus() {
            const modal = document.getElementById('modalSilabus');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Tutup modal klik backdrop
        document.getElementById('modalSilabus').addEventListener('click', function (e) {
            if (e.target === this) closeModalSilabus();
        });
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


        function toggleProfileCard() {
            document
                .getElementById('profileCard')
                .classList
                .toggle('hidden');
        }



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

</x-layout.layout>