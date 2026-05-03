<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
        <div class="flex h-screen  px-4 py-4">
            <!-- Sidebar -->
            <aside class="w-64 rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
                <div class="mb-10 flex items-center gap-3">
                    <div class="h-12 w-20 rounded-full bg-cover bg-center"
                        style="background-image: url('{{ asset('images/logo prism.png') }}');"></div>

                    <div>
                        <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
                        <p class="text-xs text-[#0161C5]">platform for resource & study Management</p>
                    </div>
                </div>

                <nav class="space-y-3">
                    <a href="dashboard_ketua.html"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/Structure.svg') }}" class="h-4 w-4">Dashboard</a>
                    <a href="#"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/program studi(biru).svg') }}" class="h-5 w-5 mt-1 ">Program Studi</a>
                    <a href="#"
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/dosen (putih).svg') }}" class="h-4 w-4  ">Dosen</a>
                    <a href="#"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/akun (biru).svg') }}" class="h-4 w-4 ">Akun</a>
                    <a href="profileketuajurusan.html"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>
                </nav>
            </aside>

            <!-- MAIN CONTENT -->
            <main class="flex-1 p-2 space-y-6">

                <!-- Header -->
                <div class="flex items-start justify-between mb-6 ml-7">
                    <h1 class="text-2xl font-semibold">Dosen</h1>

                    <div class="flex flex-col items-end gap-4 mr-6">
                        <img src="{{ asset('images/Profile Circle.svg') }}"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF]  rounded-full">

                        <button onclick="openTambahModal(1)"
                            class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow hover:opacity-90 cursor-pointer">
                            Tambah +
                        </button>
                    </div>
                </div>

                <div class="space-y-4 max-w-[930px] mx-auto">

                    <!-- CARD DOSEN 1 -->
                    <div class="card bg-white rounded-[32px] shadow-md border border-gray-300 p-5">

                        <!-- HEADER -->
                        <div class="flex items-center gap-4">
                            <div onclick="toggleCard(this)" class="flex items-center gap-4 flex-1 cursor-pointer">

                                <img src="{{ asset('images/dosen2.png') }}" class="w-14 h-14 rounded-full object-cover">

                                <div class="flex-1">
                                    <h2
                                        class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                                        Supardianto, M.Eng.
                                    </h2>
                                    <p class="text-gray-500 text-sm font-semibold">
                                        Kepala Program Studi Teknologi Rekayasa Perangkat Lunak
                                    </p>
                                </div>
                            </div>

                            <!-- ICON -->
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <button type="button" onclick="openEditDosen(1)">
                                        <img src="{{ asset('images/icon-edit.svg') }}" class="w-5 h-5 cursor-pointer">
                                    </button>

                                    <button>
                                        <img src="{{ asset('images/icon-hapus.svg') }}" class="w-6 h-6 cursor-pointer">
                                    </button>
                                </div>

                                <!-- ICON DROPDOWN -->
                                <button class="ml-3">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="icon-arrow h-5 w-5 transition">
                                </button>
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="card-content hidden mt-5 pt-4">

                            <div class="grid grid-cols-2 gap-6 text-sm px-4">

                                <!-- kiri -->
                                <div class="space-y-2 pl-2 ">
                                    <p><span class="font-bold">NIK :</span> 113105</p>

                                    <p>
                                        <span class="font-bold">Program Studi :</span>
                                        Teknologi Rekayasa Perangkat Lunak
                                    </p>

                                    <p>
                                        <span class="font-bold">Pendidikan Terakhir :</span>
                                        S2
                                    </p>

                                    <p>
                                        <span class="font-bold">Email :</span>
                                        <u>suparlianto@polibatam.ac.id</u>
                                    </p>
                                </div>

                                <!-- kanan -->
                                <div class="pr-2">
                                    <h3 class="text-[#123CFF] font-bold mb-2">
                                        Riwayat Pendidikan
                                    </h3>

                                    <p class="text-gray-700">
                                        S1 ITB : Teknik Media Digital
                                    </p>

                                    <p class="text-gray-700 mt-2">
                                        S2 UGM : Teknologi Informasi
                                    </p>

                                    <p class="mt-2">
                                        <span class="font-bold">Bidang :</span>
                                        Ilmu Komputer
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- CARD DOSEN 2 -->
                    <div class="card bg-white rounded-[32px] shadow-md border border-gray-300 p-5">

                        <!-- HEADER -->
                        <div class="flex items-center gap-4 cursor-pointer">
                            <div onclick="toggleCard(this)" class="flex items-center gap-4 flex-1 cursor-pointer">

                                <img src="{{ asset('images/dosen2.png') }}" class="w-14 h-14 rounded-full object-cover">

                                <div class="flex-1">
                                    <h2
                                        class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                                        Firgi wardanas, M.Eng.
                                    </h2>
                                    <p class="text-gray-500 text-sm font-semibold">
                                        Kepala Program Studi keamanan siber
                                    </p>
                                </div>
                            </div>

                            <!-- ICON -->
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2">
                                    <button type="button" onclick="openEditDosen(2)">
                                        <img src="{{ asset('images/icon-edit.svg') }}" class="w-5 h-5 cursor-pointer">
                                    </button>

                                    <button>
                                        <img src="{{ asset('images/icon-hapus.svg') }}" class="w-6 h-6 cursor-pointer">
                                    </button>
                                </div>

                                <!-- DROPDOWN -->
                                <button class="ml-3">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="icon-arrow h-5 w-5 transition">
                                </button>
                            </div>
                        </div>

                        <!-- CONTENT card -->
                        <div class="card-content hidden mt-5 pt-4">

                            <div class="grid grid-cols-2 gap-6 text-sm px-4">

                                <!-- kiri -->
                                <div class="space-y-2 pl-2 ">
                                    <p><span class="font-bold">NIK :</span> 113105</p>

                                    <p>
                                        <span class="font-bold">Program Studi :</span>
                                        RKS
                                    </p>

                                    <p>
                                        <span class="font-bold">Pendidikan Terakhir :</span>
                                        S4
                                    </p>

                                    <p>
                                        <span class="font-bold">Email :</span>
                                        <u>wardanas@polibatam.ac.id</u>
                                    </p>
                                </div>

                                <!-- kanan -->
                                <div class="pr-2">
                                    <h3 class="text-[#123CFF] font-bold mb-2">
                                        Riwayat Pendidikan
                                    </h3>

                                    <p class="text-gray-700">
                                        S1 ITB : Teknik infromatika
                                    </p>

                                    <p class="text-gray-700 mt-2">
                                        S2 UGM : Teknologi Informasi
                                    </p>

                                    <p class="mt-2">
                                        <span class="font-bold">Bidang :</span>
                                        Ilmu Komputer
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
        </div>

        <!-- MODAL TAMBAH DOSEN -->
        <div id="modalTambahDosen1" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

            <div class="relative bg-white w-[760px] rounded-xl px-8 py-7 shadow-lg">

                <!-- Tombol Close -->
                <button onclick="closeTambahModal(1)"
                    class="absolute top-4 right-4 bg-[#123CFF] text-white w-8 h-8 rounded-full font-bold cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-[#1B4597] font-bold text-xl mb-6">
                    Tambah Dosen
                </h2>

                <form action="#" method="POST">
                    @csrf

                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">

                        <!-- KIRI -->
                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Jabatan</label>
                            <select name="jabatan"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Status Jabatan--</option>
                                <option>Dosen</option>
                                <option>Kepala Program Studi</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Program Studi</label>
                            <select name="program_studi"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Program Studi--</option>
                                <option>Teknologi Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Email</label>
                            <input type="email" name="email" placeholder="Masukkan Email"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Pendidikan Terakhir--</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Riwayat Pendidikan</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="riwayat_pendidikan" placeholder="Masukkan Riwayat Pendidikan"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Bidang Spesialis</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="bidang_spesialis" placeholder="Masukkan Bidang Spesialis"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>
                        <!-- FOTO DOSEN (KIRI) -->
                        <div class="flex flex-col">
                            <label class="text-[#3B5ED7] font-semibold ml-5">Foto Dosen</label>

                            <input type="file" name="foto_dosen" id="fotoDosen" class="hidden">

                            <label for="fotoDosen" class="w-fit mt-2 px-4 py-2 rounded-lg border border-[#123CFF] 
                        bg-[#EAF0FF] text-[#123CFF] font-semibold cursor-pointer hover:bg-[#DDE7FF]">
                                Upload foto
                            </label>
                        </div>

                    </div>

                    <div class="flex justify-center mt-8">
                        <button type="button"
                            class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] text-white font-semibold px-10 py-2 rounded-xl">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- MODAL edit dosen card 1 -->
        <div id="modalEditDosen1" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

            <div class="relative bg-white w-[760px] rounded-xl px-8 py-7 shadow-lg">

                <!-- Tombol Close -->
                <button onclick="closeEditDosen(1)"
                    class="absolute top-4 right-4 bg-[#123CFF] text-white w-8 h-8 rounded-full font-bold cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-[#1B4597] font-bold text-xl mb-6">
                    Tambah Dosen
                </h2>

                <form action="#" method="POST">
                    @csrf

                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">

                        <!-- KIRI -->
                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Jabatan</label>
                            <select name="jabatan"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Status Jabatan--</option>
                                <option>Dosen</option>
                                <option>Kepala Program Studi</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Program Studi</label>
                            <select name="program_studi"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Program Studi--</option>
                                <option>Teknologi Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Email</label>
                            <input type="email" name="email" placeholder="Masukkan Email"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Pendidikan Terakhir--</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Riwayat Pendidikan</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="riwayat_pendidikan" placeholder="Masukkan Riwayat Pendidikan"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Bidang Spesialis</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="bidang_spesialis" placeholder="Masukkan Bidang Spesialis"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>
                        <!-- FOTO DOSEN -->
                        <div class="flex flex-col">
                            <label class="text-[#1F4AA8] font-semibold text-sm mb-2">
                                Foto Dosen
                            </label>

                            <!-- input hidden -->
                            <input type="file" id="editFotoDosen" class="hidden" onchange="handleEditFile(this)">

                            <!-- BOX FILE -->
                            <div id="editFileBox" class="flex items-center justify-between w-[260px] px-4 py-2 
                                    rounded-xl border border-gray-300 bg-gray-50 shadow-sm">

                                <!-- kiri -->
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('images/icon-image.svg') }}" class="w-5 h-5">

                                    <div>
                                        <p id="editFileName" class="text-sm font-semibold text-black">
                                            foto.png
                                        </p>
                                        <p id="editFileSize" class="text-xs text-gray-400">
                                            100 kb
                                        </p>
                                    </div>
                                </div>

                                <!-- kanan -->
                                <div class="flex items-center gap-2">

                                    <!-- ganti -->
                                    <label for="editFotoDosen" class="text-blue-500 text-sm cursor-pointer">
                                        Ganti
                                    </label>

                                    <!-- hapus -->
                                    <button type="button" onclick="removeEditFile()">
                                        <img src="{{ asset('images/icon-hapus.svg') }}" class="w-4 h-4 opacity-60">
                                    </button>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-center mt-8">
                        <button type="button"
                            class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] text-white font-semibold px-10 py-2 rounded-xl">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- MODAL edit dosen card 2 -->
        <div id="modalEditDosen2" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

            <div class="relative bg-white w-[760px] rounded-xl px-8 py-7 shadow-lg">

                <!-- Tombol Close -->
                <button onclick="closeEditDosen(2)"
                    class="absolute top-4 right-4 bg-[#123CFF] text-white w-8 h-8 rounded-full font-bold cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-[#1B4597] font-bold text-xl mb-6">
                    Tambah Dosen
                </h2>

                <form action="#" method="POST">
                    @csrf

                    <div class="grid grid-cols-2 gap-x-8 gap-y-4">

                        <!-- KIRI -->
                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Jabatan</label>
                            <select name="jabatan"
                                class="w-full px-4 py-2 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Status Jabatan--</option>
                                <option>Dosen</option>
                                <option>Kepala Program Studi</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">NIK</label>
                            <input type="text" name="nik" placeholder="Masukkan NIK"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Program Studi</label>
                            <select name="program_studi"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Program Studi--</option>
                                <option>Teknologi Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Email</label>
                            <input type="email" name="email" placeholder="Masukkan Email"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <label class="text-[#325098] font-semibold text-sm">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                                <option>--Pilih Pendidikan Terakhir--</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Riwayat Pendidikan</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="riwayat_pendidikan" placeholder="Masukkan Riwayat Pendidikan"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label class="text-[#325098] font-semibold text-sm">Bidang Spesialis</label>
                                <button type="button"
                                    class="bg-[#123CFF] text-white w-5 h-5 rounded-full flex items-center justify-center text-sm">
                                    <img src="{{ asset('images/icon-plus.svg') }}" alt="">
                                </button>
                            </div>
                            <input type="text" name="bidang_spesialis" placeholder="Masukkan Bidang Spesialis"
                                class="w-full px-4 py-1 rounded-xl border border-gray-300 shadow focus:outline-none">
                        </div>
                        <!-- FOTO DOSEN -->
                        <div class="flex flex-col">
                            <label class="text-[#1F4AA8] font-semibold text-sm mb-2">
                                Foto Dosen
                            </label>

                            <!-- input hidden -->
                            <input type="file" id="editFotoDosen" class="hidden" onchange="handleEditFile(this)">

                            <!-- BOX FILE -->
                            <div id="editFileBox" class="flex items-center justify-between w-[260px] px-4 py-2 
                                    rounded-xl border border-gray-300 bg-gray-50 shadow-sm">

                                <!-- kiri -->
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('images/icon-image.svg') }}" class="w-5 h-5">

                                    <div>
                                        <p id="editFileName" class="text-sm font-semibold text-black">
                                            foto.png
                                        </p>
                                        <p id="editFileSize" class="text-xs text-gray-400">
                                            100 kb
                                        </p>
                                    </div>
                                </div>

                                <!-- kanan -->
                                <div class="flex items-center gap-2">

                                    <!-- ganti -->
                                    <label for="editFotoDosen" class="text-blue-500 text-sm cursor-pointer">
                                        Ganti
                                    </label>

                                    <!-- hapus -->
                                    <button type="button" onclick="removeEditFile()">
                                        <img src="{{ asset('images/icon-hapus.svg') }}" class="w-4 h-4 opacity-60">
                                    </button>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-center mt-8">
                        <button type="button"
                            class="bg-gradient-to-r from-[#067AFA] to-[#3307CC] text-white font-semibold px-10 py-2 rounded-xl">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/dosen.js') }}"></script>
</x-layout.layout>