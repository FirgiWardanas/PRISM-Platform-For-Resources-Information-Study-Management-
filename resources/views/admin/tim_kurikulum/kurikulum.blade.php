<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
        <div class="flex flex-col lg:flex-row h-screen px-4 py-4 gap-4">
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
                    <a href="/admin/tim-kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/Structure.svg') }}" class="h-4 w-4">Dashboard</a>
                    <a href="/admin/kurikulum"
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/untuk kurikulum putih.svg') }}" class="h-4 w-4 mb-1 ">Kurikulum</a>
                    <a href="/admin/matakuliah"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Matakuliah</a>
                    <a href="/admin/profile-tim-kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>

                </nav>
            </aside>
            <!-- Header -->
            <main class="flex-1  px-4">
                <!-- Header -->
                <div class="flex items-start justify-between mb-6">
                    <h1 class="text-2xl font-semibold">Kurikulum</h1>
                    <div class="flex flex-col items-end gap-6">
                        <img src="{{ asset('images/Profile Circle.svg') }}" alt="profil"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF]  rounded-full ">
                    </div>
                </div>

                <div class="flex gap-4 h-[90%]">

                    <!-- List Kurikulum -->
                    <div class="w-48 space-y-3 mt-5">


                        <button onclick="openTambahKurikulum()"
                            class="w-full bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2  rounded-lg shadow text-white text-center flex items-center justify-center gap-1 cursor-pointer">
                            Tambah <img src="{{ asset('images/icon-plus.svg') }}">
                        </button>

                        <div onclick="showKurikulum(8)"
                            class="bg-gradient-to-r from-[#4363E3] to-[#9A55FF] text-white p-5 rounded-lg mx-auto cursor-pointer">
                            Kurikulum 8
                        </div>

                        <div onclick="showKurikulum(7)"
                            class="bg-[#B3C3FF] text-[#001286] p-3 rounded-lg cursor-pointer">Kurikulum 7
                        </div>
                        <div onclick="showKurikulum(6)" class="bg-[#B3C3FF] text-[#001286] p-3 rounded-lg cursor-pointer">Kurikulum 6
                        </div>
                        <div onclick="showKurikulum(5)" class="bg-[#B3C3FF] text-[#001286] p-3 rounded-lg cursor-pointer">Kurikulum 5
                        </div>
                        <div onclick="showKurikulum(4)" class="bg-[#B3C3FF] text-[#001286] p-3 rounded-lg cursor-pointer">Kurikulum 4
                        </div>
                        <div onclick="showKurikulum(3)" class="bg-[#B3C3FF] text-[#001286] p-3 rounded-lg cursor-pointer">Kurikulum 3
                        </div>

                    </div>

                    <!-- Content kurikulum 8 -->
                    <div id="kurikulum-8"
                        class="kurikulum-content flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 8</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow8-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 7 -->
                    <div id="kurikulum-7"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 7</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(7, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow7-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah7-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent7-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 5 -->
                    <div id="kurikulum-5"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 5</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(5, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow5-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah5-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent5-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 6 -->
                    <div id="kurikulum-6"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 6</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(6, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow6-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah6-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent6-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 4 -->
                    <div id="kurikulum-4"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 4</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(4, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow4-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah4-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent4-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 6 -->
                    <div id="kurikulum-6"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 6</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(6, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow6-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah6-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent6-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 3 -->
                    <div id="kurikulum-3"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 3</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(3, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow3-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah3-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent3-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Content kurikulum 6 -->
                    <div id="kurikulum-6"
                        class="kurikulum-content hidden flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4">

                        <!-- Title -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB]
                                    bg-clip-text text-transparent mx-auto">Kurikulum 6</h2>
                            <div class="flex gap-3">
                                <button onclick="editKurikulum()">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="hapus"
                                        class="w-6 h-6 cursor-pointer"> </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7"
                                    onclick="hapusKurikulum(this)">
                            </div>
                        </div>

                        <!-- Semester List -->
                        <div class="space-y-4">

                            <!--semester 1--->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(6, 1)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 1
                                    </span>

                                    <img id="iconarrow6-1" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah6-1" onclick="openModalMatkul(8, 1)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent6-1" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(1)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(1)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 2-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 2)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 2
                                    </span>

                                    <img id="iconarrow8-2" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-2" onclick="openModalMatkul(2)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-2" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(2)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(2)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah2(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 3-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 3)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 3
                                    </span>

                                    <img id="iconarrow8-3" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-3" onclick="openModalMatkul(3)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-3" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(3)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(3)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah3(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 4-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 4)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 4
                                    </span>

                                    <img id="iconarrow8-4" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-4" onclick="openModalMatkul(4)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-4" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(4)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(4)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah4(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 5-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 5)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 5
                                    </span>

                                    <img id="iconarrow8-5" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-5" onclick="openModalMatkul(5)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-5" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(5)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(5)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah5(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 6-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 6)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 6
                                    </span>

                                    <img id="iconarrow8-6" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-6" onclick="openModalMatkul(6)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-6" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(6)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(6)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 7-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 7)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 7
                                    </span>

                                    <img id="iconarrow8-7" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-7" onclick="openModalMatkul(7)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-7" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(7)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(7)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah7(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--semester 8-->
                            <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                <div onclick="toggleSemester(8, 8)"
                                    class="flex justify-between items-center cursor-pointer">


                                    <span class="tracking-widest font-semibold text-[#001286]">
                                        SEMESTER 8
                                    </span>

                                    <img id="iconarrow8-8" src="{{ asset('images/icon-dropdown.svg') }}"
                                        class="h-5 w-5 transition-transform duration-300">
                                </div>
                                <!-- BUTTON TAMBAH (DI BAWAH KANAN) -->
                                <div class="flex justify-end">
                                    <button id="btnTambah8-8" onclick="openModalMatkul(8)"
                                        class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                    </button>
                                </div>

                                <!--content table-->
                                <div id="semesterContent8-8" class="mt-3 hidden">
                                    <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                        <table class="w-full  text-xs border-collapse">
                                            <!-- ATUR LEBAR KOLOM -->
                                            <colgroup>
                                                <col class="w-[40px]"> <!-- No -->
                                                <col class="w-[70px]"> <!-- Kode -->
                                                <col class="w-[150px]"> <!-- Nama -->
                                                <col class="w-[50px]"> <!-- SKS -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[40px]"> <!-- T -->
                                                <col class="w-[40px]"> <!-- P -->
                                                <col class="w-[90px]"> <!-- Kategori -->
                                                <col class="w-[70px]"> <!-- Silabus -->
                                                <col class="w-[80px]"> <!-- Aksi -->
                                            </colgroup>

                                            <!-- HEADER -->
                                            <thead>
                                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                    <th rowspan="2" class="p-2">No</th>
                                                    <th rowspan="2" class="p-2">Kode</th>
                                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                                    <th rowspan="2" class="p-2">Sks</th>

                                                    <!-- gabungan -->
                                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                                    <th colspan="2" class="p-2">Jam/Sesi</th>

                                                    <th rowspan="2" class="p-2">Kategori</th>
                                                    <th rowspan="2" class="p-2">Silabus</th>
                                                    <th rowspan="2" class="p-2">Aksi</th>
                                                </tr>

                                                <!-- sub header -->
                                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                    <th class="p-1">T</th>
                                                    <th class="p-1">P</th>
                                                </tr>
                                            </thead>

                                            <!-- ISI -->
                                            <tbody>
                                                <tr class="text-[10px] text-center">
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">201</td>
                                                    <td class="p-2 text-left">Pemrograman basis data</td>
                                                    <td class="p-2">3</td>

                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>
                                                    <td class="p-2">2</td>
                                                    <td class="p-2">1</td>

                                                    <td class="p-2">Wajib</td>

                                                    <td class="p-2 flex justify-center items-center">
                                                        <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                            class="cursor-pointer" onclick="openModalSilabus(8)">
                                                    </td>

                                                    <td class="p-2">
                                                        <div class="flex justify-center items-center gap-2">
                                                            <img src="{{ asset('images/icon-edit.svg') }}"
                                                                class="w-3 h-3 cursor-pointer"
                                                                onclick="openEditMatakuliah(8)">
                                                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                class="w-4 h-4 cursor-pointer"
                                                                onclick="hapusMatakuliah8(this)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>


            </main>
        </div>
        <!--modaltambahkurikulum-->
        <div id="tambahkurikulum" class="fixed inset-0 hidden items-center justify-center bg-black/40">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeTambahKurikulum()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white  cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
                    Tambah Kurikulum
                </h2>

                <div class="max-w-lg text-sm">
                    <form action="">
                        <label for="kode kur">
                            <span>Kode Kurikulum</span>
                            <input type="text" id="Kodekur" placeholder="Masukkan kode kurikulum" class="py-2 px-3  border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none">
                        </label>
                        <label for="nama kur">
                            <span>Nama Kurikulum</span>
                            <input type="text" id="namakur" placeholder="Masukkan nama kurikulum" class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none ">
                        </label>
                        <label for="tahunmulai">
                            <span>Tahun Mulai</span>
                            <input type="text" id="tahunmul" placeholder="Masukkan tahun Mulai" class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none">
                        </label>
                        <label>
                            <span class="text-sm">Semester</span>

                            <div
                                class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200 w-fit">
                                <!-- Angka -->
                                <div id="valueBox"
                                    class="flex items-center justify-center w-10 h-6 rounded-lg border  border-gray-300 shadow-lg text-sm text-gray-600 ">
                                    0
                                </div>

                                <!-- Tombol -->
                                <div class="flex flex-col justify-center">
                                    <button type="button" onclick="tambah()" class="rotate-180 h-5 w-5"><img
                                            src="{{ asset('images/icon-dropdown.svg') }}"></button>
                                    <button type="button" onclick="kurang()" class="h-5 w-5"><img
                                            src="{{ asset('images/icon-dropdown.svg') }}"></button>
                                </div>

                            </div>
                        </label>


                        <div class="flex justify-center">
                            <button type="button" onclick="saveTambah1()"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer">
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

        <!--modaleditkurikulum-->
        <div id="editKurikulum" class="fixed inset-0 hidden items-center justify-center bg-black/40">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeEditKurikulum()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">
                    Edit Kurikulum
                </h2>

                <div class="max-w-lg text-sm">
                    <form action="">
                        <label for="kodekur">
                            <span>Kode Kurikulum</span>
                            <input type="text" id="Kodekur" placeholder="Masukkan kode kurikulum" class="py-2 px-3  border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none">
                        </label>
                        <label for="namakur">
                            <span>Nama Kurikulum</span>
                            <input type="text" id="namakur" placeholder="Masukkan nama kurikulum" class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none ">
                        </label>
                        <label for="tahunmulai">
                            <span>Tahun Mulai</span>
                            <input type="text" id="tahunmul" placeholder="Masukkan tahun Mulai" class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2
                            focus:outline-none">
                        </label>
                        <label>
                            <span class="text-sm">Semester</span>

                            <div class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200
                            w-fit">

                                <!-- Angka -->
                                <div id="valueKurBox"
                                    class="flex items-center justify-center w-10 h-6 rounded-lg border  border-gray-300 shadow-lg text-sm text-gray-600 ">
                                    0
                                </div>

                                <!-- Tombol -->
                                <div class="flex flex-col justify-center">
                                    <button type="button" onclick="tambahkur()" class="rotate-180 h-5 w-5"><img
                                            src="{{ asset('images/icon-dropdown.svg') }}"></button>
                                    <button type="button" onclick="kurangkur()" class="h-5 w-5"><img
                                            src="{{ asset('images/icon-dropdown.svg') }}"></button>
                                </div>

                            </div>
                        </label>


                        <div class="flex justify-center">
                            <button type="button" onclick="saveEdit()"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--popupsukses edit-->
        <div id="popupSuksesEdit"
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>

        <!-- modaltambahmatakuliah semester 1 -->
        <div id="modalMatkul8-1" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(8, 1)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul1()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 2 -->
        <div id="modalMatkul2" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(2)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul2()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- modaltambahmatakuliah semester 3 -->
        <div id="modalMatkul3" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(3)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul3()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 4 -->
        <div id="modalMatkul4" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(4)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul4()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 5 -->
        <div id="modalMatkul5" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(5)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul5()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 6 -->
        <div id="modalMatkul6" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(6)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul6()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 7 -->
        <div id="modalMatkul7" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(7)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul7()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- modaltambahmatakuliah semester 8 -->
        <div id="modalMatkul8" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeModalMatkul(8)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Tambah Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveMatkul8()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!--popupsukses tambahmatakukiah-->
        <div id="popupSuksesTambahMatkul"
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>



        <!-- modalsilabus semester 1 -->
        <div id="modalSilabus1" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(1)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput" class="hidden"
                                                    onchange="handleFile(this)">

                                                <button onclick="document.getElementById('fileInput').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 2 -->
        <div id="modalSilabus2" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(2)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize2(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer2" class="space-y-2 w-full">

                                            <!-- card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS2(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea2"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput2" class="hidden"
                                                    onchange="handleFile(this)">

                                                <button onclick="document.getElementById('fileInput2').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS2()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus2()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 3 -->
        <div id="modalSilabus3" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(3)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize3(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer3" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS3(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea3"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput3" class="hidden"
                                                    onchange="handleFile3(this)">

                                                <button onclick="document.getElementById('fileInput3').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS3()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus3()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 4 -->
        <div id="modalSilabus4" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(4)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize4(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer4" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS4(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea4"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput" class="hidden"
                                                    onchange="handleFile4(this)">

                                                <button onclick="document.getElementById('fileInput4').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS4()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus4()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 5 -->
        <div id="modalSilabus5" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(5)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize5(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer5" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS5(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea5"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput5" class="hidden"
                                                    onchange="handleFile(this)">

                                                <button onclick="document.getElementById('fileInput5').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS5()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus5()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 6 -->
        <div id="modalSilabus6" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(6)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize6(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContaine6" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS6(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea6"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput" class="hidden"
                                                    onchange="handleFile6(this)">

                                                <button onclick="document.getElementById('fileInput6').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS6()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus6()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 7 -->
        <div id="modalSilabus7" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(7)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize7(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer7" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS7(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea7"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput7" class="hidden"
                                                    onchange="handleFile7(this)">

                                                <button onclick="document.getElementById('fileInput7').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS7()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus7()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- modalsilabus semester 8 -->
        <div id="modalSilabus8" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-center items-center  py-3 relative">
                    <h2 class="text-lg font-semibold text-[#1B4597]">
                        Kelola Silabus
                    </h2>

                    <button onclick="closeModalSilabus(8)"
                        class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">
                        ✕
                    </button>
                </div>

                <!-- CONTENT SCROLL -->
                <div class="p-5">
                    <div class="overflow-y-auto max-h-[80vh]">

                        <table class="w-full border border-gray-400 border-collapse text-sm">

                            <tr>
                                <td class="border border-gray-400 p-2 w-40 align-top">Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="matakuliah" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden placeholder:masukkan"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Kode</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="kode" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">SKS</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="sks" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Deskripsi Mata Kuliah</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="deskripsiMK" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Umum</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranUmum" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Capaian Pembelajaran Khusus</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="capaianPembelajaranKhusus" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">Daftar Pustaka</td>
                                <td class="border border-gray-400 p-2 text-center align-top">:</td>
                                <td class="border border-gray-400 p-2">
                                    <textarea id="daftarPustaka" oninput="autoResize8(this)"
                                        class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-400 p-2 align-top">
                                    Rencana Pembelajaran Semester
                                </td>

                                <td class="border border-gray-400 p-2 text-center align-top">:</td>

                                <td class="border border-gray-400 p-2">

                                    <div class="flex items-start justify-between gap-3">

                                        <!-- LIST FILE -->
                                        <div id="rpsContainer8" class="space-y-2 w-full">

                                            <!-- contoh card -->
                                            <div
                                                class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm">
                                                <div class="flex items-center gap-2">
                                                    <img src="../foto/file.svg" class="w-5 h-5">
                                                    <div>
                                                        <p class="text-sm font-medium">RPS.pdf</p>
                                                        <p class="text-xs text-gray-500">100 kb</p>
                                                    </div>
                                                </div>

                                                <button onclick="hapusRPS8(this)" class="text-red-500">
                                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-5 h-5">
                                                </button>
                                            </div>


                                            <div id="uploadArea8"
                                                class="hidden border-2 border-dashed border-blue-400 rounded-xl p-4 text-center">

                                                <p class="text-gray-700 mb-2 text-sm">
                                                    choose a file
                                                </p>

                                                <input type="file" id="fileInput" class="hidden"
                                                    onchange="handleFile8(this)">

                                                <button onclick="document.getElementById('fileInput8').click()"
                                                    class="px-3 py-1 bg-blue-200 text-blue-800 rounded-lg text-sm">
                                                    Browse File
                                                </button>
                                            </div>

                                        </div>

                                        <!-- BUTTON TAMBAH -->
                                        <button type="button" onclick="tambahRPS8()"
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor-pointer">

                                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-6 h-6">
                                        </button>

                                    </div>

                                </td>
                            </tr>


                        </table>

                        <!-- FOOTER -->
                        <div class="flex justify-center py-4 border-t">
                            <button type="button" onclick="simpansilabus8()"
                                class="px-8 py-2 mb-10 mt-5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                                Simpan
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!--popupsukses silabus-->
        <div id="popupSuksesSilabus"
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>

        <!--modaleditmatakuliah semester 1-->
        <div id="modalEditMatakuliah1" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(1)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah1()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 2-->
        <div id="modalEditMatakuliah2" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(2)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah2()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 3-->
        <div id="modalEditMatakuliah3" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(3)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah3()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 4-->
        <div id="modalEditMatakuliah4" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(4)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah4()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 5-->
        <div id="modalEditMatakuliah5" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(5)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah5()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 6-->
        <div id="modalEditMatakuliah6" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(6)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah6()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 7-->
        <div id="modalEditMatakuliah7" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(7)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah7()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!--modaleditmatakuliah semester 8-->
        <div id="modalEditMatakuliah8" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">

            <div class="w-[800px] bg-white rounded-2xl p-6 shadow-xl relative">

                <!-- CLOSE -->
                <button onclick="closeEditMatakuliah(8)"
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                    Edit Matakuliah
                </h2>

                <form action="">
                    <div class="grid grid-cols-2 gap-4 text-sm">

                        <label for="kodematakuliah">
                            <span>Kode</span>
                            <input type="text" id="kodematakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="namamatakuliah">
                            <span>Nama</span>
                            <input type="text" id="namamatakuliah" placeholder="Masukkan kode matakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>


                        <label for="Kategori">
                            <span class="block">Kategori</span>
                            <div class="relative">
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg appearance-none"
                                    id="kategori">
                                    <option>--Pilih--</option>
                                    <option>Wajib</option>
                                    <option>Pendukung</option>
                                </select>

                                <!-- Icon -->
                                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>


                        <label for="sksmatakuliah">
                            <span>Sks</span>
                            <input type="text" placeholder="Masukkan Sks" id="sksmatakuliah"
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none">
                        </label>

                    </div>

                    <!-- BAGIAN BAWAH -->
                    <div class="grid grid-cols-4 gap-3 mt-6 text-sm">
                        <form action="">

                            <label for="bobotsksteori">
                                <span>Bobot Sks Teori</span>
                                <input type="number" placeholder="0" id="bobotsksteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="bobotskspraktikum">
                                <span>Bobot Sks Praktikum</span>
                                <input type="number" placeholder="0" id="bobotskspraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jamteori">
                                <span>Jam/Sesi Teori</span>
                                <input type="number" placeholder="0" id="jamteori"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>

                            <label for="jampraktikum">
                                <span>Jam/Sesi Praktikum</span>
                                <input type="number" placeholder="0" id="jampraktikum"
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none">
                            </label>
                        </form>

                    </div>
                    <div class="mb-20"></div>

                    <!-- BUTTON -->
                    <div class="flex justify-center mt-8">
                        <button type="button" onclick="saveEditMatkuliah8()"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!--popupsukses editmatakuliah-->
        <div id="popupSuksesEditMatakuliah"
            class="fixed top-5 right-5 hidden  bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>

    </body>
    <script src="{{ asset('js/kurikulum.js') }}"></script>
</x-layout.layout>