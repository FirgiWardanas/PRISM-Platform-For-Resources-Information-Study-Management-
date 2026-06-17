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
            <x-admin.header>Program Studi</x-admin.header>

            <div class="flex justify-end">
                <button onclick="openTambahModal()"
                    class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                    Tambah +
                </button>
            </div>



            <!-- LIST CARD -->
            <div class="space-y-4">
                @if(session('pesan'))
                    <div class="mb-4 rounded bg-green-100 p-3 text-green-700">
                        {{ session('pesan') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-3">
                        {{ session('error') }}
                    </div>
                @endif

                
                <form method="GET" action="{{ route('admin.program-studi.index') }}" 
                    class="flex items-center gap-3 mb-5">
                    
                    <div class="relative flex-1 max-w-md">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-purple-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                        <input 
                            type="text" 
                            name="search" 
                            value="{{ $search }}" 
                            placeholder="Cari prodi atau kode prodi..."
                            class="w-full pl-9 pr-4 py-2.5 text-sm border border-purple-200 rounded-xl 
                                bg-white focus:outline-none focus:ring-2 focus:ring-purple-300 
                                text-gray-700 shadow-sm"
                        >
                    </div>

                    <button type="submit"
                        class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-500 
                            to-purple-500 text-white text-sm font-semibold rounded-xl 
                            hover:opacity-90 transition shadow-sm">
                        Cari
                    </button>

                    @if($search)
                        <a href="{{ route('admin.program-studi.index') }}"
                        class="px-4 py-2.5 text-sm text-purple-600 border border-purple-200 
                                rounded-xl bg-white hover:bg-purple-50 transition">
                            Reset
                        </a>
                    @endif
                </form>

<div class="bg-white rounded-3xl shadow-xl p-6 border border-gray-300">
    <div class="overflow-x-auto overflow-y-auto max-h-[70vh]">

        <table class="w-full">
            <thead class="sticky top-0 bg-white">
                <tr>
                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                        Kode
                    </th>
                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                        Nama Prodi
                    </th>
                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                        Jenjang
                    </th>
                    <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                        Status
                    </th>
                    <th class="px-8 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @foreach ($prodi as $p)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-sm text-gray-700">
                            {{ $p->kode_prodi }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-700">
                            {{ $p->nama_prodi }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-700">
                            {{ $p->jenjang }}
                        </td>

                        <td class="px-4 py-3">
                            <span
                                class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-lg">
                                {{ $p->status_prodi }}
                            </span>
                        </td>

                        <td class="px-4 py-3 flex gap-2">
                            <button
                                onclick="openEditModal(this,
                                    '{{ $p->id_prodi }}',
                                    '{{ $p->kode_prodi }}',
                                    '{{ $p->nama_prodi }}',
                                    '{{ $p->jenjang }}')"
                                class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all">

                                <img src="{{ asset('images/icon-edit(ungu).svg') }}"
                                    class="w-5 h-5" alt="">
                            </button>

                            <button
                                onclick="hapusData('{{ $p->id_prodi }}')"
                                class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all ">

                                <img src="{{ asset('images/icon-hapus(ungu).svg') }}"
                                    class="w-6 h-6" alt="">
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- Pagination --}}
    <div class="border-t border-gray-100 mt-4 pt-4">
        {{ $prodi->withQueryString()->links() }}
    </div>
</div>




            </div>

        </main>




        </div>


        <!--tambahModal-->
        <div id="tambahmodal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeTambahModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
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
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
                        </label>

                        <!-- NAMA -->
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" name="nama_prodi" id="nama" value="{{ old('nama_prodi') }}"
                                placeholder="Masukkan nama Program Studi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
                        </label>

                        <!-- JENJANG -->
                        <label for="jenjang">
                            <span>Jenjang</span>
                            <select name="jenjang"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
                                <option value="D4" {{ old('jenjang') == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="D3" {{ old('jenjang') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D2" {{ old('jenjang') == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D1" {{ old('jenjang') == 'D1' ? 'selected' : '' }}>D1</option>
                            </select>
                        </label>

                        <input type="hidden" name="id_jurusan" value="1">


                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white hover:scale-[1.025] transition-all hover:opacity-90">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!--modalEdit-->
        <div id="modaledit" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeEditModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
                    Ubah Program Studi
                </h2>

                <div class="max-w-lg text-sm">
                    <form id="formEdit" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="email">
                            <span>Kode</span>
                            <input type="text" id="editkode" name="kode_prodi" placeholder="Masukkan kode program studi"
                                class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
                        </label>
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" id="editnama" name="nama_prodi" placeholder="Masukkan nama Program Studi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
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
                                    class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white hover:scale-[1.025] transition-all hover:opacity-90">
                                    Simpan
                                </button>
                            </div>
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


    </body>
    <script src="{{ asset('js/program-studi.js') }}"></script>
</x-layout.layout>