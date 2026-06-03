<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebbar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        {{-- main kontent --}}
        <main class="flex flex-col h-screen p-4 md:p-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header_kurikulum>Kustomisasi</x-admin.header-kurikulum>


                <div class="flex flex-col sm:flex-row justify-end gap-2 mb-3 mt-3">
                    <a href="/prodi/{{ $prodi->kode_prodi }}" target="_blank"
                        class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl text-sm hover:bg-purple-50 transition">
                        <img src="{{ asset('images/icon-preview.svg') }}" class="h-5 w-5">
                        <span class="text-[#3307CC]">Preview</span>
                    </a>
                    <button type="button" onclick="resetForm()"
                        class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-xl text-sm shadow hover:bg-gray-200">
                        <img src="{{ asset('images/icon-reset.svg') }}" class="w-5 h-5">
                        <span class="text-[#3307CC]">Reset</span>
                    </button>
                    <button type="submit" form="formKustomisasi"
                        class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#0971F7] to-[#3405CC] rounded-xl text-sm text-white shadow hover:opacity-90 transition">
                        <img src="{{ asset('images/icon-simpan perubahan.svg') }}" class="mt-2 w-5 h-5">
                        <span class="text-white">Simpan Perubahan</span>
                    </button>
                </div>


                {{-- NOTIFIKASI --}}
                @if(session('success'))
                    <div id="toastSuccess"
                        class="fixed top-5 right-5 z-[999] bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg text-sm font-medium flex items-start gap-3">
                        <span>{{ session('success') }}</span>
                        <button onclick="document.getElementById('toastSuccess').remove()"
                            class="text-white font-bold text-lg leading-none cursor-pointer">✕</button>
                    </div>
                @endif
                <div class="overflow-y-auto flex-1 pr-2">

                    {{-- FORM KUSTOMISASI --}}
                    <form id="formKustomisasi" action="{{ route('admin.kustomisasi.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white p-5 shadow-lg border border-gray-300 rounded-2xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

                                {{-- STATUS --}}
                                <div class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-3 sm:justify-between sm:items-center">
                                    <div class="flex items-center gap-3">
                                        <label class="font-semibold text-[#3307CC]">Status</label>
                                        <select name="status_prodi"
                                            class="border border-gray-300 rounded-lg px-3 py-1 text-sm">
                                            <option value="draft" {{ $prodi->status_prodi === 'draft' ? 'selected' : '' }}>
                                                Draft
                                            </option>
                                            <option value="published" {{ $prodi->status_prodi === 'published' ? 'selected' : '' }}>Publish</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- DESKRIPSI --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Deskripsi</label>
                                    <p class="mt-3 text-sm text-[#3307CC]">Deskripsi program studi</p>
                                    <textarea name="deskripsi_prodi"
                                        class="w-full h-28 mt-2 p-3 border rounded-xl text-sm"
                                        placeholder="Masukkan deskripsi program studi">{{ $prodi->detailProdi?->deskripsi_prodi }}</textarea>
                                </div>

                                {{-- LOGO --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Logo</label>
                                    <p class="mt-3 text-sm text-[#3307CC]">Upload logo program studi</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-6 mt-2">
                                        <div id="preview-logo"
                                            class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center overflow-hidden">
                                            @if($prodi->detailProdi?->logo)
                                                <img src="{{ Storage::url($prodi->detailProdi->logo) }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <img src="{{ asset('images/icon-upload.svg') }}">
                                            @endif
                                        </div>
                                        <input type="file" id="input-logo" name="logo" class="hidden" accept="image/*">
                                        <div>
                                            <button type="button"
                                                onclick="document.getElementById('input-logo').click()"
                                                class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                                Upload Logo
                                            </button>
                                            <p class="text-xs text-gray-400 mt-2">Format PNG (Max 2MB)</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- VISI --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Visi</label>
                                    <p class="mt-3 text-sm text-[#3307CC]">Visi program studi</p>
                                    <textarea name="visi" class="w-full mt-2 p-3 border rounded-xl text-sm"
                                        placeholder="Masukkan visi program studi">{{ $prodi->detailProdi?->visi }}</textarea>
                                </div>

                                {{-- MISI --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Misi</label>
                                    <p class="mt-3 text-sm text-[#3307CC]">Misi program studi</p>
                                    <textarea name="misi" class="w-full mt-2 p-3 border rounded-xl text-sm"
                                        placeholder="Masukkan misi program studi">{{ $prodi->detailProdi?->misi }}</textarea>
                                </div>

                                {{-- ILUSTRASI --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Ilustrasi</label>
                                    <p class="mt-3 text-sm">Upload ilustrasi program studi</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-6 mt-3">
                                        <div id="preview-ilustrasi"
                                            class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center overflow-hidden">
                                            @if($prodi->detailProdi?->ilustrasi)
                                                <img src="{{ Storage::url($prodi->detailProdi->ilustrasi) }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <img src="{{ asset('images/icon-upload.svg') }}">
                                            @endif
                                        </div>
                                        <input type="file" id="input-ilustrasi" name="ilustrasi" class="hidden"
                                            accept="image/*">
                                        <div>
                                            <button type="button"
                                                onclick="document.getElementById('input-ilustrasi').click()"
                                                class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                                Upload Gambar
                                            </button>
                                            <p class="text-xs text-gray-400 mt-2">Format PNG (Max 2MB)</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- ICON PROFIL LULUSAN --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Icon Profil Lulusan</label>
                                    <p class="mt-3 text-sm">Upload icon profil lulusan program studi</p>
                                    <div class="flex flex-col sm:flex-row items-center gap-6 mt-3">
                                        <div id="preview-icon"
                                            class="w-28 h-28 border-2 border-dashed border-gray-300 rounded-2xl flex items-center justify-center overflow-hidden">
                                            @if($prodi->detailProdi?->icon_lulusan)
                                                <img src="{{ Storage::url($prodi->detailProdi->icon_lulusan) }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <img src="{{ asset('images/icon-upload.svg') }}">
                                            @endif
                                        </div>
                                        <input type="file" id="input-icon" name="icon_lulusan" class="hidden"
                                            accept="image/*">
                                        <div>
                                            <button type="button"
                                                onclick="document.getElementById('input-icon').click()"
                                                class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition">
                                                Upload Gambar
                                            </button>
                                            <p class="text-xs text-gray-400 mt-2">Format PNG (Max 2MB)</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- WARNA PRIMARY --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Warna Primary</label>
                                    <p class="text-sm text-[#3307CC] mb-2">Pilih warna primary program studi</p>
                                    <div class="flex items-center gap-3">
                                        <div id="preview-primary" class="w-10 h-10 rounded-lg border"
                                            style="background-color: {{ $prodi->kustomisasi?->primary_color ?? '#000000' }}">
                                        </div>
                                        <input type="text" id="input-primary" name="primary_color"
                                            class="flex-1 border rounded-lg px-3 py-2 text-sm"
                                            value="{{ $prodi->kustomisasi?->primary_color ?? '#000000' }}"
                                            placeholder="#000000">
                                        <input type="color" id="picker-primary"
                                            value="{{ $prodi->kustomisasi?->primary_color ?? '#000000' }}"
                                            class="w-10 h-10 border rounded-lg cursor-pointer">
                                    </div>
                                </div>

                                {{-- WARNA SECONDARY --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Warna Secondary</label>
                                    <p class="text-sm text-[#3307CC] mb-2">Pilih warna secondary program studi</p>
                                    <div class="flex items-center gap-3">
                                        <div id="preview-secondary" class="w-10 h-10 rounded-lg border"
                                            style="background-color: {{ $prodi->kustomisasi?->secondary_color ?? '#000000' }}">
                                        </div>
                                        <input type="text" id="input-secondary" name="secondary_color"
                                            class="flex-1 border rounded-lg px-3 py-2 text-sm"
                                            value="{{ $prodi->kustomisasi?->secondary_color ?? '#000000' }}"
                                            placeholder="#000000">
                                        <input type="color" id="picker-secondary"
                                            value="{{ $prodi->kustomisasi?->secondary_color ?? '#000000' }}"
                                            class="w-10 h-10 border rounded-lg cursor-pointer">
                                    </div>
                                </div>

                                {{-- WARNA TERTIARY --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Warna Tertiary</label>
                                    <p class="text-sm text-[#3307CC] mb-2">Pilih warna tertiary program studi</p>
                                    <div class="flex items-center gap-3">
                                        <div id="preview-tertiary" class="w-10 h-10 rounded-lg border"
                                            style="background-color: {{ $prodi->kustomisasi?->tertiary_color ?? '#000000' }}">
                                        </div>
                                        <input type="text" id="input-tertiary" name="tertiary_color"
                                            class="flex-1 border rounded-lg px-3 py-2 text-sm"
                                            value="{{ $prodi->kustomisasi?->tertiary_color ?? '#000000' }}"
                                            placeholder="#000000">
                                        <input type="color" id="picker-tertiary"
                                            value="{{ $prodi->kustomisasi?->tertiary_color ?? '#000000' }}"
                                            class="w-10 h-10 border rounded-lg cursor-pointer">
                                    </div>
                                </div>

                                {{-- WARNA QUATERNARY --}}
                                <div>
                                    <label class="font-semibold text-[#3307CC]">Warna Quaternary</label>
                                    <p class="text-sm text-[#3307CC] mb-2">Untuk warna button dan hover navbar</p>
                                    <div class="flex items-center gap-3">
                                        <div id="preview-quaternary" class="w-10 h-10 rounded-lg border"
                                            style="background-color: {{ $prodi->kustomisasi?->quaternary_color ?? '#000000' }}">
                                        </div>
                                        <input type="text" id="input-quaternary" name="quaternary_color"
                                            class="flex-1 border rounded-lg px-3 py-2 text-sm"
                                            value="{{ $prodi->kustomisasi?->quaternary_color ?? '#000000' }}"
                                            placeholder="#000000">
                                        <input type="color" id="picker-quaternary"
                                            value="{{ $prodi->kustomisasi?->quaternary_color ?? '#000000' }}"
                                            class="w-10 h-10 border rounded-lg cursor-pointer">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                    {{-- PROFIL LULUSAN --}}
                    <div class="bg-white p-5 shadow-lg border border-gray-300 rounded-2xl mt-6 mb-6">
                        <div class="flex items-center gap-3 mb-6">
                            <h2 class="text-xl font-semibold text-[#3307CC]">Profil Lulusan</h2>
                            <button onclick="openModal()"
                                class="h-6 w-6 rounded-md bg-[#3307CC] text-white flex items-center justify-center hover:opacity-90 cursor-pointer">
                                <img src="{{ asset('images/icon-plus.svg') }}" class="w-3 h-3">
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @forelse($prodi->detailProdi?->profilLulusans ?? [] as $profil)
                                <div class="bg-white border border-gray-200 rounded-2xl p-4 shadow-sm">
                                    <div class="flex justify-between items-start">
                                        <h3 class="font-semibold text-[#3307CC]">{{ $profil->judul_lulusan }}</h3>
                                        <div class="flex gap-1">
                                            <button type="button" onclick="editProfil(this)"
                                                data-id="{{ $profil->id_lulusan }}"
                                                data-judul="{{ $profil->judul_lulusan }}"
                                                data-deskripsi="{{ $profil->deskripsi_lulusan }}">
                                                <img src="{{ asset('images/icon-edit.svg') }}" class="w-4 h-4">
                                            </button>
                                            <form action="{{ route('admin.profil-lulusan.destroy', $profil->id_lulusan) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus profil lulusan ini?')">
                                                    <img src="{{ asset('images/icon-hapus (merah).svg') }}" class="w-5 h-5">
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">{{ $profil->deskripsi_lulusan }}
                                    </p>
                                </div>
                            @empty
                                <div class="col-span-2 text-center text-gray-400 italic text-sm py-4">
                                    Belum ada profil lulusan. Klik + untuk menambahkan.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

        </main>


        {{-- MODAL TAMBAH PROFIL LULUSAN --}}
        <div id="modalProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50">
            <div class="bg-white rounded-2xl w-[95%] max-w-[500px] p-4 md:p-8 relative shadow-xl">
                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">✕</button>
                <h2 class="text-center text-2xl font-semibold text-[#3307CC] mb-8">Tambah Profil Lulusan</h2>
                <form action="{{ route('admin.profil-lulusan.store') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label class="block text-[#3307CC] font-medium mb-2">Judul</label>
                        <input type="text" name="judul_lulusan" placeholder="Masukkan nama profil lulusan"
                            class="w-full h-11 px-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"
                            required>
                    </div>
                    <div>
                        <label class="block text-[#3307CC] font-medium mb-2">Deskripsi</label>
                        <textarea rows="5" name="deskripsi_lulusan" placeholder="Masukkan deskripsi profil lulusan"
                            class="w-full p-4 border border-gray-300 rounded-xl resize-none focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"
                            required></textarea>
                    </div>
                    <div class="flex justify-center mt-8">
                        <button type="submit"
                            class="px-10 py-2 rounded-full bg-gradient-to-r from-[#1597FF] to-[#3307CC] text-white font-medium cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- MODAL EDIT PROFIL LULUSAN --}}
        <div id="modalEditProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50">
            <div class="bg-white rounded-2xl w-[95%] max-w-[500px] p-4 md:p-8 relative shadow-xl">
                <button onclick="closeModalEdit()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">✕</button>
                <h2 class="text-center text-2xl font-semibold text-[#3307CC] mb-8">Edit Profil Lulusan</h2>
                <form id="formEditProfil" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label class="block text-[#3307CC] font-medium mb-2">Judul</label>
                        <input id="editJudul" type="text" name="judul_lulusan"
                            placeholder="Masukkan nama profil lulusan"
                            class="w-full h-11 px-4 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"
                            required>
                    </div>
                    <div>
                        <label class="block text-[#3307CC] font-medium mb-2">Deskripsi</label>
                        <textarea id="editDeskripsi" rows="5" name="deskripsi_lulusan"
                            placeholder="Masukkan deskripsi profil lulusan"
                            class="w-full p-4 border border-gray-300 rounded-xl resize-none focus:outline-none focus:ring-2 focus:ring-[#3307CC]/20"
                            required></textarea>
                    </div>
                    <div class="flex justify-center mt-8">
                        <button type="submit"
                            class="px-10 py-2 rounded-full bg-gradient-to-r from-[#1597FF] to-[#3307CC] text-white font-medium cursor-pointer">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
    <script src="{{ asset('js/kustomisasi.js') }}"></script>
</x-layout.layout>