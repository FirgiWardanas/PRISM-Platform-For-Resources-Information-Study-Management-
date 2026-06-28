<x-layout.layout>

    <body class="font-montserrat min-h-screen relative overflow-x-hidden bg-[#FCFCFF]">

        {{-- sidebar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main -->
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header_kurikulum>Mata kuliah</x-admin.header-kurikulum>

                {{-- Search + Tombol Tambah --}}
                <div class="flex flex-col sm:flex-row justify-between items-stretch sm:items-center gap-3 mb-4">
                    {{-- Search Bar --}}
                    <form method="GET" action="{{ route('admin.matakuliah.index') }}" class="flex-1 max-w-sm">
                        <div class="flex items-center gap-2">
                            <div class="relative flex-1">
                                <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="M21 21l-4.35-4.35" />
                                    </svg>
                                </span>
                                <input type="text" name="search" value="{{ $search ?? '' }}"
                                    placeholder="Cari kode atau nama matakuliah..."
                                    class="w-full pl-9 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                            </div>
                            <button type="submit"
                                class="flex items-center gap-1 px-3 py-2 bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white text-sm rounded-lg shadow hover:opacity-90 hover:scale-[1.025] transition-all whitespace-nowrap cursor-pointer">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="M21 21l-4.35-4.35" />
                                </svg>
                                Cari
                            </button>
                        </div>
                    </form>

                    {{-- Tombol Tambah --}}
                    <button onclick="openTambahModal()"
                        class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow flex items-center gap-1 cursor-pointer whitespace-nowrap hover:scale-[1.025] transition-all hover:opacity-90 ">
                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-4 w-4">
                    </button>
                </div>




                <div class="space-y-3">
                    @forelse($matakuliahs as $mk)
                        <div class="bg-white rounded-xl p-4 shadow border border-gray-300">
                            {{-- desktop --}}
                            <div class="hidden md:flex justify-between items-center">
                                <div class="grid grid-cols-[120px_1fr] w-full">
                                    <p class="font-medium text-gray-600">{{ $mk->kode_matkul }}</p>
                                    <p>{{ $mk->nama_matkul }}</p>
                                </div>
                                <div class="flex items-center gap-3 ml-4">
                                    <img src="{{ asset('images/icon-edit.svg') }}"
                                        class="w-5 h-5 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90"
                                        onclick="openEditModal('{{ $mk->id_MK }}', '{{ addslashes($mk->kode_matkul) }}', '{{ addslashes($mk->nama_matkul) }}')"
                                        alt="edit">
                                    <img src="{{ asset('images/icon-hapus (merah).svg') }}"
                                        class="w-6 h-6 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90"
                                        onclick="hapusMatakuliah('{{ $mk->id_MK }}')" alt="hapus">
                                </div>
                            </div>

                            {{-- mobile --}}
                            <div class="md:hidden flex justify-between items-start">
                                <div>
                                    <p class="font-medium text-gray-600">{{ $mk->kode_matkul }}</p>
                                    <p class="mt-3">{{ $mk->nama_matkul }}</p>
                                </div>
                                <div class="flex items-center gap-3 ml-4">
                                    <img src="{{ asset('images/icon-edit.svg') }}" class="w-5 h-5 cursor-pointer"
                                        onclick="openEditModal('{{ $mk->id_MK }}', '{{ addslashes($mk->kode_matkul) }}', '{{ addslashes($mk->nama_matkul) }}')"
                                        alt="edit">
                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-6 h-6 cursor-pointer"
                                        onclick="hapusMatakuliah('{{ $mk->id_MK }}')" alt="hapus">
                                </div>
                            </div>
                        </div>

                        {{-- Hidden delete form --}}
                        <form id="deleteForm_{{ $mk->id_MK }}" action="{{ route('admin.matakuliah.destroy', $mk->id_MK) }}"
                            method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    @empty
                        <div class="text-center text-gray-400 italic text-sm py-8">
                            @if($search)
                                Tidak ada matakuliah yang cocok dengan pencarian "<strong>{{ $search }}</strong>".
                            @else
                                Belum ada matakuliah. Klik <strong>Tambah</strong> untuk menambahkan.
                            @endif
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if($matakuliahs->hasPages())
                    <div class="flex justify-center items-center gap-1 mt-6 flex-wrap">
                        {{-- Prev --}}
                        @if($matakuliahs->onFirstPage())
                            <span
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-200 cursor-not-allowed select-none">
                                &laquo;
                            </span>
                        @else
                            <a href="{{ $matakuliahs->previousPageUrl() }}"
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition">
                                &laquo;
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach($matakuliahs->getUrlRange(1, $matakuliahs->lastPage()) as $page => $url)
                            @if($page == $matakuliahs->currentPage())
                                <span
                                    class="px-3 py-1.5 rounded-lg text-sm font-bold text-white bg-gradient-to-r from-[#0282FD] to-[#3502CA] shadow select-none">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach

                        {{-- Next --}}
                        @if($matakuliahs->hasMorePages())
                            <a href="{{ $matakuliahs->nextPageUrl() }}"
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 transition">
                                &raquo;
                            </a>
                        @else
                            <span
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-200 cursor-not-allowed select-none">
                                &raquo;
                            </span>
                        @endif
                    </div>

                    {{-- Info halaman --}}
                    <p class="text-center text-xs text-gray-400 mt-2">
                        Menampilkan {{ $matakuliahs->firstItem() }}–{{ $matakuliahs->lastItem() }}
                        dari {{ $matakuliahs->total() }} matakuliah
                    </p>
                @endif

        </main>


        {{-- Modal Tambah --}}
        <div id="modalTambah" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
            <div class="w-[90%] max-w-[460px] bg-white rounded-2xl p-5 sm:p-8 shadow-xl relative">
                <button onclick="closeTambahModal()"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-700">✕</button>
                <h2 class="text-center text-lg font-bold text-[#1B4597] mb-6">Tambah Matakuliah</h2>
                <form action="{{ route('admin.matakuliah.store') }}" method="POST">
                    @csrf

                    <div class="space-y-4 text-sm">

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Kode</span>
                            <input type="text" name="kode_matkul" placeholder="Masukkan kode matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                                >
                        </label>

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Nama</span>
                            <input type="text" name="nama_matkul" placeholder="Masukkan nama matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                                >
                        </label>
                    </div>

                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="px-10 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Modal Edit --}}
        <div id="modalEdit" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
            <div class="w-[90%] max-w-[460px] bg-white rounded-2xl p-5 sm:p-8 shadow-xl relative">
                <button onclick="closeEditModal()"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-700">✕</button>
                <h2 class="text-center text-lg font-bold text-[#1B4597] mb-6">Edit Matakuliah</h2>
                <form id="formEdit" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="space-y-4 text-sm">

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Kode</span>
                            <input type="text" name="kode_matkul" id="editKode" placeholder="Masukkan kode matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                                >
                        </label>

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Nama</span>
                            <input type="text" name="nama_matkul" id="editNama" placeholder="Masukkan nama matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                                >
                        </label>

                    </div>

                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="px-10 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
        <script src="{{ asset('js/matakuliah.js') }}"></script>
</x-layout.layout>