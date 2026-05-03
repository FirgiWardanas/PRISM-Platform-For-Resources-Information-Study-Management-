<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>


                    <button onclick="openTambahModal()"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                        Tambah +
                    </button>
                </div>
            </div>

            <!-- LIST CARD -->
            <div class="space-y-4">
                                                        @if(session('pesan'))
    <div class="mb-4 rounded bg-green-100 p-3 text-green-700">
        {{ session('pesan') }}
    </div>
@endif
                
                @foreach ( $prodi as $p )
                
                <!-- CARD -->
                <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                    <div class="grid grid-cols-[100px_1fr_150px_100px] text-sm w-full">
                        <p>{{ $p->kode_prodi }}</p>
                        <p>{{ $p->nama_prodi }}</p>
                        <p>{{ $p->jenjang }}</p>
                        <p>{{ $p->status_prodi  }}</p>
                    </div>

                    <div class="flex gap-2 mr-6">
                        <button onclick="openEditModal(this,
                        '{{ $p->id_prodi }}',
                        '{{ $p->kode_prodi }}',
                        '{{ $p->nama_prodi }}',
                        '{{ $p->jenjang }}')"
                            class="bg-gradient-to-r from-[#4863E6] to-[#9855FE] text-white px-3 py-1 rounded-lg text-sm">
                            Edit
                        </button>
                        <button type="button" onclick="hapusData('{{ $p->id_prodi }}')"
                            class="bg-gradient-to-r from-[#FF003C] to-[#D60067] text-white px-3 py-1 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>
                </div>

                @endforeach
            </div>

        </main>




    </div>


    <!--tambahModal-->
<div id="tambahmodal" class="fixed inset-0 hidden items-center justify-center bg-black/40">
    <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
        <button onclick="closeTambahModal()"
            class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white">
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
                    <input type="text" name="kode_prodi" id="Kode"
                        value="{{ old('kode_prodi') }}"
                        placeholder="Masukkan kode program studi"
                        class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" required>
                </label>

                <!-- NAMA -->
                <label for="nama">
                    <span>Nama</span>
                    <input type="text" name="nama_prodi" id="nama"
                        value="{{ old('nama_prodi') }}"
                        placeholder="Masukkan nama Program Studi"
                        class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" required >
                </label>

                <!-- JENJANG -->
                <label for="jenjang">
                    <span>Jenjang</span>
                    <select name="jenjang"
                        class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" required>
                        <option value="D4" {{ old('jenjang') == 'D4' ? 'selected' : '' }}>D4</option>
                        <option value="D3" {{ old('jenjang') == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="D2" {{ old('jenjang') == 'D2' ? 'selected' : '' }}>D2</option>
                        <option value="D1" {{ old('jenjang') == 'D1' ? 'selected' : '' }}>D1</option>
                    </select>
                </label>

                <input type="hidden" name="id_jurusan" value="1">


                <div class="flex justify-center">
                    <button type="submit"
                        class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



    <!--modalEdit-->
    <div id="modaledit" class="fixed inset-0 hidden items-center justify-center bg-black/40">
        <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
            <button onclick="closeEditModal()"
                class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white">
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
                            class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" required>
                    </label>
                    <label for="nama">
                        <span>Nama</span>
                        <input type="text" id="editnama" name="nama_prodi" placeholder="Masukkan nama Program Studi"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" required>
                    </label>
                    <label for="jenjang">
                        <span>Jenjang</span>
                        <select id="editjenjang" name="jenjang" class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                            id="editjenjang">
                            <option value="D4">D4</option>
                            <option value="D3">D3</option>
                            <option value="D2">D2</option>
                            <option value="D1">D1</option>
                        </select>

                        <div class="flex justify-center">
                            <button type="submit" 
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white">
                                Simpan
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>


    {{-- DELETE --}}
    @foreach ( $prodi as $p )
    
    <form id="deleteForm{{ $p->id_prodi }}" 
        action="{{ route('admin.program-studi.destroy', $p->id_prodi) }}" 
        method="POST" 
        class="hidden">
    @csrf
    @method('DELETE')
</form>

    @endforeach




    </body>
    <script src="{{ asset('js/program-studi.js') }}"></script>
</x-layout.layout>