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

                <!-- CARD -->
                <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">

                    <!-- Kiri -->
                    <div class="grid grid-cols-[100px_1fr_250px] text-sm w-full">
                        <p>P001</p>
                        <p>Teknologi Rekayasa Perangkat Lunak</p>
                        <p>Diploma 4</p>
                    </div>

                    <!-- Kanan -->
                    <div class="flex gap-2 mr-6">
                        <button onclick="openEditModal(this,'P001','Teknologi Rekayasa Perangkat Lunak','D4')"
                            class="bg-gradient-to-r from-[#4863E6] to-[#9855FE] text-white px-3 py-1 rounded-lg text-sm">
                            Edit
                        </button>
                        <button
                            class="bg-gradient-to-r from-[#FF003C] to-[#D60067] text-white px-3 py-1 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>

                </div>

                <!-- CARD -->
                <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                    <div class="grid grid-cols-[100px_1fr_250px] text-sm w-full">
                        <p>P002</p>
                        <p>Teknik Informatika</p>
                        <p>Diploma 3</p>
                    </div>

                    <div class="flex gap-2 mr-6">
                        <button onclick="openEditModal(this,'P002','Teknik Informatika','D3')"
                            class="bg-gradient-to-r from-[#4863E6] to-[#9855FE] text-white px-3 py-1 rounded-lg text-sm">
                            Edit
                        </button>
                        <button
                            class="bg-gradient-to-r from-[#FF003C] to-[#D60067] text-white px-3 py-1 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>
                </div>

                <!-- CARD -->
                <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                    <div class="grid grid-cols-[100px_1fr_250px] text-sm w-full">
                        <p>P003</p>
                        <p>Animasi</p>
                        <p>Diploma 4</p>
                    </div>

                    <div class="flex gap-2 mr-6">
                        <button onclick="openEditModal(this,'P003','Animasi','D4')"
                            class="bg-gradient-to-r from-[#4863E6] to-[#9855FE] text-white px-3 py-1 rounded-lg text-sm">
                            Edit
                        </button>
                        <button
                            class="bg-gradient-to-r from-[#FF003C] to-[#D60067] text-white px-3 py-1 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>
                </div>

                <!-- CARD -->
                <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                    <div class="grid grid-cols-[100px_1fr_250px] text-sm w-full">
                        <p>P004</p>
                        <p>Teknologi Geomatika</p>
                        <p>Diploma 3</p>
                    </div>

                    <div class="flex gap-2 mr-6">
                        <button onclick="openEditModal(this,'P004','Teknologi Geomatika','D3')"
                            class="bg-gradient-to-r from-[#4863E6] to-[#9855FE] text-white px-3 py-1 rounded-lg text-sm">
                            Edit
                        </button>
                        <button onclick="hapusData(this)"
                            class="bg-gradient-to-r from-[#FF003C] to-[#D60067] text-white px-3 py-1 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>
                </div>
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
                <form action="">
                    <label for="email">
                        <span>Kode</span>
                        <input type="text" id="Kode" placeholder="Masukkan kode program studi"
                            class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="nama">
                        <span>Nama</span>
                        <input type="text" id="nama" placeholder="Masukkan nama Program Studi"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="jenjang">
                        <span>Jenjang</span>
                        <select class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                            <option value="D4">D4</option>
                            <option value="D3">D3</option>
                            <option value="D2">D2</option>
                            <option value="D1">D1</option>
                        </select>


                        <div class="flex justify-center">
                            <button onclick="saveTambah()"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white">
                                Simpan
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <!--popupsukses-->
    <div id="popupSukses" class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
        ✅ Data berhasil disimpan
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
                <form action="">
                    <label for="email">
                        <span>Kode</span>
                        <input type="text" id="editkode" placeholder="Masukkan kode program studi"
                            class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="nama">
                        <span>Nama</span>
                        <input type="text" id="editnama" placeholder="Masukkan nama Program Studi"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="jenjang">
                        <span>Jenjang</span>
                        <select class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                            id="editjenjang">
                            <option value="D4">D4</option>
                            <option value="D3">D3</option>
                            <option value="D2">D2</option>
                            <option value="D1">D1</option>
                        </select>


                        <div class="flex justify-center">
                            <button onclick="saveEdit()"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white">
                                Simpan
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>




    </body>
    <script src="{{ asset('js/program-studi.js') }}"></script>
</x-layout.layout>