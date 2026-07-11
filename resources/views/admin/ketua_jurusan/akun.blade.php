<x-layout.layout>

    <x-slot:title>Kelola Akun</x-slot:title>

    <body class="font-montserrat min-h-screen bg-cover bg-center bg-no-repeat bg-fixed"
        style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-screen p-4 md:p-6 space-y-5 lg:ml-72">

            <x-admin.header>
                <div class="font-bold">Kelola Akun</div>
            </x-admin.header>

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">

                <form method="GET" action="{{ route('admin.akun.index') }}" class="w-full md:w-auto flex-1 max-w-md">
                    <div class="flex items-center gap-2">

                        <div class="relative flex-1 min-w-0">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" name="search" value="{{ $search }}" placeholder="Cari nama pengelola..."
                                class="w-full pl-9 pr-4 py-2.5 text-sm border border-gray-300 rounded-2xl bg-white focus:outline-none text-gray-700 shadow-sm">
                        </div>

                        <button type="submit"
                            class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white text-sm font-semibold rounded-xl hover:opacity-90 transition shadow-sm cursor-pointer whitespace-nowrap shrink-0">
                            Cari
                        </button>

                        @if($search)
                            <a href="{{ route('admin.akun.index') }}"
                                class="px-4 py-2.5 text-sm text-purple-600 border border-purple-200 rounded-2xl bg-white hover:bg-purple-50 transition shrink-0">
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
                                <th class="px-4 py-3 text-left text-[15px] font-semibold text-purple-600">
                                    Nama
                                </th>
                                <th class="px-4 py-3 text-left text-[15px] font-semibold text-purple-600">
                                    NIP
                                </th>
                                <th class="px-4 py-3 text-left text-[15px] font-semibold text-purple-600">
                                    Email
                                </th>
                                <th class="px-4 py-3 text-left text-[15px] font-semibold text-purple-600">
                                    Prodi
                                </th>
                                <th class="px-8 py-3 text-left text-[15px] font-semibold text-purple-600">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse($akuns as $akun)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3 text-xs text-gray-700 break-all">
                                        {{ $akun->nama }}
                                    </td>
                                    <td class="px-4 py-3 text-xs text-gray-700 break-all">
                                        {{ $akun->nip }}
                                    </td>
                                    <td class="px-4 py-3 text-xs text-gray-700 break-all">
                                        {{ $akun->email }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <span
                                            class="bg-blue-100 text-blue-700 text-[10px] md:text-xs font-semibold px-2 py-1 rounded-lg">
                                            {{ $akun->prodis->nama_prodi }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 flex gap-2">
                                        <button
                                            onclick="openEditModal(this,'{{ $akun->id_user }}','{{ $akun->nama }}','{{ $akun->nip }}','{{ $akun->email}}','{{ $akun->prodis->id_prodi }}','{{ $akun->prodis->nama_prodi }}')"
                                            class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all">
                                            <img src="{{ asset('images/icon-edit(ungu).svg') }}" alt="Edit"
                                                class="w-4 h-4 md:w-5 md:h-5">
                                        </button>
                                        <button onclick="hapusData('{{ $akun->id_user }}')"
                                            class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg cursor-pointer hover:scale-[1.025] transition-all">
                                            <img src="{{ asset('images/icon-hapus(ungu).svg') }}" alt="Hapus"
                                                class="w-5 h-5 md:w-6 md:h-6">
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-gray-400 italic py-8 text-md">
                                        @if($search)
                                            Tidak ada akun pengelola yang cocok dengan pencarian
                                            "<strong>{{ $search }}</strong>".
                                        @else
                                            Belum ada data akun pengelola. Klik <strong>Tambah</strong> untuk menambahkan.
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Pagination --}}
            @if($akuns->hasPages())
                <div class="flex justify-center items-center gap-1 mt-1 flex-wrap ">
                    {{-- Prev --}}
                    @if($akuns->onFirstPage())
                        <span
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">
                            &laquo;
                        </span>
                    @else
                        <a href="{{ $akuns->previousPageUrl() }}"
                            class="px-3 py-1.5 rounded-lg text-sm text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                            &laquo;
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach($akuns->getUrlRange(1, $akuns->lastPage()) as $page => $url)
                        @if($page == $akuns->currentPage())
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
                    @if($akuns->hasMorePages())
                        <a href="{{ $akuns->nextPageUrl() }}"
                            class="px-3 py-1.5 rounded-lg text-xs text-gray-600 bg-white border border-gray-300 hover:bg-gray-50 transition">
                            &raquo;
                        </a>
                    @else
                        <span
                            class="px-3 py-1.5 rounded-lg text-xs text-gray-300 bg-white border border-gray-300 cursor-not-allowed select-none">
                            &raquo;
                        </span>
                    @endif
                </div>

                <p class="text-center text-xs text-gray-400">
                    Menampilkan {{ $akuns->firstItem() }}–{{ $akuns->lastItem() }}
                    dari {{ $akuns->total() }} akun pengelola
                </p>
            @endif
        </main>

        {{-- Modal Tambah --}}
        <div id="tambahmodal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[95%] max-w-[400px] rounded-2xl bg-white p-6 shadow-xl relative **:focus:outline-none">
                <button onclick="closeTambahModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600 cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-bold text-[#1B4597]">
                    Tambah Akun Tim Kurikulum
                </h2>

                <div class="max-w-lg text-sm">
                    <form action="{{ route('admin.akun.store') }}" method="POST">
                        @csrf
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                placeholder="Masukkan Nama Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="nip">
                            <span>NIP</span>
                            <input type="number" name="nip" id="nip" value="{{ old('nip') }}"
                                placeholder="Masukkan NIP Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="email">
                            <span>Email</span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="Masukkan e-mail Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="id_prodi">
                            <span>Program Studi</span>
                            <select name="id_prodi" id="id_prodi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                                <option value="">Pilih Program Studi yang di kelola</option>
                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id_prodi }}">
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <label for="password">
                            <span>Password</span>
                            <input type="password" name="password" id="password"
                                placeholder="Masukkan Password Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="password_confirmation">
                            <span>konfirmasi Password</span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Konfirmasi Password"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <input type="hidden" name="role" value="tim_kurikulum">

                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mt-4 rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white font-semibold hover:scale-[1.025] transition-all hover:opacity-90 cursor-pointer">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Modal Edit --}}
        <div id="modaledit" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[95%] max-w-[400px] rounded-2xl bg-white p-6 shadow-xl relative **:focus:outline-none">
                <button onclick="closeEditModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600 cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-bold text-[#1B4597]">
                    Ubah Akun Pengelola
                </h2>

                <div class="max-w-lg text-sm">
                    <form id="formEdit" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="editnama">
                            <span>Nama</span>
                            <input type="text" id="editnama" name="nama"
                                class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="editnip">
                            <span>NIP</span>
                            <input type="number" id="editnip" name="nip"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="editemail">
                            <span>Email</span>
                            <input type="email" id="editemail" name="email"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                        </label>

                        <label for="editprodi">
                            <span>Program Studi</span>
                            <select name="id_prodi" id="id_prodi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                required>
                                <option value="" id="selected_prodi"></option>
                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id_prodi }}">
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white font-semibold hover:scale-[1.025] transition-all hover:opacity-90 mt-4">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Hapus --}}
        @foreach ($akuns as $akun)

            <form id="deleteForm{{ $akun->id_user }}" action="{{ route('admin.akun.destroy', $akun->id_user) }}"
                method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>

        @endforeach

        <script src="{{ asset('js/akun.js') }}"></script>
    </body>

</x-layout.layout>