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
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold 
        hover:bg-gray-200"> 
                        <img src="{{ asset('images/Structure.svg') }}" class="h-4 w-4">Dashboard</a> 
                    <a href="/admin/kurikulum" 
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow"> 
                        <img src="{{ asset('images/untuk kurikulum putih.svg') }}" class="h-4 w-4 mb-1 ">Kurikulum</a> 
                    <a href="/admin/matakuliah" 
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200"> 
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Matakuliah</a> 
                    <a href="/admin/profile-tim-kurikulum" 
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold 
hover:bg-gray-200"> 
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
 
                    <!-- List Kurikulum--> 
 
                    {{-- Tambah --}} 
                    <div class="w-48 space-y-3 mt-5"> 
                        <button onclick="openTambahKurikulum()" 
                            class="w-full bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2  rounded-lg shadow text-white text-center flex items-center justify-center gap
1 cursor-pointer"> 
                            Tambah <img src="{{ asset('images/icon-plus.svg') }}"> 
                        </button> 
 
 
                        {{-- blok kurikulum --}} 
                        @foreach ($kurikulums as $kurikulum) 
                            <div onclick="showKurikulum({{ $kurikulum->id_kurikulum }})" 
                                class="bg-gradient-to-r from-[#4363E3] to-[#9A55FF] text-white p-5 rounded-lg mx-auto cursor-pointer"> 
                                Kurikulum {{ $kurikulum->nama_kurikulum }} 
                            </div> 
                        @endforeach 
                    </div> 
 
 
 
 
 
 
 
                    <!-- Content kurikulum --> 
 
                    @foreach ($kurikulums as $kurikulum) 
                        <div id="kurikulum-{{ $kurikulum->id_kurikulum }}" 
                            class="kurikulum-content flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4 hidden"> 
 
                            <!-- Title --> 
                            <div class="flex justify-between items-center mb-6"> 
                                <h2 
                                    class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB] 
                                                                                                    bg-clip-text text-transparent mx-auto"> 
                                    Kurikulum 
                                    {{ $kurikulum->nama_kurikulum }} 
                                </h2> 
                                <div class="flex gap-3"> 
 
 
                                    {{-- Edit --}} 
                                    <button onclick="openEditModal( 
                                                                                                this, 
                                                                                                '{{ $kurikulum->id_kurikulum }}', 
                                                                                                '{{ $kurikulum->nama_kurikulum }}', 
                                                                                                '{{ $kurikulum->tahun_mulai }}', 
                                                                                                '{{ $kurikulum->status_kurikulum }}', 
                                                                                                '{{ $kurikulum->total_semester }}' 
                                                                                                )"> 
                                        <img src="{{ asset('images/icon-edit.png') }}" alt="hapus" 
                                            class="w-6 h-6 cursor-pointer"> </button> 
 
                                    {{-- hapus --}} 
                                    <img src="{{ asset('images/icon-hapus.png') }}" alt="edit" class="w-7 h-7" 
                                        onclick="hapusKurikulum('{{ $kurikulum->id_kurikulum }}')"> 
                                </div> 
                            </div> 
 
                            @for($i = 1; $i <= $kurikulum->total_semester; $i++) 
                                <!-- Semester List --> 
                                <div class="space-y-4 mb-5"> 
 
                                    <!--semester 1---> 
                                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300"> 
 
                                        <div onclick="toggleSemester(8, 1)" 
                                            class="flex justify-between items-center cursor-pointer"> 
                                            <span class="tracking-widest font-semibold text-[#001286]"> 
                                                SEMESTER {{ $i }} 
                                            </span> 
 
                                            <img id="iconarrow8-1" src="{{ asset('images/icon-dropdown.svg') }}" 
                                                class="h-5 w-5 transition-transform duration-300"> 
                                        </div> 
 
                                        <!-- BUTTON TAMBAH (DI BAWAH KANAN) --> 
                                        <div class="flex justify-end"> 
                                            <button id="btnTambah8-1" onclick="openModalMatkul({{ $kurikulum->id_kurikulum }}, {{ $i }})" 
                                                class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow text-center flex 
