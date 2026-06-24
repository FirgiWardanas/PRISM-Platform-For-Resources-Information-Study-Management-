<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>

            <!-- Content -->
            <div class="flex flex-col gap-3 sm:flex-row sm:justify-between sm:items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Akun</h2>
                <button onclick="openTambahModal()"
                    class="w-full sm:w-auto bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                    Tambah +
                </button>
            </div>

                <form method="GET" action="{{ route('admin.akun.index') }}" 
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
                            placeholder="Cari nama pengelola..."
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
                        <a href="{{ route('admin.akun.index') }}"
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
                                <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">Nama</th>
                                <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">NIP</th>
                                <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">Email</th>
                                <th class="px-4 py-3 text-left text-xs md:text-sm font-semibold text-purple-600">Prodi</th>
                                <th class="px-8 py-3 text-left text-xs md:text-sm font-semibold text-purple-600"> Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($akuns as $akun)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-700 break-all">{{ $akun->nama }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 break-all">{{ $akun->nip }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 break-all">{{ $akun->email}}</td>
                                    <td class="px-4 py-3">
                                        <span
                                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-lg">{{ $akun->prodis->nama_prodi }}</span>
                                    </td>
                                    <td class="px-4 py-3 flex gap-2">
                                        <button
                                            onclick="openEditModal(this,'{{ $akun->id_user }}','{{ $akun->nama }}','{{ $akun->nip }}','{{ $akun->email}}','{{ $akun->prodis->id_prodi }}','{{ $akun->prodis->nama_prodi }}')"
                                            class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg text-sm cursor-pointer">
                                            <img src="{{ asset('images/icon-edit(ungu).svg') }}" alt="" class="w-5 h-5"></button>
                                        <button onclick="hapusData('{{ $akun->id_user }}')"
                                            class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg text-sm cursor-pointer">
                                            <img src="{{ asset('images/icon-hapus(ungu).svg') }}" alt="" class="w-6 h-6"></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                                {{-- Pagination --}}
    <div class="border-t border-gray-100 mt-4 pt-4">
        {{ $akuns->withQueryString()->links() }}
    </div>
            </div>


</div>
        </main>


        {{-- MODAL --}}


        {{-- Tambah --}}
        <div id="tambahmodal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[95%] max-w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeTambahModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
                    Tambah Akun Tim Kurikulum
                </h2>

                <div class="max-w-lg text-sm">
                    <form action="{{ route('admin.akun.store') }}" method="POST">
                        @csrf
                        <!-- Nama -->
                        <label for="nama">
                            <span>Nama</span>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                placeholder="Masukkan Nama Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>


                        <!-- NIP -->
                        <label for="nip">
                            <span>NIP</span>
                            <input type="number" name="nip" id="nip" value="{{ old('nip') }}"
                                placeholder="Masukkan NIP Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                        <!-- email -->
                        <label for="email">
                            <span>Email</span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="Masukkan e-mail Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                        <!-- Program Studi -->
                        <label for="id_prodi">
                            <span>Program Studi</span>
                            <select name="id_prodi" id="id_prodi"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                                <option value="">Pilih Program Studi yang di kelola</option>
                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id_prodi }}">
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <!-- Password -->
                        <label for="password">
                            <span>Password</span>
                            <input type="password" name="password" id="password"
                                placeholder="Masukkan Password Pengelola"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                        <!-- Konfirmasi Password -->
                        <label for="password_confirmation">
                            <span>konfirmasi Password</span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Konfirmasi Password"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>


                        <input type="hidden" name="role" value="tim_kurikulum">


                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mt-4 rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white hover:scale-[1.025] transition-all hover:opacity-90">
                                Simpan
                            </button>
                        </div>


                    </form>

                </div>
            </div>
        </div>

        {{-- Edit --}}

        <div id="modaledit" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[95%] max-w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeEditModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
                    Edit Akun Pengelola
                </h2>

                <div class="max-w-lg text-sm">
                    <form id="formEdit" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="editnama">
                            <span>Nama</span>
                            <input type="text" id="editnama" name="nama"
                                class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                        <label for="editnip">
                            <span>NIP</span>
                            <input type="number" id="editnip" name="nip"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                        <label for="editemail">
                            <span>Email</span>
                            <input type="email" id="editemail" name="email"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
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
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white hover:scale-[1.025] transition-all hover:opacity-90">
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

    </body>
    <script src="{{ asset('js/akun.js') }}"></script>
</x-layout.layout>