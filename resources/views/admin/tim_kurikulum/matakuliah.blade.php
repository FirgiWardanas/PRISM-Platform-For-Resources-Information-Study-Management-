<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebbar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main -->
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header_kurikulum>Mata kuliah</x-admin.header-kurikulum>

                <div class="flex justify-end mb-4">
                    <div class="flex items-center gap-4">
                        <button onclick="openTambahModal()"
                            class="bg-gradient-to-r from-[#0282FD] to-[#3502CA] text-white px-4 py-2 rounded-lg shadow flex items-center gap-1 cursor-pointer">
                            Tambah <img src="{{ asset('images/icon-plus.svg') }}" class="h-4 w-4">
                        </button>
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
                        <button onclick="document.getElementById('toastError').remove()"
                            class="text-white font-bold text-lg leading-none cursor-pointer">✕</button>
                    </div>
                @endif
                <div class="space-y-3">
                    @forelse($matakuliahs as $mk)
                        <div class="bg-white rounded-xl p-4 shadow border border-gray-300">
                            {{-- dekstop --}}
                            <div class="hidden md:flex justify-between items-center">

                                <div class="grid grid-cols-[120px_1fr] w-full">
                                    <p class="font-medium text-gray-600">{{ $mk->kode_matkul }}</p>
                                    <p>{{ $mk->nama_matkul }}</p>
                                </div>

                                <div class="flex items-center gap-3 ml-4">
                                    <img src="{{ asset('images/icon-edit.svg') }}" class="w-5 h-5 cursor-pointer"
                                        onclick="openEditModal('{{ $mk->id_MK }}', '{{ addslashes($mk->kode_matkul) }}', '{{ addslashes($mk->nama_matkul) }}')"
                                        alt="edit">
                                    <img src="{{ asset('images/icon-hapus (merah).svg') }}" class="w-6 h-6 cursor-pointer"
                                        onclick="hapusMatakuliah('{{ $mk->id_MK }}')" alt="hapus">
                                </div>
                            </div>

                            {{-- mobile --}}
                            <div class="md:hidden flex justify-between items-start">
                                <div>
                                    <p class="font-medium text-gray-600">
                                        {{ $mk->kode_matkul }}
                                    </p>

                                    <p class="mt-3">
                                        {{ $mk->nama_matkul }}
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 ml-4">
                                    <img src="{{ asset('images/icon-edit.svg') }}" class="w-5 h-5 cursor-pointer"
                                        onclick="openEditModal('{{ $mk->id_MK }}', '{{ addslashes($mk->kode_matkul) }}', '{{ addslashes($mk->nama_matkul) }}')"
                                        alt="edit">
                                    <img src="{{ asset('images/icon-hapus.svg') }}" class="w-6 h-6 cursor-pointer"
                                        onclick="hapusMatakuliah('{{ $mk->id_MK }}')" alt="hapus">
                                </div>

                            </div>
                        </div>

                        {{-- Hidden delete form --}}
                        <form id="deleteForm_{{ $mk->id_MK }}" action="{{ route('admin.matakuliah.destroy', $mk->id_MK) }}"
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


        {{-- Modal Tambah --}}
        <div id="modalTambah" class="fixed inset-0 hidden items-center justify-center bg-black/40 z-50">
            <div class="w-[90%] max-w-[460px] bg-white rounded-2xl p-5 sm:p-8 shadow-xl relative">
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
            <div class="w-[90%] max-w-[460px] bg-white rounded-2xl p-5 sm:p-8 shadow-xl relative">
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
        // Auto dismiss toast error setelah 6 detik
        const toast = document.getElementById('toastError');
        if (toast) {
            setTimeout(() => toast.remove(), 6000);
        }
        // Tutup modal klik backdrop
        ['modalTambah', 'modalEdit'].forEach(id => {
            const el = document.getElementById(id);
            el.addEventListener('click', e => {
                if (e.target === el) { el.classList.add('hidden'); el.classList.remove('flex'); }
            });
        });

        //mobile
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-[120%]');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-[120%]');
            overlay.classList.add('hidden');
        });


        function toggleProfileCard() {
            document
                .getElementById('profileCard')
                .classList
                .toggle('hidden');
        }
        //mobile
        const profileBtn = document.getElementById('profileBtn');
        const profileCard = document.getElementById('profileCard');

        profileBtn.addEventListener('click', function (e) {

            e.stopPropagation();

            profileCard.classList.toggle('hidden');

        });

        profileCard.addEventListener('click', function (e) {

            e.stopPropagation();

        });

        document.addEventListener('click', function () {

            profileCard.classList.add('hidden');

        });
    </script>
</x-layout.layout>