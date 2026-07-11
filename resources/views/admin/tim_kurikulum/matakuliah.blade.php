<x-layout.layout>

    <x-slot:title>Matakuliah</x-slot:title>

    <body class="font-montserrat min-h-screen bg-cover bg-center bg-no-repeat bg-fixed"
        style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main -->
        <main class="flex-1 flex flex-col h-screen p-4 md:p-6 space-y-4 lg:ml-72 overflow-hidden">
            {{-- header --}}
            <x-admin.header_kurikulum>
                <div class="font-bold">Mata kuliah</div>
                </x-admin.header-kurikulum>

                <div class="flex flex-col sm:flex-row justify-between items-stretch sm:items-center gap-3">

                    <form method="GET" action="{{ route('admin.matakuliah.index') }}"
                        class="w-full md:w-auto flex-1 max-w-md">

                        <div class="flex items-center gap-2">

                            <div class="relative flex-1 min-w-0">

                                <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="M21 21l-4.35-4.35" />
                                    </svg>
                                </span>
                                <input type="text" name="search" value="{{ $search ?? '' }}"
                                    placeholder="Cari kode atau nama matakuliah..."
                                    class="w-full pl-9 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none bg-white">
                            </div>
                            <button type="submit"
                                class="flex items-center gap-1 px-5 py-2.5 bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white text-sm font-semibold rounded-2xl shadow hover:opacity-90 hover:scale-[1.025] transition-all whitespace-nowrap cursor-pointer shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="M21 21l-4.35-4.35" />
                                </svg>
                                Cari
                            </button>

                            @if($search)
                                <a href="{{ route('admin.matakuliah.index') }}"
                                    class="px-5 py-2.5 text-sm font-semibold text-purple-600 border border-purple-200 rounded-2xl bg-white hover:bg-purple-50 transition shrink-0 shadow-sm block text-center">
                                    Reset
                                </a>
                            @endif

                        </div>
                    </form>

                    <div class="flex justify-end sm:block">

                        <button onclick="openTambahModal()"
                            class="w-auto bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 font-semibold rounded-lg shadow flex items-center gap-0.5 cursor-pointer whitespace-nowrap hover:scale-[1.025] transition-all hover:opacity-90">
                            Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-4 w-4">
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-xl p-6 border border-gray-300 w-full">

                    <div class="overflow-x-auto w-full">
                        <table class="w-full border-collapse">
                            <thead class="bg-white border-b border-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                                        Kode Mata Kuliah
                                    </th>
                                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                                        Nama Mata Kuliah
                                    </th>
                                    <th class="px-8 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-100">
                                @forelse($matakuliahs as $mk)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-3 text-sm text-gray-700 font-medium">
                                            {{ $mk->kode_matkul }}
                                        </td>

                                        <td class="px-4 py-3 text-sm text-gray-700 font-medium">
                                            {{ $mk->nama_matkul }}
                                        </td>

                                        <td class="px-4 py-3 flex gap-2">
                                            <button
                                                onclick="openEditModal('{{ $mk->id_MK }}','{{ addslashes($mk->kode_matkul) }}','{{ addslashes($mk->nama_matkul) }}')"
                                                class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg cursor-pointer">
                                                <img src="{{ asset('images/icon-edit(ungu).svg') }}" class="w-5 h-5"
                                                    alt="Edit">
                                            </button>

                                            <button onclick="hapusMatakuliah('{{ $mk->id_MK }}')"
                                                class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg cursor-pointer">
                                                <img src="{{ asset('images/icon-hapus(ungu).svg') }}" class="w-6 h-6"
                                                    alt="Hapus">
                                            </button>

                                            <form id="deleteForm_{{ $mk->id_MK }}"
                                                action="{{ route('admin.matakuliah.destroy', $mk->id_MK) }}" method="POST"
                                                class="hidden">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-gray-400 italic py-8">
                                            @if($search)
                                                Tidak ada mata kuliah yang cocok dengan pencarian
                                                "<strong>{{ $search }}</strong>".
                                            @else
                                                Belum ada mata kuliah. Klik <strong>Tambah</strong> untuk menambahkan.
                                            @endif
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Pagination --}}
                @if($matakuliahs->hasPages())
                    <div class="flex justify-center items-center gap-1 mt-2 flex-wrap">
                        {{-- Prev --}}
                        @if($matakuliahs->onFirstPage())
                            <span
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">&laquo;</span>
                        @else
                            <a href="{{ $matakuliahs->previousPageUrl() }}"
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">&laquo;</a>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($matakuliahs->onEachSide(1)->linkCollection() as $link)
                            @if ($link['label'] == '&laquo; Previous' || $link['label'] == 'Next &raquo;')
                                @continue
                            @endif

                            @if ($link['url'] === null)
                                <span class="px-3 py-1.5 text-gray-400">{{ $link['label'] }}</span>
                            @elseif ($link['active'])
                                <span
                                    class="px-3 py-1.5 rounded-lg text-sm font-bold text-white bg-gradient-to-r from-[#0282FD] to-[#3502CA] shadow select-none">
                                    {{ $link['label'] }}
                                </span>
                            @else
                                <a href="{{ $link['url'] }}"
                                    class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                                    {{ $link['label'] }}
                                </a>
                            @endif
                        @endforeach

                        {{-- Next --}}
                        @if($matakuliahs->hasMorePages())
                            <a href="{{ $matakuliahs->nextPageUrl() }}"
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">&raquo;</a>
                        @else
                            <span
                                class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">&raquo;</span>
                        @endif
                    </div>

                    <p class="text-center text-xs text-gray-400 mt-1">
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
                                class="w-full mt-1 px-4 py-2.5 border border-gray-300 shadow-md rounded-xl focus:outline-none">
                        </label>

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Nama</span>
                            <input type="text" name="nama_matkul" placeholder="Masukkan nama matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-300 shadow-md rounded-xl focus:outline-none">
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
                                class="w-full mt-1 px-4 py-2.5 border border-gray-300 shadow-md rounded-xl focus:outline-none ">
                        </label>

                        <label class="block">
                            <span class="font-semibold text-[#1B4597]">Nama</span>
                            <input type="text" name="nama_matkul" id="editNama" placeholder="Masukkan nama matakuliah"
                                class="w-full mt-1 px-4 py-2.5 border border-gray-300 shadow-md rounded-xl focus:outline-none ">
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

        <script src="{{ asset('js/matakuliah.js') }}"></script>

    </body>
</x-layout.layout>