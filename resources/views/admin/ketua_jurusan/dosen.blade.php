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
            <x-admin.header>
                <div class="font-bold">Kelola Dosen</div>
            </x-admin.header>


            <div class="flex justify-end">
                <button onclick="openTambahModal()"
                    class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow hover:opacity-90 cursor-pointer hover:scale-[1.025] transition-all ">
                    Tambah +
                </button>


            </div>

            <form method="GET" action="{{ route('admin.kelola-dosen.index') }}"
                class="flex items-center gap-3 flex-wrap mb-5 mt-5  ">

                <!-- Search -->
                <div class="relative flex-[2] min-w-[200px]">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama dosen..."
                        class="w-full pl-9 pr-4 py-2.5 text-sm border border-blue-200 rounded-2xl
                                    bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 text-gray-700">
                </div>

                <!-- Filter Prodi -->
                <select name="prodi" class="flex-1 min-w-[160px] py-2.5 px-4 text-sm border border-blue-200
                                rounded-2xl bg-white text-gray-700 focus:outline-none focus:ring-2
                                focus:ring-blue-300 cursor-pointer">
                    <option value="">Semua Prodi</option>
                    @foreach($list_prodi as $p)
                        <option value="{{ $p->id_prodi }}" {{ request('prodi') == $p->id_prodi ? 'selected' : '' }}>
                            {{ $p->nama_prodi }}
                        </option>
                    @endforeach
                </select>

                <!-- Filter Jabatan -->
                <select name="jabatan" class="flex-1 min-w-[180px] py-2.5 px-4 text-sm border border-blue-200
                                rounded-2xl bg-white text-gray-700 focus:outline-none focus:ring-2
                                focus:ring-blue-300 cursor-pointer">
                    <option value="">Semua Jabatan</option>
                    <option value="dosen" {{ request('jabatan') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="kaprodi" {{ request('jabatan') == 'kaprodi' ? 'selected' : '' }}>Ketua Program Studi
                    </option>
                    <option value="laboran" {{ request('jabatan') == 'laboran' ? 'selected' : '' }}>Laboran</option>
                </select>

                <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white
                                text-sm font-semibold rounded-2xl hover:opacity-90 transition">
                    Cari
                </button>

                @if(request('search') || request('prodi') || request('jabatan'))
                    <a href="{{ route('admin.kelola-dosen.index') }}" class="px-4 py-2.5 text-sm text-blue-600 border border-blue-200 rounded-2xl
                                        bg-white hover:bg-blue-50 transition">
                        Reset
                    </a>
                @endif
            </form>

            @foreach ($dosens as $dosen)
                <!-- CARD DOSEN 1 -->
                <div class="card bg-white rounded-[32px] shadow-xl border border-gray-300 p-5">
                    <!-- HEADER -->
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                        <div class="flex items-center gap-4 flex-1">

                            <img src="{{ asset('storage/' . $dosen->foto_dosen) }}"
                                class="-12 h-12 sm:w-14 sm:h-14 rounded-full object-cover">

                            <div class="flex-1">
                                <h2
                                    class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold break-words hover:bg-gray-200">
                                    {{ $dosen->nama_dosen }}
                                </h2>
                                <p class="text-gray-500 text-sm font-semibold">
                                    {{ $dosen->status_jabatan }} {{ $dosen->prodi->nama_prodi }}
                                </p>
                            </div>
                        </div>

                        <!-- ICON -->
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="btn-edit w-5 h-5 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90"
                                    data-id="{{ $dosen->id_dosen }}" data-id-prodi="{{ $dosen->id_prodi }}"
                                    data-nama="{{ $dosen->nama_dosen }}" data-jabatan="{{ $dosen->status_jabatan }}"
                                    data-pendidikan="{{ $dosen->jenjang_pendidikan }}" data-nik="{{ $dosen->NIK }}"
                                    data-email="{{ $dosen->email }}" data-riwayat='@json($dosen->riwayatPendidikans)'
                                    data-spesialis='@json($dosen->bidangSpesialis)'
                                    data-prodi="{{ $dosen->prodi->nama_prodi }}">
                                    <img src="{{ asset('images/icon-edit.svg') }}">
                                </button>

                                <button onclick="hapusData('{{ $dosen->id_dosen }}')"
                                    class="hover:scale-[1.025] transition-all hover:opacity-90">
                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-6 h-6 cursor-pointer">
                                </button>
                            </div>

                            <!-- ICON DROPDOWN -->
                            <button onclick="toggleCard(this)" class="flex items-center gap-4 flex-1 cursor-pointer ml-3">
                                <img src="{{ asset('images/icon-dropdown.svg') }}" class="icon-arrow h-5 w-5 transition">
                            </button>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="card-content hidden mt-5 pt-4">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm px-4">

                            <!-- kiri -->
                            <div class="space-y-2 pl-2 ">
                                <p><span class="font-bold">NIK :</span> {{ $dosen->NIK }}</p>

                                <p>
                                    <span class="font-bold">Program Studi :</span>
                                    {{ $dosen->prodi->nama_prodi }}
                                </p>

                                <p>
                                    <span class="font-bold">Pendidikan Terakhir :</span>
                                    {{ $dosen->jenjang_pendidikan }}
                                </p>

                                <p>
                                    <span class="font-bold">Email :</span>
                                    <u>{{ $dosen->email }}</u>
                                </p>
                            </div>

                            <!-- kanan -->
                            <div class="pr-2">
                                <h3 class="text-[#123CFF] font-bold mb-2">
                                    Riwayat Pendidikan
                                </h3>

                                @foreach ($dosen->riwayatPendidikans as $riwayat)

                                    <p class="text-gray-700">
                                        {{ $riwayat->deskripsi_riwayat  }}
                                    </p>

                                @endforeach
                                <p class="mt-2">
                                    <span class="font-bold">Bidang :</span>
                                    {{ $dosen->bidangSpesialis->pluck('deskripsi_bidang')->implode(', ') }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach




            <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
                <p class="text-sm text-gray-500">
                    Menampilkan {{ $dosens->firstItem() }} -
                    {{ $dosens->lastItem() }}
                    dari {{ $dosens->total() }} data
                </p>

                {{ $dosens->links() }}
            </div>
            </div>

        </main>






        {{-- Modal --}}


        {{-- Tambah --}}
        <div id="modalTambahDosen" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
            <div class="relative bg-white w-[760px] rounded-xl px-8 py-7 shadow-lg">

                <!-- Tombol Close -->
                <button onclick="closeTambahModal()"
                    class="absolute top-4 right-4 bg-blue-500 text-white w-8 h-8 rounded-full font-bold cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="text-center text-[#1B4597] font-bold text-xl mb-6">
                    Tambah Dosen
                </h2>

                <form action="{{ route('admin.kelola-dosen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">

                        <!-- KIRI -->
                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Nama</label>
                            <input type="text" name="nama_dosen" placeholder="Masukkan Nama"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Jabatan</label>
                            <select name="status_jabatan"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option value="" >--Pilih Status Jabatan--</option>
                                <option>Kepala Program Studi</option>
                                <option>Dosen</option>
                                <option>Laboran</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">NIK</label>
                            <input type="text" name="NIK" placeholder="Masukkan NIK"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <label for="id_prodi">
                            <span>Program Studi</span>
                            <select name="id_prodi" id="id_prodi"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none"
                                >
                                <option value="">Pilih Program Studi yang di kelola</option>
                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id_prodi }}">
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Email</label>
                            <input type="email" name="email" placeholder="Masukkan Email"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Pendidikan Terakhir</label>
                            <select onchange="aturRiwayat()" name="pendidikan_terakhir" id="pendidikan_terakhir"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option value="">--Pilih Pendidikan Terakhir--</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Riwayat Pendidikan</label>
                            </div>
                            <div id="riwayat-container">
                                <input type="text" name="riwayat_pendidikan[]" placeholder="Masukkan Riwayat Pendidikan"
                                    class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                            </div>
                        </div>

                        <!-- BIDANG SPESIALIS -->
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <label class="text-[#325098] font-semibold text-sm">Bidang Spesialis</label>
                                <button onclick="tambahSpesialis()" type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm leading-none hover:scale-[1.025] transition-all hover:opacity-90">
                                    +
                                </button>
                            </div>
                            <div id="spesialis-container">
                                <!-- Input default, tidak bisa dihapus -->
                                <div class="flex items-center gap-2">
                                    <input type="text" name="bidang_spesialis[]" placeholder="Masukkan Bidang Spesialis"
                                        class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                </div>
                            </div>
                        </div>



                        <!-- FOTO DOSEN -->
                        <div class="flex flex-col">
                            <label class="text-[#3B5ED7] font-semibold ml-5">Foto Dosen</label>

                            <input type="file" name="foto_dosen" id="fotoDosen" class="hidden"
                                accept="image/png, image/jpg, img/jpeg">

                            <label for="fotoDosen"
                                class="w-fit mt-2 px-4 py-2 rounded-lg border border-[#123CFF] 
                        bg-[#EAF0FF] text-[#123CFF] font-semibold cursor-pointer hover:bg-[#DDE7FF] hover:scale-[1.025] transition-all ">
                                Upload foto
                            </label>
                        </div>

                    </div>

                    <div class="flex justify-center mt-8">
                        <button type="submit"
                            class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] text-white font-semibold px-10 py-2 rounded-xl hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>




        {{-- Edit --}}
        <div id="modalEditDosen" class="fixed inset-0 bg-black/60  hidden  items-center justify-center z-50">
            <div class="relative bg-white w-[760px] rounded-xl px-8 py-7 shadow-lg">

                <!-- Tombol Close -->
                <button onclick="closeEditModal()"
                    class="absolute top-4 right-4 bg-blue-500 text-white w-8 h-8 rounded-full font-bold cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="text-center text-[#1B4597] font-bold text-xl mb-6">
                    Edit Dosen
                </h2>

                <form id="editDosenForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Nama</label>
                            <input id="edit_nama_dosen" type="text" name="nama_dosen" placeholder="Masukkan Nama"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Jabatan</label>
                            <select id="edit_jabatan" name="status_jabatan"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option value="" >--Pilih Status Jabatan--</option>
                                <option>Kepala Program Studi</option>
                                <option>Dosen</option>
                                <option>Laboran</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">NIK</label>
                            <input id="edit_nik" type="text" name="NIK" placeholder="Masukkan NIK"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <label for="edit_id_prodi">
                            <span>Program Studi</span>
                            <select id="edit_id_prodi" name="id_prodi"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none"
                                >
                                <option value="">Pilih Program Studi yang di kelola</option>

                                @foreach($list_prodi as $prodi)
                                    <option value="{{ $prodi->id_prodi }}">
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </label>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Email</label>
                            <input id="edit_email" type="email" name="email" placeholder="Masukkan Email"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Pendidikan Terakhir</label>
                            <select name="jenjang_pendidikan" id="edit_pendidikan_terakhir"
                                onchange="aturRiwayatEdit(this.value)"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option value="">--Pilih Pendidikan Terakhir--</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Riwayat Pendidikan</label>

                            <div id="edit-riwayat-container">
                                {{-- Diisi otomatis oleh JS --}}
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <label class="text-[#325098] font-semibold text-sm">Bidang Spesialis</label>

                                <button onclick="tambahSpesialisEdit()" type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm leading-none hover:scale-[1.025] transition-all hover:opacity-90">
                                    +
                                </button>
                            </div>

                            <div id="edit-spesialis-container">
                                {{-- Diisi otomatis oleh JS --}}
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#3B5ED7] font-semibold ml-5">Foto Dosen</label>

                            <input type="file" name="foto_dosen" id="editFotoDosen" class="hidden">

                            <label for="editFotoDosen"
                                class="w-fit mt-2 px-4 py-2 rounded-lg border border-[#123CFF] 
                        bg-[#EAF0FF] text-[#123CFF] font-semibold cursor-pointer hover:bg-[#DDE7FF] hover:scale-[1.025] transition-all ">
                                Upload foto
                            </label>
                        </div>

                    </div>

                    <div class="flex justify-center mt-8">
                        <button type="submit"
                            class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] text-white font-semibold px-10 py-2 rounded-xl hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>



        {{-- HAPUS --}}

        {{-- Hapus --}}
        @foreach ($dosens as $dosen)


            <form id="deleteForm{{ $dosen->id_dosen }}" action="{{ route('admin.kelola-dosen.destroy', $dosen->id_dosen) }}"
                method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>

        @endforeach

    </body>
    <script src="{{ asset('js/dosen.js') }}"></script>
</x-layout.layout>