items-center justify-center gap-1 cursor-pointer"> 
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
                                </div> 
                            @endfor 
                        </div> 
                    @endforeach 
 
 
 
                </div> 
 
 
 
            </main> 
        </div> 
 
 
 
 
 
 
 
 
        {{-- MODAL KURIKULUM --}} 
 
 
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
 
                    <form action="{{ route('admin.kurikulum.store') }}" method="POST"> 
                        @csrf 
 
                        <label for="namakur"> 
                            <span>Nama Kurikulum</span> 
                            <input name="nama_kurikulum" type="text" id="namakur" placeholder="Masukkan nama kurikulum" 
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 
                                focus:outline-none "> 
                        </label> 
 
                        <label for="tahunmulai"> 
                            <span>Tahun Mulai</span> 
                            <input name="tahun_mulai" type="text" id="tahunmul" placeholder="Masukkan tahun Mulai" 
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 
                                focus:outline-none"> 
                        </label> 
 
                        <label> 
                            <span class="text-sm">Semester</span> 
 
                            <div 
                                class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200 w-fit"> 
 
                                <!-- Tampilan angka --> 
                                <div id="valueBoxTambah" 
                                    class="flex items-center justify-center w-10 h-6 rounded-lg border border-gray-300 shadow-lg text-sm text-gray-600"> 
                                    0 
                                </div> 
 
                                <!-- Input yang dikirim --> 
                                <input type="hidden" name="total_semester" id="semesterInputTambah" value="0"> 
 
                                <!-- Tombol --> 
                                <div class="flex flex-col justify-center"> 
                                    <button type="button" onclick="tambahTambah()" class="rotate-180 h-5 w-5"> 
                                        <img src="{{ asset('images/icon-dropdown.svg') }}"> 
                                    </button> 
 
                                    <button type="button" onclick="kurangTambah()" class="h-5 w-5"> 
                                        <img src="{{ asset('images/icon-dropdown.svg') }}"> 
                                    </button> 
                                </div> 
                            </div> 
                        </label> 
 
 
 
                        <div class="flex justify-center"> 
                            <button type="submit" onclick="saveTambah1()" 
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer"> 
                                Simpan 
                            </button> 
                        </div> 
                    </form> 
 
 
                </div> 
            </div> 
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
                    <form id="formEdit" method="POST"> 
                        @csrf 
                        @method('PUT') 
 
 
                        <label for="nama_kurikulum32"> 
                            <span>Nama Kurikulum</span> 
                            <input type="text" id="nama_kurikulum" name="nama_kurikulum" 
                                placeholder="Masukkan nama kurikulum" class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 
                                focus:outline-none "> 
                        </label> 
 
                        <label for="tahun_mulai"> 
                            <span>Tahun Mulai</span> 
                            <input type="text" id="tahun_mulai" name="tahun_mulai" placeholder="Masukkan tahun Mulai" 
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 
                                focus:outline-none"> 
                        </label> 
 
                        <label for="status_kurikulum"> 
                            <span>Status Kurikulum</span> 
                            <select name="status_kurikulum" id="status_kurikulum" 
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2" 
                                required> 
                                <option value="aktif">Aktif</option> 
                                <option value="tidak aktif">Tidak Aktif</option> 
                            </select> 
                        </label> 
 
 
                        <label> 
                            <span class="text-sm">Semester</span> 
 
                            <div 
                                class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200 w-fit"> 
 
                                <!-- Tampilan angka --> 
                                <div id="valueBoxEdit" 
                                    class="flex items-center justify-center w-10 h-6 rounded-lg border border-gray-300 shadow-lg text-sm text-gray-600"> 
                                    0 
                                </div> 
 
                                <!-- Input yang dikirim --> 
                                <input type="hidden" name="total_semester" id="semesterInputEdit" value="0"> 
 
                                <!-- Tombol --> 
                                <div class="flex flex-col justify-center"> 
                                    <button type="button" onclick="tambahEdit()" class="rotate-180 h-5 w-5"> 
                                        <img src="{{ asset('images/icon-dropdown.svg') }}"> 
                                    </button> 
 
                                    <button type="button" onclick="kurangEdit()" class="h-5 w-5"> 
                                        <img src="{{ asset('images/icon-dropdown.svg') }}"> 
                                    </button> 
                                </div> 
                            </div> 
                        </label> 
 
 
 
 
 
                        <div class="flex justify-center"> 
                            <button type="submit" onclick="saveEdit()" 
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer"> 
                                Simpan 
                            </button> 
                        </div> 
                    </form> 
                </div> 
            </div> 
        </div> 
 
 
 
 
 
        {{-- modalhapuskurikulum --}} 
        @foreach ($kurikulums as $kurikulum) 
 
            <form id="deleteForm_{{ $kurikulum->id_kurikulum }}" 
                action="{{ route('admin.kurikulum.destroy', $kurikulum->id_kurikulum) }}" method="POST" class="hidden"> 
                @csrf 
                @method('DELETE') 
            </form> 
 
        @endforeach 
 
        <!-- modaltambahmatakuliah semester 1 --> 
        <div id="modalMatkul" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50"> 
 
            <div class="w-[80vw] h-[85vh] bg-white rounded-2xl p-8 shadow-xl relative mx-auto overflow-y-auto"> 
 
                <!-- CLOSE --> 
                <button onclick="closeModalMatkul(8, 1)" 
                    class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white cursor-pointer"> 
                    ✕ 
                </button> 
 
                <h2 class="text-center text-xl font-semibold text-blue-700 mb-6"> 
                    Tambah Matakuliah 
                </h2> 
 
                <form action="formEdit" action="{{ route('admin.kurikulum.store') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf 

                    <input type="hidden" name="id_kurikulum" id="hiddenKurikulumId">
                    <input type="hidden" name="semester_id" id="hiddenSemesterId">
 
                    <div class="grid grid-cols-2 gap-x-9 gap-y-4 text-base text-[#325098]  
                            [&_input]:text-black   
                              [&_select]:text-black 
                              [&_input::placeholder]:text-gray-400"> 
 
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
                    <div class="grid grid-cols-4 gap-x-9 gap-y-4 mt-5 text-base"> 
                        <form action=""> 
 
                            <label for="bobotsksteori"> 
                                <span class="text-[#325098]">Bobot Sks Teori</span> 
                                <input type="number" placeholder="0" id="bobotsksteori" 
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none"> 
                            </label> 
 
                            <label for="bobotskspraktikum"> 
                                <span class="text-[#325098]">Bobot Sks Praktikum</span> 
                                <input type="number" placeholder="0" id="bobotskspraktikum" 
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none"> 
                            </label> 
 
                            <label for="jamteori"> 
                                <span class="text-[#325098]">Jam/Sesi Teori</span> 
                                <input type="number" placeholder="0" id="jamteori" 
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none"> 
                            </label> 
 
                            <label for="jampraktikum"> 
                                <span class="text-[#325098]">Jam/Sesi Praktikum</span> 
                                <input type="number" placeholder="0" id="jampraktikum" 
                                    class="w-full border border-gray-300 shadow-lg rounded-lg px-2 py-1 text-center focus:outline-none"> 
                            </label> 
                        </form> 
                    </div> 
 
                    <h2 class="text-center text-xl font-semibold text-blue-700 mb-6 mt-10"> 
                        Tambah Silabus 
                    </h2> 
 
                    <!-- silabus --> 
                    <div class="grid grid-cols-2 gap-x-9 gap-y-4 text-base mt-5"> 
 
                        <label for="deskripsi" class="block"> 
                            <span class="text-[#325098]">Deskripsi</span> 
                            <textarea id="deskripsi" placeholder="Masukkan Deskripsi" 
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none resize-none" 
                                rows="3"></textarea> 
                        </label> 
 
                        <label for="capaian pembelajaran umum" class="block"> 
                            <span class="text-[#325098]">Capaian Pembelajaran Umum</span> 
                            <textarea id="capaian pembelajaran umum" placeholder="Masukkan Capaian Pembelajaran Umum" 
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none resize-none" 
                                rows="3"></textarea> 
                        </label> 
 
                        <label for="capaian pembelajaran khusus" class="block"> 
                            <span class="text-[#325098]">Capaian Pembelajaran Khusus</span> 
                            <textarea id="capaian pembelajaran khusus" 
                                placeholder="Masukkan Capaian Pembelajaran Khusus" 
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none resize-none" 
                                rows="3"></textarea> 
                        </label> 
 
                        <label for="daftar isi" class="block"> 
                            <span class="text-[#325098]">Daftar Isi</span> 
                            <textarea id="daftar isi" placeholder="Masukkan Daftar Isi" 
                                class="w-full px-3 py-2 border border-gray-300 shadow-lg rounded-lg focus:outline-none resize-none" 
                                rows="3"></textarea> 
                        </label> 
 
                        <div class="block"> 
                            <span class="text-[#325098] text-base">File RPS</span> 
 
                            <div id="dropArea" class="relative flex flex-col items-center gap-3 
                                        w-full h-40 py-4 
                                        border-2 border-dashed border-blue-300  
                                            rounded-2xl text-center"> 
 
                                <!-- TEXT --> 
                                <p id="uploadText" class="text-base text-gray-600"> 
                                    choose a file or drag & drop 
                                </p> 
 
                                <!-- ICON UPLOAD --> 
                                <img id="uploadIcon" src="{{ asset('images/icon-upload.svg') }}" alt=""> 
 
                                <!-- ICON FILE (HIDDEN AWAL) --> 
                                <img id="fileIcon" src="{{ asset('images/icon-file.svg') }}" class="hidden w-12" alt=""> 
 
                                <!-- NAMA FILE --> 
                                <p id="fileName" class="text-xs  text-gray-500"></p> 
 
                                <!-- BUTTON --> 
                                <label for="fileUpload" 
                                    class="absolute bottom-4 px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs cursor-pointer"> 
                                    Browse File 
                                </label> 
 
 
 
                                <!-- DELETE BUTTON --> 
                                <button id="removeFile" 
                                    class="hidden absolute top-2 right-2 bg-white border rounded-lg px-2 py-1 shadow cursor-pointer"> 
                                    <img src="{{ asset('images/icon-hapus (merah).svg') }}"> 
                                </button> 
 
                                <input id="fileUpload" type="file" class="hidden"> 
                            </div> 
                        </div> 
 
                    </div> 
 
 
                    <div class="mb-20"></div> 
 
                    <!-- BUTTON --> 
                    <div class="flex justify-center mt-8"> 
                        <button type="submit" 
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white cursor-pointer"> 
                            Simpan 
                        </button> 
                    </div> 
                </form> 
 
            </div> 
        </div> 


                <!--modaleditmatakuliah semester 1--> 
        <div id="modalEditMatakuliah" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50"> 
 
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
                                            class="w-8 h-8 mt-2 flex items-center justify-center rounded-full bg-gradient-to-r from-[#0284FD] to-[#3502CA] shadow-lg cursor
pointer"> 
 
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

        <!--popupsukses silabus--> 
        <div id="popupSuksesSilabus" 
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg"> 
            ✅ Data berhasil disimpan 
        </div> 
 


 
 
 
    </body> 
    <script src="{{ asset('js/kurikulum.js') }}"></script> 
</x-layout.layout> 