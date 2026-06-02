<x-layout.layout>
<body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
    <div class="flex h-screen p-4">

        <!-- Sidebar -->
        <aside class="w-64 rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
            <div class="mb-10 flex items-center gap-3">
                <div class="h-12 w-20 rounded-full bg-cover bg-center"
                    style="background-image: url('{{ asset('images/logo prism.svg') }}');"></div>
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
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1">Kurikulum</a>
            <a href="/admin/matakuliah"
                class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                <img src="{{ asset('images/icon-matakuliah (putih).svg') }}" class="h-4 w-4">Matakuliah</a>
            <a href="/admin/kustomisasi"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/icon-kustomisasi (biru).svg') }}" class="h-4 w-4">Kustomisasi</a>
            <a href="/admin/profile-tim-kurikulum"
                class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>
        </nav>
        </aside>

        <!-- Main -->
        <main class="ml-6 flex-1 overflow-y-auto">

            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-semibold">Matakuliah</h1>
                <div class="flex items-center gap-4">
                    <button onclick="openTambahModal()"
                        class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow flex items-center gap-1 cursor-pointer">
                        Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-4 w-4">
                    </button>
                    <img src="{{ asset('images/Profile Circle.svg') }}" alt="profil"
                        class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">
                </div>
            </div>

            {{-- Flash messages --}}
            @if(session('success'))
                <div class="mb-3 px-4 py-2 bg-green-100 border border-green-300 text-green-700 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="mb-3 px-4 py-2 bg-red-100 border border-red-300 text-red-700 rounded-lg text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    @if(session('error'))
            <div id="toastError"
                class="fixed top-5 right-5 z-[999] bg-red-500 text-white px-6 py-4 rounded-xl shadow-lg text-sm font-medium max-w-sm flex items-start gap-3">
                <span class="flex-1">{{ session('error') }}</span>
                <button onclick="document.getElementById('toastError').remove()" class="text-white font-bold text-lg leading-none cursor-pointer">✕</button>
            </div>
        @endif
            <div class="px-4 space-y-3">
                @forelse($matakuliahs as $mk)
                    <div class="bg-white rounded-xl px-6 py-4 shadow flex justify-between items-center border border-gray-300">
                        <div class="grid grid-cols-[120px_1fr] text-sm w-full">
                            <p class="font-medium text-gray-600">{{ $mk->kode_matkul }}</p>
                            <p>{{ $mk->nama_matkul }}</p>
                        </div>
                        <div class="flex items-center gap-3 ml-4">
                            <img src="{{ asset('images/icon-edit.svg') }}"
                                class="w-4 h-4 cursor-pointer"
                                onclick="openEditModal('{{ $mk->id_MK }}', '{{ addslashes($mk->kode_matkul) }}', '{{ addslashes($mk->nama_matkul) }}')"
                                alt="edit">
                            <img src="{{ asset('images/icon-hapus.svg') }}"
                                class="w-4 h-4 cursor-pointer"
                                onclick="hapusMatakuliah('{{ $mk->id_MK }}')"
                                alt="hapus">
                        </div>
                    </div>

                    {{-- Hidden delete form --}}
                    <form id="deleteForm_{{ $mk->id_MK }}"
                        action="{{ route('admin.matakuliah.destroy', $mk->id_MK) }}"
                        method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                @empty
                    <div class="text-center text-gray-400 italic text-sm py-8">
                        Belum ada matakuliah. Klik <strong>Tambah</strong> untuk menambahkan.
                    </div>
                @endforelse
            </div>
        </main>
    </div>

    {{-- Modal Tambah --}}
    <div id="modalTambah" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
        <div class="w-[460px] bg-white rounded-2xl p-8 shadow-xl relative">
            <button onclick="closeTambahModal()"
                class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">✕</button>
            <h2 class="text-center text-lg font-bold text-[#1B4597] mb-6">Tambah Matakuliah</h2>
            <form action="{{ route('admin.matakuliah.store') }}" method="POST">
                @csrf
                <div class="space-y-4 text-sm">
                    <label class="block">
                        <span class="font-semibold text-[#1B4597]">Kode</span>
                        <input type="text" name="kode_matkul" placeholder="Masukkan kode matakuliah"
                            class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </label>
                    <label class="block">
                        <span class="font-semibold text-[#1B4597]">Nama</span>
                        <input type="text" name="nama_matkul" placeholder="Masukkan nama matakuliah"
                            class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </label>
                </div>
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-10 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow cursor-pointer">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div id="modalEdit" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
        <div class="w-[460px] bg-white rounded-2xl p-8 shadow-xl relative">
            <button onclick="closeEditModal()"
                class="absolute top-4 right-4 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer">✕</button>
            <h2 class="text-center text-lg font-bold text-[#1B4597] mb-6">Edit Matakuliah</h2>
            <form id="formEdit" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-4 text-sm">
                    <label class="block">
                        <span class="font-semibold text-[#1B4597]">Kode</span>
                        <input type="text" name="kode_matkul" id="editKode" placeholder="Masukkan kode matakuliah"
                            class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </label>
                    <label class="block">
                        <span class="font-semibold text-[#1B4597]">Nama</span>
                        <input type="text" name="nama_matkul" id="editNama" placeholder="Masukkan nama matakuliah"
                            class="w-full mt-1 px-4 py-2.5 border border-gray-200 shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </label>
                </div>
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-10 py-2.5 rounded-full bg-gradient-to-r from-[#0284FD] to-[#3207CC] text-white font-bold shadow cursor-pointer">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
<script>
    function openTambahModal() {
        const m = document.getElementById('modalTambah');
        m.classList.remove('hidden'); m.classList.add('flex');
    }
    function closeTambahModal() {
        const m = document.getElementById('modalTambah');
        m.classList.add('hidden'); m.classList.remove('flex');
    }
    function openEditModal(id, kode, nama) {
        document.getElementById('editKode').value = kode;
        document.getElementById('editNama').value = nama;
        document.getElementById('formEdit').action = `/admin/matakuliah/${id}`;
        const m = document.getElementById('modalEdit');
        m.classList.remove('hidden'); m.classList.add('flex');
    }
    function closeEditModal() {
        const m = document.getElementById('modalEdit');
        m.classList.add('hidden'); m.classList.remove('flex');
    }
    function hapusMatakuliah(id) {
        if (confirm('Yakin ingin menghapus matakuliah ini?')) {
            document.getElementById(`deleteForm_${id}`).submit();
        }
    }
    // Tutup modal klik backdrop
    ['modalTambah', 'modalEdit'].forEach(id => {
        const el = document.getElementById(id);
        el.addEventListener('click', e => {
            if (e.target === el) { el.classList.add('hidden'); el.classList.remove('flex'); }
        });
    });
</script>
</x-layout.layout>