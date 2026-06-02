<x-layout.layout>

<body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
    <div class="flex flex-col lg:flex-row h-screen px-4 py-4 gap-4">

        {{-- SIDEBAR --}}
        <aside class="w-64 rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
            <div class="mb-10 flex items-center gap-3">
                <div class="h-12 w-20 rounded-full bg-cover bg-center"
                    style="background-image: url('{{ asset('images/logo prism.png') }}');"></div>
                <div>
                    <h1 class="text-[#0161C5] text-2xl font-bold">PRISM</h1>
                    <p class="text-xs text-[#0161C5]">platform for resource &amp; study Management</p>
                </div>
            </div>

                    <nav class="space-y-3">
            <a href="/admin/tim-kurikulum"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/Structure.svg') }}" class="h-4 w-4">Dashboard</a>
            <a href="/admin/kurikulum"
                class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1">Kurikulum</a>
            <a href="/admin/matakuliah"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4">Matakuliah</a>
            <a href="/admin/kustomisasi"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kustomisasi(biru).svg') }}" class="h-4 w-4">Kustomisasi</a>
            <a href="/admin/profile-tim-kurikulum"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>
        </nav>
        </aside>

        {{-- KONTEN --}}
        <main class="flex-1 px-4">
            {{-- HEADER --}}
            <div class="flex items-start justify-between mb-6">
                <h1 class="text-2xl font-semibold">Kurikulum</h1>
                <div class="flex flex-col items-end gap-6">
                    <img src="{{ asset('images/Profile Circle.svg') }}" alt="profil"
                        class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">
                </div>
            </div>

                {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div id="toastSuccess"
                class="fixed top-5 right-5 z-[999] bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg text-sm font-medium flex items-start gap-3">
                <span>{{ session('success') }}</span>
                <button onclick="document.getElementById('toastSuccess').remove()" class="text-white font-bold text-lg leading-none cursor-pointer">✕</button>
            </div>
        @endif

        @if($errors->any())
            <div id="toastError"
                class="fixed top-5 right-5 z-[999] bg-red-500 text-white px-6 py-4 rounded-xl shadow-lg text-sm font-medium max-w-sm flex items-start gap-3">
                <ul class="space-y-1 flex-1">
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
                <button onclick="document.getElementById('toastError').remove()" class="text-white font-bold text-lg leading-none cursor-pointer">✕</button>
            </div>
        @endif

       
            <div class="flex gap-4 h-[90%]">

                {{-- DAFTAR KURIKULUM --}}
                <div class="w-48 space-y-3 mt-5">
                    <button id="btnTambahKurikulum" onclick="openTambahKurikulum()"
                        class="w-full bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 rounded-lg shadow text-white text-center flex items-center justify-center gap-1 cursor-pointer">
                        Tambah <img src="{{ asset('images/icon-plus.svg') }}">
                    </button>

                    @foreach($kurikulums as $kurikulum)
                        <div onclick="showKurikulum({{ $kurikulum->id_kurikulum }})"
                            class="bg-gradient-to-r from-[#4363E3] to-[#9A55FF] text-white p-5 rounded-lg mx-auto cursor-pointer">
                            Kurikulum {{ $kurikulum->nama_kurikulum }}
                        </div>
                    @endforeach
                </div>

                {{-- PANEL KURIKULUM --}}
                @foreach($kurikulums as $kurikulum)
                    @php
                        $grouped = $kurikulum->detailKurikulums->groupBy('semester');
                    @endphp

                    <div id="kurikulum-{{ $kurikulum->id_kurikulum }}"
                        class="kurikulum-content flex-1 bg-white rounded-2xl shadow p-6 overflow-y-auto mb-4 hidden">

                        {{-- JUDUL --}}
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent mx-auto">
                                Kurikulum {{ $kurikulum->nama_kurikulum }}
                            </h2>
                            <div class="flex gap-3">
                                <button onclick="openEditModal(
                                    this,
                                    '{{ $kurikulum->id_kurikulum }}',
                                    '{{ addslashes($kurikulum->nama_kurikulum) }}',
                                    '{{ $kurikulum->tahun_mulai }}',
                                    '{{ $kurikulum->status_kurikulum }}',
                                    '{{ $kurikulum->total_semester }}'
                                )">
                                    <img src="{{ asset('images/icon-edit.png') }}" alt="edit" class="w-6 h-6 cursor-pointer">
                                </button>
                                <img src="{{ asset('images/icon-hapus.png') }}" alt="hapus" class="w-7 h-7 cursor-pointer"
                                    onclick="hapusKurikulum('{{ $kurikulum->id_kurikulum }}')">
                            </div>
                        </div>

                        {{-- SEMESTER --}}
                        <div class="space-y-4">
                            @for($i = 1; $i <= $kurikulum->total_semester; $i++)
                                @php
                                    $details = $grouped->get($i, collect());
                                @endphp

                                <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">

                                    {{-- HEADER ACCORDION --}}
                                    <div onclick="toggleSemester({{ $kurikulum->id_kurikulum }}, {{ $i }})"
                                        class="flex justify-between items-center cursor-pointer">
                                        <span class="tracking-widest font-semibold text-[#001286]">SEMESTER {{ $i }}</span>
                                        <img id="iconarrow{{ $kurikulum->id_kurikulum }}-{{ $i }}"
                                            src="{{ asset('images/icon-dropdown.svg') }}"
                                            class="h-5 w-5 transition-transform duration-300">
                                    </div>

                                    {{-- TOMBOL TAMBAH --}}
                                    <div class="flex justify-end">
                                        <button id="btnTambah{{ $kurikulum->id_kurikulum }}-{{ $i }}"
                                            onclick="openModalTambahMatkul({{ $kurikulum->id_kurikulum }}, {{ $i }})"
                                            class="hidden mt-2 text-sm bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-2 py-1 rounded-lg shadow flex items-center justify-center gap-1 cursor-pointer">
                                            Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-5 w-5">
                                        </button>
                                    </div>

                                    {{-- TABEL --}}
                                    <div id="semesterContent{{ $kurikulum->id_kurikulum }}-{{ $i }}" class="mt-3 hidden">
                                        <div class="rounded-t-lg overflow-hidden shadow border border-gray-300">
                                            <table class="w-full text-xs border-collapse">
                                                <colgroup>
                                                    <col class="w-[40px]">
                                                    <col class="w-[70px]">
                                                    <col class="w-[150px]">
                                                    <col class="w-[50px]">
                                                    <col class="w-[40px]">
                                                    <col class="w-[40px]">
                                                    <col class="w-[40px]">
                                                    <col class="w-[40px]">
                                                    <col class="w-[90px]">
                                                    <col class="w-[70px]">
                                                    <col class="w-[80px]">
                                                </colgroup>
                                                <thead>
                                                    <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                                        <th rowspan="2" class="p-2">No</th>
                                                        <th rowspan="2" class="p-2">Kode</th>
                                                        <th rowspan="2" class="p-2 text-left">Nama</th>
                                                        <th rowspan="2" class="p-2">Sks</th>
                                                        <th colspan="2" class="p-2">Bobot SKS</th>
                                                        <th colspan="2" class="p-2">Jam/Sesi</th>
                                                        <th rowspan="2" class="p-2">Kategori</th>
                                                        <th rowspan="2" class="p-2">Silabus</th>
                                                        <th rowspan="2" class="p-2">Aksi</th>
                                                    </tr>
                                                    <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                                        <th class="p-1">T</th>
                                                        <th class="p-1">P</th>
                                                        <th class="p-1">T</th>
                                                        <th class="p-1">P</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($details as $idx => $detail)
                                                        <tr class="text-[10px] text-center border-t border-gray-100 hover:bg-blue-50">
                                                            <td class="p-2">{{ $idx + 1 }}</td>
                                                            <td class="p-2">{{ $detail->matakuliah->kode_matkul }}</td>
                                                            <td class="p-2 text-left">{{ $detail->matakuliah->nama_matkul }}</td>
                                                            <td class="p-2">{{ $detail->sks }}</td>
                                                            <td class="p-2">{{ $detail->bobot_teori ?? '-' }}</td>
                                                            <td class="p-2">{{ $detail->bobot_praktikum ?? '-' }}</td>
                                                            <td class="p-2">{{ $detail->sesi_teori ?? '-' }}</td>
                                                            <td class="p-2">{{ $detail->sesi_praktikum ?? '-' }}</td>
                                                            <td class="p-2 capitalize">{{ $detail->status_matkul }}</td>

                                                            {{-- SILABUS --}}
                                                            <td class="p-2 flex justify-center items-center">
                                                                <img src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                                                    class="cursor-pointer"
                                                                    data-id-detail="{{ $detail->id_detail }}"
                                                                    data-action="{{ route('admin.silabus.storeOrUpdate', $detail->id_detail) }}"
                                                                    data-id-silabus="{{ $detail->silabus?->id_silabus ?? '' }}"
                                                                    data-nama-mk="{{ e($detail->matakuliah->nama_matkul) }}"
                                                                    data-kode="{{ e($detail->matakuliah->kode_matkul) }}"
                                                                    data-sks="{{ e($detail->sks) }}"
                                                                    data-deskripsi="{{ e($detail->silabus?->deskripsi ?? '') }}"
                                                                    data-cpm="{{ e($detail->silabus?->cpm ?? '') }}"
                                                                    data-cpk="{{ e($detail->silabus?->cpk ?? '') }}"
                                                                    data-bahan-pustaka="{{ e($detail->silabus?->bahan_pustaka ?? '') }}"
                                                                    data-file-rps="{{ e($detail->silabus?->file_rps ?? '') }}"
                                                                    onclick="openModalSilabus(this)">
                                                            </td>

                                                            {{-- AKSI --}}
                                                            <td class="p-2">
                                                                <div class="flex justify-center items-center gap-2">
                                                                    <img src="{{ asset('images/icon-edit.svg') }}"
                                                                        class="w-3 h-3 cursor-pointer"
                                                                        data-id-detail="{{ $detail->id_detail }}"
                                                                        data-id-mk="{{ $detail->id_MK }}"
                                                                        data-kode="{{ $detail->matakuliah->kode_matkul }}"
                                                                        data-nama="{{ $detail->matakuliah->nama_matkul }}"
                                                                        data-semester="{{ $detail->semester }}"
                                                                        data-sks="{{ $detail->sks }}"
                                                                        data-bobot-teori="{{ $detail->bobot_teori ?? 0 }}"
                                                                        data-bobot-praktikum="{{ $detail->bobot_praktikum ?? 0 }}"
                                                                        data-sesi-teori="{{ $detail->sesi_teori ?? 0 }}"
                                                                        data-sesi-praktikum="{{ $detail->sesi_praktikum ?? 0 }}"
                                                                        data-status-matkul="{{ $detail->status_matkul }}"
                                                                        onclick="openModalEditMatkul(this)">
                                                                    <img src="{{ asset('images/icon-hapus.svg') }}"
                                                                        class="w-4 h-4 cursor-pointer"
                                                                        onclick="hapusDetailKurikulum({{ $detail->id_detail }})">
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        {{-- FORM HAPUS --}}
                                                        <tr class="hidden">
                                                            <td colspan="11">
                                                                <form id="deleteDetailForm_{{ $detail->id_detail }}"
                                                                    action="{{ route('admin.detail-kurikulum.destroy', $detail->id_detail) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </td>
                                                        </tr>

                                                    @empty
                                                        <tr>
                                                            <td colspan="11"
                                                                class="p-4 text-center text-gray-400 italic text-xs">
                                                                Belum ada matakuliah untuk semester ini.
                                                                Klik <strong>Tambah</strong> untuk menambahkan.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                    </div>
                @endforeach

            </div>
        </main>
    </div>

    {{-- MODAL TAMBAH KURIKULUM --}}
    <div id="tambahkurikulum" class="fixed inset-0 hidden items-center justify-center bg-black/40">
        <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
            <button onclick="closeTambahKurikulum()"
                class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">✕</button>
            <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">Tambah Kurikulum</h2>
            <div class="max-w-lg text-sm">
                <form action="{{ route('admin.kurikulum.store') }}" method="POST">
                    @csrf
                    <label for="namakur">
                        <span>Nama Kurikulum</span>
                        <input name="nama_kurikulum" type="text" id="namakur"
                            placeholder="Masukkan nama kurikulum"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 focus:outline-none"
                            required>
                    </label>
                    <label for="tahunmulai">
                        <span>Tahun Mulai</span>
                        <input name="tahun_mulai" type="text" id="tahunmul"
                            placeholder="Masukkan tahun mulai"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 focus:outline-none"
                            required>
                    </label>
                    <label>
                        <span class="text-sm">Semester</span>
                        <div class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200 w-fit">
                            <div id="valueBoxTambah"
                                class="flex items-center justify-center w-10 h-6 rounded-lg border border-gray-300 shadow-lg text-sm text-gray-600">
                                0
                            </div>
                            <input type="hidden" name="total_semester" id="semesterInputTambah" value="0">
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
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- MODAL EDIT KURIKULUM --}}
    <div id="editKurikulum" class="fixed inset-0 hidden items-center justify-center bg-black/40">
        <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
            <button onclick="closeEditKurikulum()"
                class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">✕</button>
            <h2 class="mb-6 text-center text-lg font-semibold text-blue-700">Edit Kurikulum</h2>
            <div class="max-w-lg text-sm">
                <form id="formEdit" method="POST">
                    @csrf
                    @method('PUT')
                    <label>
                        <span>Nama Kurikulum</span>
                        <input type="text" id="nama_kurikulum" name="nama_kurikulum"
                            placeholder="Masukkan nama kurikulum"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 focus:outline-none"
                            required>
                    </label>
                    <label>
                        <span>Tahun Mulai</span>
                        <input type="text" id="tahun_mulai" name="tahun_mulai"
                            placeholder="Masukkan tahun mulai"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded-lg w-full block text-sm mb-2 focus:outline-none"
                            required>
                    </label>
                    <label>
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
                        <div class="flex items-center gap-2 bg-gray-100 rounded-xl px-2 py-1 border border-blue-200 w-fit">
                            <div id="valueBoxEdit"
                                class="flex items-center justify-center w-10 h-6 rounded-lg border border-gray-300 shadow-lg text-sm text-gray-600">
                                0
                            </div>
                            <input type="hidden" name="total_semester" id="semesterInputEdit" value="0">
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
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] py-2 text-white cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- FORM HAPUS KURIKULUM --}}
    @foreach($kurikulums as $kurikulum)
        <form id="deleteForm_{{ $kurikulum->id_kurikulum }}"
            action="{{ route('admin.kurikulum.destroy', $kurikulum->id_kurikulum) }}"
            method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    @endforeach

    {{-- MODAL TAMBAH MATAKULIAH --}}
    <div id="modalTambahMatkul" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
        <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl p-8 shadow-xl relative mx-auto overflow-y-auto">

            <button type="button" onclick="closeModalTambahMatkul()"
                class="absolute top-6 right-6 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm shadow hover:bg-blue-700 transition cursor-pointer">✕</button>

            <h2 class="text-center text-xl font-bold text-[#1B4597] mb-8">Tambah Matakuliah</h2>

            <form id="formTambahMatkul" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="semester" id="inputTambahSemester">

                <div class="grid grid-cols-2 gap-x-8 gap-y-5 text-sm text-[#1B4597] font-semibold">

                    {{-- PILIH MATAKULIAH --}}
                    <div class="col-span-2">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#1B4597]">Matakuliah</span>
                            <div class="relative mt-1">
                                <select name="id_MK"
                                    class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black"
                                    required>
                                    <option value="">-- Pilih Matakuliah --</option>
                                    @foreach($matakuliahs as $mk)
                                        <option value="{{ $mk->id_MK }}">{{ $mk->kode_matkul }} — {{ $mk->nama_matkul }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>
                    </div>

                    {{-- KATEGORI --}}
                    <label class="block">
                        <span>Kategori</span>
                        <div class="relative">
                            <select name="status_matkul" id="tambahStatusMatkul"
                                class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1"
                                required>
                                <option value="">--Pilih--</option>
                                <option value="langsung">Wajib</option>
                                <option value="tidak langsung">Pilihan</option>
                                <option value="pendukung">Pendukung</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center mt-1">
                                <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                            </div>
                        </div>
                    </label>

                    {{-- SKS --}}
                    <label class="block">
                        <span>SKS</span>
                        <input type="number" name="sks" placeholder="Masukkan SKS"
                            min="1" max="10"
                            class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1"
                            required>
                    </label>

                    {{-- BOBOT DAN SESI --}}
                    <div class="col-span-2 grid grid-cols-4 gap-4 mt-2">
                        <label class="block">
                            <span class="text-xs">Bobot SKS teori</span>
                            <input type="number" name="bobot_teori" value="0" step="0.01" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Bobot SKS praktikum</span>
                            <input type="number" name="bobot_praktikum" value="0" step="0.01" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Jam/sesi teori</span>
                            <input type="number" name="sesi_teori" value="0" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Jam/sesi praktikum</span>
                            <input type="number" name="sesi_praktikum" value="0" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                    </div>

                    {{-- DESKRIPSI --}}
                    <label class="block mt-4">
                        <span>Deskripsi</span>
                        <textarea name="deskripsi" placeholder="Masukkan deskripsi matakuliah"
                            class="w-full px-4 py-3 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1 resize-none"
                            rows="4"></textarea>
                    </label>

                    {{-- CPM --}}
                    <label class="block mt-4">
                        <span>Capaian Pembelajaran Umum</span>
                        <textarea name="cpm" placeholder="Masukkan capaian pembelajaran umum"
                            class="w-full px-4 py-3 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1 resize-none"
                            rows="4"></textarea>
                    </label>

                    {{-- CPK --}}
                    <label class="block mt-2">
                        <span>Capaian Pembelajaran Khusus</span>
                        <textarea name="cpk" placeholder="Masukkan capaian pembelajaran khusus"
                            class="w-full px-4 py-3 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1 resize-none"
                            rows="4"></textarea>
                    </label>

                    {{-- DAFTAR PUSTAKA --}}
                    <label class="block mt-2">
                        <span>Daftar Pustaka</span>
                        <textarea name="bahan_pustaka" placeholder="Masukkan daftar pustaka matakuliah"
                            class="w-full px-4 py-3 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1 resize-none"
                            rows="4"></textarea>
                    </label>

                    {{-- FILE RPS --}}
                    <div class="block col-span-2 mt-4">
                        <span class="text-sm">File RPS</span>
                        <div id="dropAreaTambah"
                            class="relative flex flex-col items-center justify-center gap-2 w-full h-40 py-4 mt-2
                                   border-2 border-dashed border-blue-200 rounded-2xl text-center bg-gray-50/50">
                            <p id="uploadTextTambah" class="text-sm text-gray-700 font-bold">
                                Pilih file atau seret dan lepas di sini
                            </p>
                            <div id="uploadIconTambah">
                                <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                            </div>
                            <img id="fileIconTambah" src="{{ asset('images/icon-silabuskurikulum.svg') }}"
                                class="hidden w-12" alt="">
                            <p id="fileNameTambah" class="text-xs text-gray-500"></p>
                            <label for="tambahFileRps"
                                class="px-5 py-1.5 bg-[#D9E5FF] text-blue-700 rounded-full text-xs font-semibold cursor-pointer hover:bg-blue-200 transition">
                                Pilih File
                            </label>
                            <button id="removeTambahFile" type="button" onclick="removeTambahFile()"
                                class="hidden absolute top-2 right-2 bg-white border border-gray-200 rounded-lg px-2 py-1 shadow cursor-pointer">
                                <img src="{{ asset('images/icon-hapus.svg') }}" class="w-4 h-4">
                            </button>
                            <input id="tambahFileRps" type="file" name="file_rps"
                                class="hidden" accept=".pdf,.doc,.docx">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit"
                        class="px-12 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow-md hover:opacity-90 transition cursor-pointer">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL EDIT MATAKULIAH --}}
    <div id="modalEditMatkul" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
        <div class="w-[800px] bg-white rounded-2xl p-8 shadow-xl relative mx-auto">

            <button type="button" onclick="closeModalEditMatkul()"
                class="absolute top-6 right-6 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm shadow hover:bg-blue-700 transition cursor-pointer">✕</button>

            <h2 class="text-center text-xl font-bold text-[#1B4597] mb-8">Update Matakuliah</h2>

            <form id="formEditMatkul" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="semester" id="editSemester">

                <div class="grid grid-cols-2 gap-x-8 gap-y-5 text-sm text-[#1B4597] font-semibold">

                    {{-- PILIH MATAKULIAH --}}
                    <div class="col-span-2">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#1B4597]">Matakuliah</span>
                            <div class="relative mt-1">
                                <select name="id_MK" id="editIdMK"
                                    class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black"
                                    required>
                                    <option value="">-- Pilih Matakuliah --</option>
                                    @foreach($matakuliahs as $mk)
                                        <option value="{{ $mk->id_MK }}">{{ $mk->kode_matkul }} — {{ $mk->nama_matkul }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                    <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                                </div>
                            </div>
                        </label>
                    </div>

                    {{-- KATEGORI --}}
                    <label class="block">
                        <span>Kategori</span>
                        <div class="relative">
                            <select name="status_matkul" id="editStatusMatkul"
                                class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1"
                                required>
                                <option value="langsung">Wajib</option>
                                <option value="tidak langsung">Pilihan</option>
                                <option value="pendukung">Pendukung</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center mt-1">
                                <img src="{{ asset('images/icon-dropdown.svg') }}" class="h-4 w-4">
                            </div>
                        </div>
                    </label>

                    {{-- SKS --}}
                    <label class="block">
                        <span>SKS</span>
                        <input type="number" name="sks" id="editSks" placeholder="Masukkan SKS"
                            min="1" max="10"
                            class="w-full px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1"
                            required>
                    </label>

                    {{-- BOBOT DAN SESI --}}
                    <div class="col-span-2 grid grid-cols-4 gap-4 mt-2">
                        <label class="block">
                            <span class="text-xs">Bobot SKS teori</span>
                            <input type="number" name="bobot_teori" id="editBobotTeori" value="0" step="0.01" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Bobot SKS praktikum</span>
                            <input type="number" name="bobot_praktikum" id="editBobotPraktikum" value="0" step="0.01" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Jam/sesi teori</span>
                            <input type="number" name="sesi_teori" id="editSesiTeori" value="0" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                        <label class="block">
                            <span class="text-xs">Jam/sesi praktikum</span>
                            <input type="number" name="sesi_praktikum" id="editSesiPraktikum" value="0" min="0"
                                class="w-full border border-gray-200 shadow-sm rounded-xl px-2 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500 font-normal text-black mt-1">
                        </label>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit"
                        class="px-12 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow-md hover:opacity-90 transition cursor-pointer">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL KELOLA SILABUS --}}
    <div id="modalSilabus" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
        <div class="w-[800px] max-h-[90vh] bg-white rounded-2xl shadow-xl relative overflow-hidden">

            <div class="flex justify-center items-center py-3 relative border-b border-gray-200">
                <h2 class="text-lg font-semibold text-[#1B4597]">Kelola Silabus</h2>
                <button onclick="closeModalSilabus()"
                    class="absolute right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">✕</button>
            </div>

            <div class="p-5 overflow-y-auto max-h-[75vh]">
                <form id="formSilabus" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_detail" id="silabusDetailId" value="">

                    <table class="w-full border border-gray-400 border-collapse text-sm">
                        <tr>
                            <td class="border border-gray-400 p-2 w-40 align-top font-medium">Mata Kuliah</td>
                            <td class="border border-gray-400 p-2 w-10 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2 font-semibold" id="silabusNamaMK"></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Kode</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2" id="silabusKode"></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">SKS</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2" id="silabusSks"></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Deskripsi Mata Kuliah</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2">
                                <textarea name="deskripsi" id="silabusDeskripsi"
                                    oninput="autoResize(this)" rows="2"
                                    placeholder="Masukkan deskripsi mata kuliah..."
                                    class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Capaian Pembelajaran Umum</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2">
                                <textarea name="cpm" id="silabusCpm"
                                    oninput="autoResize(this)" rows="2"
                                    placeholder="Masukkan capaian pembelajaran umum..."
                                    class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Capaian Pembelajaran Khusus</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2">
                                <textarea name="cpk" id="silabusCpk"
                                    oninput="autoResize(this)" rows="2"
                                    placeholder="Masukkan capaian pembelajaran khusus..."
                                    class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Daftar Pustaka</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2">
                                <textarea name="bahan_pustaka" id="silabusBahanPustaka"
                                    oninput="autoResize(this)" rows="2"
                                    placeholder="Masukkan daftar pustaka..."
                                    class="w-full outline-none bg-transparent resize-none overflow-hidden"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 align-top font-medium">Rencana Pembelajaran Semester</td>
                            <td class="border border-gray-400 p-2 text-center align-top">:</td>
                            <td class="border border-gray-400 p-2">
                                <input type="hidden" id="silabusIdHidden">
                                {{-- FILE EXISTING --}}
                                <div id="silabusFileContainer" class="mb-2 hidden">
                                    <div class="flex items-center justify-between border border-gray-300 rounded-xl px-3 py-2 shadow-sm bg-white">
                                        <div class="flex items-center gap-2">
                                            <img src="{{ asset('images/icon-silabuskurikulum.svg') }}" class="w-5 h-5">
                                            <p id="silabusFileName" class="text-sm font-medium text-gray-800">RPS.pdf</p>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <a id="silabusFileLink" href="#" target="_blank"
                                                class="text-blue-600 text-xs hover:underline font-semibold">Lihat File</a>
                                            <button id="btnDeleteSilabusFile" type="button" onclick="deleteExistingSilabusFile()" class="text-red-500 hover:text-red-700 transition cursor-pointer">
                                                <img src="{{ asset('images/icon-hapus.svg') }}" class="w-4 h-4">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- UPLOAD FILE BARU --}}
                                <div id="dropAreaSilabus"
                                    class="relative flex flex-col items-center justify-center gap-2 w-full h-36 py-4 mt-2
                                           border-2 border-dashed border-blue-200 rounded-2xl text-center bg-gray-50/50">
                                    <p id="uploadTextSilabus" class="text-sm text-gray-700 font-bold">
                                        Pilih file atau seret dan lepas di sini
                                    </p>
                                    <div id="uploadIconSilabus">
                                        <svg class="w-10 h-10 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                    </div>
                                    <label for="silabusFileRps"
                                        class="px-5 py-1.5 bg-[#D9E5FF] text-blue-700 rounded-full text-xs font-semibold cursor-pointer hover:bg-blue-200 transition">
                                        Pilih File
                                    </label>
                                    <input id="silabusFileRps" type="file" name="file_rps"
                                        class="hidden" accept=".pdf,.doc,.docx">
                                    <p id="silabusNewFileName" class="mt-1 text-xs text-gray-500 hidden"></p>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <div class="flex justify-center py-6">
                        <button type="submit"
                            class="px-8 py-2 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white shadow cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- FORM HAPUS SILABUS --}}
        <form id="deleteSilabusForm" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>

</body>
<script src="{{ asset('js/kurikulum.js') }}"></script>
</x-layout.layout>