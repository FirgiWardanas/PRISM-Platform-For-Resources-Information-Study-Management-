<x-layout.layout>
    <x-slot:title>Program Studi</x-slot:title>

    <body class="font-montserrat min-h-screen bg-cover bg-center bg-no-repeat bg-fixed"
        style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-screen p-4 md:p-6 space-y-5 lg:ml-72">

            <x-admin.header>
                <div class="font-bold">Program Studi</div>
            </x-admin.header>

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">

                <form method="GET" action="{{ route('admin.program-studi.index') }}"
                    class="w-full md:w-auto flex-1 max-w-md">

                    <div class="flex items-center gap-2">

                        <div class="relative flex-1 min-w-0">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-purple-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" name="search" value="{{ $search }}"
                                placeholder="Cari prodi atau kode prodi..."
                                class="w-full pl-9 pr-4 py-2.5 text-sm border border-gray-300 rounded-2xl bg-white focus:outline-none text-gray-700 shadow-sm">
                        </div>

                        <button type="submit"
                            class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white text-sm font-semibold rounded-xl hover:opacity-90 transition shadow-sm cursor-pointer whitespace-nowrap">
                            Cari
                        </button>

                        @if($search)
                            <a href="{{ route('admin.program-studi.index') }}"
                                class="px-4 py-2.5 text-sm text-purple-600 border border-purple-200 rounded-2xl bg-white hover:bg-purple-50 transition">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>

                <div class="w-full md:w-auto shrink-0 flex justify-end">
                    <button onclick="openTambahModal()"
                         class="w-auto bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-0.5 cursor-pointer whitespace-nowrap hover:scale-[1.025] transition-all hover:opacity-90">
                            Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-4 w-4">
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-xl p-6 border border-gray-300 w-full">

                <div class="overflow-x-auto w-full">
                    <table class="w-full border-collapse">
                        <thead class="bg-white border-b border-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs md:text-[15px] font-semibold text-purple-600">
                                    Kode
                                </th>
                                <th class="px-4 py-3 text-left text-xs md:text-[15px] font-semibold text-purple-600">
                                    Nama Prodi
                                </th>
                                <th class="px-4 py-3 text-left text-xs md:text-[15px] font-semibold text-purple-600">
                                    Jenjang
                                </th>
                                <th class="px-4 py-3 text-left text-xs md:text-[15px] font-semibold text-purple-600">
                                    Status
                                </th>
                                <th class="px-8 py-3 text-left text-xs md:text-[15px] font-semibold text-purple-600">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($prodi as $p)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3 text-xs text-gray-700">
                                        {{ $p->kode_prodi }}
                                    </td>

                                    <td class="px-4 py-3 text-xs text-gray-700">
                                        {{ $p->nama_prodi }}
                                    </td>

                                    <td class="px-4 py-3 text-xs text-gray-700">
                                        {{ $p->jenjang }}
                                    </td>

                                    <td class="px-4 py-3">
                                        <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-lg">
                                            {{ $p->status_prodi }}
                                        </span>
                                    </td>

                                    <td class="px-4 py-3 flex gap-2">
                                        <button onclick="openEditModal(this,
                                        '{{ $p->id_prodi }}',
                                        '{{ $p->kode_prodi }}',
                                        '{{ $p->nama_prodi }}',
                                        '{{ $p->jenjang }}')"
                                            class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all">
                                            <img src="{{ asset('images/icon-edit(ungu).svg') }}" class="w-5 h-5" alt="">
                                        </button>

                                        <button onclick="hapusData('{{ $p->id_prodi }}')"
                                            class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all">
                                            <img src="{{ asset('images/icon-hapus(ungu).svg') }}" class="w-6 h-6" alt="">
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-gray-400 italic py-8 text-md">
                                        @if($search)
                                            Tidak ada program studi yang cocok dengan pencarian
                                            "<strong>{{ $search }}</strong>".
                                        @else
                                            Belum ada program studi. Klik <strong>Tambah</strong> untuk menambahkan.
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Pagination --}}
            @if($prodi->hasPages())
                <div class="flex justify-center items-center gap-1 flex-wrap ">
                    {{-- Prev --}}
                    @if($prodi->onFirstPage())
                        <span
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">
                            &laquo;
                        </span>
                    @else
                        <a href="{{ $prodi->previousPageUrl() }}"
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                            &laquo;
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach($prodi->getUrlRange(1, $prodi->lastPage()) as $page => $url)
                        @if($page == $prodi->currentPage())
                            <span
                                class="px-3 py-1.5 rounded-lg text-sm font-bold text-white bg-gradient-to-r from-[#0282FD] to-[#3502CA] shadow select-none">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next --}}
                    @if($prodi->hasMorePages())
                        <a href="{{ $prodi->nextPageUrl() }}"
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                            &raquo;
                        </a>
                    @else
                        <span
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">
                            &raquo;
                        </span>
                    @endif
                </div>

                <p class="text-center text-xs text-gray-400">
                    Menampilkan {{ $prodi->firstItem() }}–{{ $prodi->lastItem() }}
                    dari {{ $prodi->total() }} program studi
                </p>
            @endif
        </main>

        <!--Modal tambah-->
        <div id="tambahmodal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative **:focus:outline-none">
                <button onclick="closeTambahModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600 cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-bold text-[#1B4597]">
                    Tambah Progarm Studi
                </h2>

                <div class="max-w-lg text-sm">
                    <form action="{{ route('admin.program-studi.store') }}" method="POST">
                        @csrf

                        <!-- KODE -->
                        <label for="kode">
                            <span>Kode</span>
                            <input type="text" name="kode_prodi" id="Kode" value="{{ old('kode_prodi') }}"
                                placeholder="Masukkan kode program studi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <!-- NAMA -->
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" name="nama_prodi" id="nama" value="{{ old('nama_prodi') }}"
                                placeholder="Masukkan nama Program Studi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <!-- JENJANG -->
                        <label for="jenjang">
                            <span>Jenjang</span>
                            <select name="jenjang"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                                <option value="D4" {{ old('jenjang') == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="D3" {{ old('jenjang') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D2" {{ old('jenjang') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D1" {{ old('jenjang') == 'D1' ? 'selected' : '' }}>D1</option>
                            </select>
                        </label>

                        <input type="hidden" name="id_jurusan" value="1">

                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white text-base font-semibold hover:scale-[1.025] transition-all hover:opacity-90 mt-4 cursor-pointer">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal Edit-->
        <div id="modaledit" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative **:focus:outline-none">
                <button onclick="closeEditModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600 cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-bold text-[#1B4597]">
                    Ubah Program Studi
                </h2>

                <div class="max-w-lg text-sm">
                    <form id="formEdit" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="email">
                            <span>Kode</span>
                            <input type="text" id="editkode" name="kode_prodi" placeholder="Masukkan kode program studi"
                                class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" id="editnama" name="nama_prodi" placeholder="Masukkan nama Program Studi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>
                        <label for="jenjang">
                            <span>Jenjang</span>
                            <select id="editjenjang" name="jenjang"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                id="editjenjang">
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                                <option value="D2">D2</option>
                                <option value="D1">D1</option>
                            </select>

                            <div class="flex justify-center">
                                <button type="submit"
                                    class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white text-base font-semibold hover:scale-[1.025] transition-all hover:opacity-90 mt-4">
                                    Simpan
                                </button>
                            </div>
                        </label>
                    </form>
                </div>
            </div>
        </div>

        {{-- DELETE --}}
        @foreach ($prodi as $p)

            <form id="deleteForm{{ $p->id_prodi }}" action="{{ route('admin.program-studi.destroy', $p->id_prodi) }}"
                method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>

        @endforeach

        <script src="{{ asset('js/program-studi.js') }}"></script>
    </body>

</x-layout.layout>