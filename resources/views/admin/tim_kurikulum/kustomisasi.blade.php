<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('../foto/image 7.png');">
        <div class="flex h-screen px-4 py-4 gap-4">
            <!--sidebbar-->
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
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Kurikulum</a>
                    <a href="/admin/matakuliah"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-matakuliah.svg') }}" class="h-4 w-4">Matakuliah</a>
                    <a href="/admin/kustomisasi"
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/icon-kustomisasi(putih).svg') }}" class="h-4 w-4">Kustomisasi</a>
                    <a href="/admin/profile-tim-kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>
                </nav>
            </aside>
            <!-- Main Content -->
            <main class="flex-1 px-4 h-full flex flex-col">

                <div class="flex items-start justify-between mb-3 shrink-0">

                    <!-- LEFT -->
                    <h1 class="text-2xl font-semibold">Kustomisasi</h1>

                    <!-- RIGHT -->
                    <div class="flex flex-col items-end gap-4">

                        <!-- Top (toggle + profile) -->
                        <div class="flex items-center gap-4">

                            <!-- Profile -->
                            <div
                                class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-r from-[#3665DF] to-[#9A55FF]">
                                <img src="{{ asset('images/Profile-Circle.png') }}"
                                    class="w-12 h-12 rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Bottom (Reset & Simpan) -->
                        <div class="flex items-center gap-3 mt-3">

                            <!-- Reset -->
                            <button
                                class="h-10 flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-xl text-sm shadow hover:bg-gray-200">
                                <img src="{{ asset('images/icon-reset.svg') }}" class="w-5 h-5">
                                <span class="text-[#3307CC]">Reset</span>
                            </button>

                            <!-- Simpan -->
                            <button
                                class="h-10 flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#0971F7] to-[#3405CC] rounded-xl text-sm shadow hover:bg-gray-200">
                                <img src="{{ asset('images/icon-simpan perubahan.svg') }}" class="mt-2 w-5 h-5">
                                <span class="text-white">Simpan Perubahan</span>
                            </button>

                        </div>

                    </div>

                </div>

                <!-- Form -->
                <div class="flex-1 overflow-y-auto pr-2 bg-white p-5 shadow-lg border border-gray-300 rounded-2xl">
                    <div class="grid grid-cols-2 gap-6 mt-4">

                        <!-- Status + Preview -->
                        <div class="col-span-2 flex justify-between items-center">

                            <!-- status-->
                            <div class="flex items-center gap-3">
                                <label class="font-semibold text-[#3307CC]">Status</label>
                                <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm">
                                    <option>Draft</option>
                                    <option>Publish</option>
                                </select>
                                <input type="checkbox" class="w-5 h-5 accent-[#3307CC]">
                            </div>

                            <!-- preview -->
                            <button
                                class="flex items-center gap-2 px-4 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                <img src="{{ asset('images/icon-preview.svg') }}" class="h-5 w-5">
                                <span>Preview</span>
                            </button>

                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Deskripsi</label>
                            <p class="mt-3 text-sm text-[#3307CC]">Deskripsi program studi</p>
                            <textarea class="w-full h-28 mt-2 p-3 border rounded-xl text-sm"
                                placeholder="Masukkan deskripsi program studi"></textarea>
                        </div>

                        <!-- Logo -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Logo</label>
                            <p class="mt-3 text-sm text-[#3307CC]">Upload logo program studi</p>

                            <div class="flex items-center gap-6 mt-2">

                                <!-- Kotak upload -->
                                <div id="preview-logo"
                                    class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center">
                                    <img src="{{ asset('images/icon-upload.svg') }}">
                                </div>

                                <!-- Input file (hidden) -->
                                <input type="file" id="input-logo" class="hidden" accept="image/*">

                                <!-- Button + text -->
                                <div>
                                    <!-- Button -->
                                    <button onclick="document.getElementById('input-logo').click()"
                                        class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                        <img src="{{ asset('images/icon-upload2.svg') }}">
                                        Upload Logo
                                    </button>
                                    <p class="text-xs text-gray-400 mt-2">
                                        Format PNG (Max 100kb)
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Visi -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Visi</label>
                            <p class="mt-3 text-sm text-[#3307CC]">Visi program studi</p>
                            <textarea class="w-full mt-2 p-3 border rounded-xl text-sm"
                                placeholder="Masukkan visi program studi"></textarea>
                        </div>

                        <!-- Misi -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Misi</label>
                            <p class="mt-3 text-sm text-[#3307CC]">Misi program studi</p>
                            <textarea class="w-full mt-2 p-3 border rounded-xl text-sm"
                                placeholder="Masukkan misi program studi"></textarea>
                        </div>

                        <!-- Ilustrasi -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Ilustrasi</label>
                            <p class="mt-3 text-sm">Upload ilustrasi program studi</p>

                            <div class="flex items-center gap-6 mt-3">

                                <!-- Kotak upload -->
                                <div id="preview-ilustrasi"
                                    class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center">
                                    <img src="{{ asset('images/icon-upload.svg') }}">
                                </div>

                                <!-- Input file (hidden) -->
                                <input type="file" id="input-ilustrasi" class="hidden" accept="image/*">

                                <!-- Button + text -->
                                <div>
                                    <button onclick="document.getElementById('input-ilustrasi').click()"
                                        class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                        <img src="{{ asset('images/icon-upload2.svg') }}">
                                        Upload gambar
                                    </button>

                                    <p class="text-xs text-gray-400 mt-2">
                                        Format PNG (Max 100kb)
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Icon Profil -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Icon profil lulusan</label>
                            <p class="mt-3 text-sm">Upload icon profil llulusan program studi</p>

                            <div class="flex items-center gap-6 mt-3">

                                <!-- Kotak upload -->
                                <div id="preview-icon"
                                    class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center">
                                    <img src="{{ asset('images/icon-upload.svg') }}">
                                </div>

                                <!-- Input file (hidden) -->
                                <input type="file" id="input-icon" class="hidden" accept="image/*">

                                <!-- Button + text -->
                                <div>
                                    <button onclick="document.getElementById('input-icon').click()"
                                        class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                        <img src="{{ asset('images/icon-upload2.svg') }}">
                                        Upload gambar
                                    </button>

                                    <p class="text-xs text-gray-400 mt-2">
                                        Format PNG (Max 100kb)
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Warna Primary -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Warna Primary</label>
                            <p class="text-sm text-[#3307CC] mb-2">Pilih warna primary program studi</p>

                            <div class="flex items-center gap-3">

                                <!-- Preview -->
                                <div id="preview-primary" class="w-10 h-10 rounded-lg border"></div>

                                <!-- HEX -->
                                <input type="text" id="input-primary" class="flex-1 border rounded-lg px-3 py-2 text-sm"
                                    placeholder="#000000">

                                <!-- Color Picker -->
                                <input type="color" id="picker-primary"
                                    class="w-10 h-10 border rounded-lg cursor-pointer">

                            </div>
                        </div>

                        <!-- Warna Secondary -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Warna Secondary</label>
                            <p class="text-sm text-[#3307CC] mb-2">Pilih warna secondary program studi</p>

                            <div class="flex items-center gap-3">

                                <!-- Preview -->
                                <div id="preview-secondary" class="w-10 h-10 rounded-lg border"></div>

                                <!-- HEX -->
                                <input type="text" id="input-secondary"
                                    class="flex-1 border rounded-lg px-3 py-2 text-sm" placeholder="#000000">

                                <!-- Color Picker -->
                                <input type="color" id="picker-secondary"
                                    class="w-10 h-10 border rounded-lg cursor-pointer">

                            </div>
                        </div>

                        <!-- Warna Tertiary -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Warna Tertiary</label>
                            <p class="text-sm text-[#3307CC] mb-2">Pilih warna tertiary program studi</p>

                            <div class="flex items-center gap-3">

                                <!-- Preview -->
                                <div id="preview-tertiary" class="w-10 h-10 rounded-lg border"></div>

                                <!-- HEX -->
                                <input type="text" id="input-tertiary"
                                    class="flex-1 border rounded-lg px-3 py-2 text-sm" placeholder="#000000">

                                <!-- Color Picker -->
                                <input type="color" id="picker-tertiary"
                                    class="w-10 h-10 border rounded-lg cursor-pointer">

                            </div>
                        </div>

                        <!-- Warna Quaternary -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Warna Quaternary</label>
                            <p class="text-sm text-[#3307CC] mb-2">Pilih warna quaternary program studi</p>

                            <div class="flex items-center gap-3">

                                <!-- Preview -->
                                <div id="preview-quaternary" class="w-10 h-10 rounded-lg border"></div>

                                <!-- HEX -->
                                <input type="text" id="input-quaternary"
                                    class="flex-1 border rounded-lg px-3 py-2 text-sm" placeholder="#000000">

                                <!-- Color Picker -->
                                <input type="color" id="picker-quaternary"
                                    class="w-10 h-10 border rounded-lg cursor-pointer">

                            </div>
                        </div>

                        <!-- Header Upload -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Header</label>
                            <p class="text-sm text-[#3307CC] mb-2">Upload gambar header program studi</p>

                            <div id="preview-header" class="w-full h-40 border-2 border-dashed rounded-xl 
                                flex items-center justify-center overflow-hidden p-3">
                                <img src="{{ asset('images/icon-upload.svg') }}">
                            </div>
                            <input type="file" id="input-header" class="hidden" accept="image/*">

                            <div class="flex flex-col items-center mt-3">
                                <button onclick="document.getElementById('input-header').click()"
                                    class="px-4 py-2 border rounded-lg text-sm flex items-center gap-2">
                                    <img src="{{ asset('images/icon-upload2.svg') }}"> Upload gambar
                                </button>

                                <p class="text-sm text-gray-400 mt-1">
                                    Format PNG (Max 100kb)
                                </p>
                            </div>
                        </div>

                        <!-- Footer Upload -->
                        <div>
                            <label class="font-semibold text-[#3307CC]">Footer</label>
                            <p class="text-sm text-[#3307CC] mb-2">Upload gambar footer program studi</p>

                            <div id="preview-footer" class="w-full h-40 border-2 border-dashed rounded-xl 
                                flex items-center justify-center overflow-hidden p-3">
                                <img src="{{ asset('images/icon-upload.svg') }}">
                            </div>
                            <input type="file" id="input-footer" class="hidden" accept="image/*">

                            <div class="flex flex-col items-center mt-3">
                                <button onclick="document.getElementById('input-footer').click()"
                                    class="px-4 py-2 border rounded-lg text-sm flex items-center gap-2">
                                    <img src="{{ asset('images/icon-upload2.svg') }}">Upload gambar
                                </button>

                                <p class="text-sm text-gray-400 mt-1">
                                    Format PNG (Max 100kb)
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-6 mt-10">
                        <h2 class="text-xl font-semibold text-[#3307CC]">
                            Profil Lulusan
                        </h2>

                        <button onclick="openModal()"
                            class="h-6 w-6 rounded-md bg-[#3307CC] text-white flex items-center justify-center hover:opacity-90">

                            <img src="{{ asset('images/icon-plus.svg') }}" alt="Tambah Profil Lulusan" class="w-3 h-3">
                        </button>
                    </div>

                    <!-- Container Card -->
                    <div id="profil-lulusan-container" class="grid grid-cols-2 gap-6">

                        <!-- Card 1 -->
                        <div class="profil-card bg-white border border-gray-200 rounded-2xl p-4 shadow-sm">

                            <div class="flex justify-between items-start">

                                <h3 class=" judul-profil font-semibold text-[#3307CC]">
                                    Programmer
                                </h3>

                                <div class="flex gap-1">

                                    <button type="button" onclick="editProfil(this)">
                                        <img src="{{ asset('images/icon-edit.svg') }}" class="w-4 h-4">
                                    </button>

                                    <button type="button">
                                        <img src="{{ asset('images/icon-hapus (merah).svg') }}" class="w-5 h-5">
                                    </button>

                                </div>

                            </div>

                            <p class="deskripsi-profil text-xs text-gray-500 mt-2 leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nobis eum, quasi voluptas nulla temporibus suscipit
                                obcaecati repudiandae quam accusamus dicta totam.
                            </p>

                        </div>

                        <!-- Card 2 -->
                        <div class="profil-card bg-white border border-gray-200 rounded-2xl p-4 shadow-sm">

                            <div class="flex justify-between items-start">

                                <h3 class="judul-profil font-semibold text-[#3307CC]">
                                    UI & UX Designer
                                </h3>

                                <div class="flex gap-1">

                                    <button type="button" onclick="editProfil(this)">
                                        <img src="{{ asset('images/icon-edit.svg') }}" class="w-4 h-4">
                                    </button>

                                    <button type="button">
                                        <img src="{{ asset('images/icon-hapus (merah).svg') }}" class="w-5 h-5">
                                    </button>

                                </div>

                            </div>

                            <p class=" deskripsi-profil text-xs text-gray-500 mt-2 leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nobis eum, quasi voluptas nulla temporibus suscipit
                                obcaecati repudiandae quam accusamus dicta totam.
                            </p>

                        </div>

                    </div>
            </main>
        </div>
        <!-- Modal Tambah Profil Lulusan -->
        <div id="modalProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50">

            <div class="bg-white rounded-2xl w-[500px] p-8 relative shadow-xl">

                <!-- Tombol Close -->
                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white  cursor-pointer">

                    ✕
                </button>

                <!-- Judul -->
                <h2 class="text-center text-2xl font-semibold text-[#3307CC] mb-8">
                    Tambah Profil Lulusan
                </h2>

                <!-- Nama Profil -->
                <div class="mb-5">
                    <label class="block text-[#3307CC] font-medium mb-2">
                        Judul
                    </label>

                    <input type="text" placeholder="Masukkan nama profil lulusan" class="w-full h-11 px-4 border border-gray-300 rounded-xl
                focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-[#3307CC] font-medium mb-2">
                        Deskripsi
                    </label>

                    <textarea rows="5" placeholder="Masukkan deskripsi profil lulusan" class="w-full p-4 border border-gray-300 rounded-xl resize-none
                focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"></textarea>
                </div>

                <!-- Button Simpan -->
                <div class="flex justify-center mt-8">
                    <button class="px-10 py-2 rounded-full bg-gradient-to-r
                from-[#1597FF] to-[#3307CC]
                text-white font-medium">
                        Simpan
                    </button>
                </div>

            </div>
        </div>
        <!-- Modal Edit Profil Lulusan -->
        <div id="modalEditProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50">

            <div class="bg-white rounded-2xl w-[500px] p-8 relative shadow-xl">

                <!-- Tombol Close -->
                <button onclick="closeModalEdit()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white  cursor-pointer">

                    ✕
                </button>

                <!-- Judul -->
                <h2 class="text-center text-2xl font-semibold text-[#3307CC] mb-8">
                    Edit Profil Lulusan
                </h2>

                <!-- Nama Profil -->
                <div class="mb-5">
                    <label class="block text-[#3307CC] font-medium mb-2">
                        Judul
                    </label>

                    <input id="editJudul" type="text" placeholder="Masukkan nama profil lulusan" class="w-full h-11 px-4 border border-gray-300 rounded-xl
                focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-[#3307CC] font-medium mb-2">
                        Deskripsi
                    </label>

                    <textarea id="editDeskripsi" rows="5" placeholder="Masukkan deskripsi profil lulusan" class="w-full p-4 border border-gray-300 rounded-xl resize-none
                focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"></textarea>
                </div>

                <!-- Button Simpan -->
                <div class="flex justify-center mt-8">
                    <button class="px-10 py-2 rounded-full bg-gradient-to-r
                from-[#1597FF] to-[#3307CC]
                text-white font-medium">
                        Simpan
                    </button>
                </div>

            </div>
        </div>
    </body>
    <script src="{{ asset('js/kustomisasi.js') }}"></script>
</x-layout.layout>