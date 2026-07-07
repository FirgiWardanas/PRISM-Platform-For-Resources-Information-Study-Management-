<x-layout.layout>

    <x-slot:title>Kustomisasi</x-slot:title>

    <body class="font-montserrat min-h-screen bg-cover bg-center bg-no-repeat bg-fixed"
        style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden"></div>

        {{-- main kontent --}}
        <main class="flex flex-col h-screen p-4 md:p-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header_kurikulum>
                <div class="font-bold">kustomisasi</div>
            </x-admin.header_kurikulum>

            <div class="overflow-y-auto flex-1 pr-2">

                {{-- FORM KUSTOMISASI --}}
                <form id="formKustomisasi" action="{{ route('admin.kustomisasi.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="bg-white p-5 shadow-lg border border-gray-300 rounded-2xl">
                        <div class="flex flex-col sm:flex-row justify-end gap-2 mb-3 mt-3">

                            <a href="/prodi/{{ $prodi->kode_prodi }}" target="_blank"
                                class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl text-sm hover:bg-purple-50 transition hover:scale-[1.025] ">
                                <img src="{{ asset('images/icon-preview.svg') }}" class="h-5 w-5">
                                <span class="text-[#3307CC]">Preview</span>
                            </a>

                            <button type="button" onclick="resetForm()"
                                class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-xl text-sm shadow hover:bg-gray-200 hover:scale-[1.025] transition-all cursor-pointer">
                                <img src="{{ asset('images/icon-reset.svg') }}" class="w-5 h-5">
                                <span class="text-[#3307CC]">Reset</span>
                            </button>

                            <button type="submit" form="formKustomisasi"
                                class="w-full sm:w-auto h-10 flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#0971F7] to-[#3405CC] rounded-xl text-sm text-white shadow hover:opacity-90 transition hover:scale-[1.025] cursor-pointer">
                                <img src="{{ asset('images/icon-simpan perubahan.svg') }}" class="mt-2 w-5 h-5">
                                <span class="text-white">Simpan Perubahan</span>
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4 **:focus:outline-none">

                            {{-- STATUS --}}
                            <div
                                class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-3 sm:justify-between sm:items-center">
                                <div class="flex items-center gap-3">
                                    <label class="font-semibold text-[#3307CC]">Status</label>
                                    <select name="status_prodi"
                                        class="border border-gray-300 rounded-lg px-3 py-1 text-sm">
                                        <option value="draft" {{ $prodi->status_prodi === 'draft' ? 'selected' : '' }}>
                                            Draft</option>
                                        <option value="published" {{ $prodi->status_prodi === 'published' ? 'selected' : '' }}>Publish</option>
                                    </select>
                                </div>
                            </div>

                            {{-- DESKRIPSI --}}
                            <div class="col-span-1 md:col-span-2">
                                <label class="font-semibold text-[#3307CC]">Deskripsi</label>
                                <p class="mt-3 text-sm text-[#3307CC]">Deskripsi program studi</p>
                                <textarea name="deskripsi_prodi"
                                    class="w-full h-28 mt-2 p-3 border border-gray-300 rounded-xl text-sm"
                                    placeholder="Masukkan deskripsi program studi">{{ $prodi->detailProdi?->deskripsi_prodi }}</textarea>
                            </div>

                            {{-- VISI --}}
                            <div>
                                <label class="font-semibold text-[#3307CC]">Visi</label>
                                <p class="mt-3 text-sm text-[#3307CC]">Visi program studi</p>
                                <textarea rows="8" name="visi"
                                    class=" w-full mt-2 p-3 border border-gray-300 rounded-xl text-sm"
                                    placeholder="Masukkan visi program studi">{{ $prodi->detailProdi?->visi }}</textarea>
                            </div>

                            {{-- MISI --}}
                            <div>
                                <label class="font-semibold text-[#3307CC]">Misi</label>
                                <p class="mt-3 text-sm text-[#3307CC]">Misi program studi</p>
                                <textarea rows="8" name="misi"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-xl text-sm"
                                    placeholder="Masukkan misi program studi">{{ $prodi->detailProdi?->misi }}</textarea>
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
                                        <button type="button" onclick="document.getElementById('input-logo').click()"
                                            class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition hover:scale-[1.025] cursor-pointer ">
                                            Upload Logo
                                        </button>
                                        <p class="text-xs text-gray-400 mt-2">Format PNG (Max 2MB)</p>
                                    </div>
                                </div>
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
                                            class="flex items-center gap-2 px-5 py-2 border border-[#3307CC] text-[#3307CC] rounded-xl hover:bg-purple-50 transition hover:scale-[1.025] cursor-pointer">
                                            Upload Gambar
                                        </button>
                                        <p class="text-xs text-gray-400 mt-2">Format PNG (Max 2MB)</p>
                                    </div>
                                </div>
                            </div>

                            {{-- WARNA PRIMARY --}}
                            <div>
                                <label class="font-semibold text-[#3307CC]">Warna Primer</label>
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
                                <label class="font-semibold text-[#3307CC]">Warna Sekunder</label>
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
                                <label class="font-semibold text-[#3307CC]">Warna Tersier</label>
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
                                <label class="font-semibold text-[#3307CC]">Warna Kuarter</label>
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
                            class="h-6 w-6 rounded-md bg-[#3307CC] text-white flex items-center justify-center hover:opacity-90 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            <img src="{{ asset('images/icon-plus.svg') }}" class="w-3 h-3">
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse($prodi->detailProdi?->profilLulusans ?? [] as $profil)
                            <div
                                class="bg-white border border-gray-200 rounded-2xl p-4 shadow-sm flex items-start gap-4 h-50">

                                @if($profil->icon_lulusan)
                                    <img src="{{ Storage::url($profil->icon_lulusan) }}"
                                        class="w-12 h-12 rounded-lg object-cover flex-shrink-0">
                                @else
                                    <div
                                        class="w-12 h-12 bg-gray-50 border border-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <img src="{{ asset('images/icon-upload.svg') }}" class="w-6 h-6 opacity-40">
                                    </div>
                                @endif

                                <div class="flex-1 min-w-0 h-full flex flex-col">
                                    <div class="flex justify-between items-start gap-4 flex-shrink-0">
                                        <h3
                                            class="font-semibold text-[#3307CC] break-all text-sm md:text-base leading-tight">
                                            {{ $profil->judul_lulusan }}
                                        </h3>

                                        <div class="flex gap-1.5 flex-shrink-0 items-center mt-0.5">
                                            <button type="button" onclick="editProfil(this)"
                                                data-id="{{ $profil->id_lulusan }}"
                                                data-judul="{{ $profil->judul_lulusan }}"
                                                data-deskripsi="{{ $profil->deskripsi_lulusan }}"
                                                data-icon="{{ $profil->icon_lulusan }}">
                                                <img src="{{ asset('images/icon-edit.svg') }}"
                                                    class="w-4 h-4 hover:scale-[1.025] transition-all">
                                            </button>

                                            <button type="button" onclick="hapusProfilLulusan('{{ $profil->id_lulusan }}')"
                                                class="cursor-pointer">
                                                <img src="{{ asset('images/icon-hapus (merah).svg') }}"
                                                    class="w-5 h-5 hover:scale-[1.025] transition-all">
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-1 overflow-y-auto pr-1 mt-2 custom-scrollbar">
                                        <p class="text-xs text-gray-500 leading-relaxed">{{ $profil->deskripsi_lulusan }}
                                        </p>
                                    </div>
                                </div>
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

        @forelse($prodi->detailProdi?->profilLulusans ?? [] as $profil)

            <form id="deleteForm{{ $profil->id_lulusan }}"
                action="{{ route('admin.profil-lulusan.destroy', $profil->id_lulusan) }}" method="POST" class="hidden">

                @csrf
                @method('DELETE')

            </form>

        @empty
        @endforelse

        {{-- MODAL TAMBAH PROFIL LULUSAN --}}
        <div id="modalProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50 p-4">
            <div
                class="bg-white rounded-2xl w-[95%] max-w-[520px] max-h-[calc(100vh-2rem)] overflow-y-auto p-5 md:p-6 relative shadow-xl">
                <button onclick="closeModal()"
                    class="absolute right-2 top-2 md:right-4 md:top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>

                <h2 class="text-center text-xl font-bold text-[#3307CC] mb-5">Tambah Profil Lulusan</h2>

                <form action="{{ route('admin.profil-lulusan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Judul</label>
                        <input type="text" name="judul_lulusan" placeholder="Masukkan nama profil lulusan"
                            class="w-full h-10 px-4 border border-gray-300 rounded-xl focus:outline-none shadow-md text-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Deskripsi</label>
                        <textarea name="deskripsi_lulusan" placeholder="Masukkan deskripsi profil lulusan"
                            class="w-full h-40 p-3 border border-gray-300 rounded-xl resize-none focus:outline-none shadow-md text-sm"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Foto</label>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-16 h-16 border-2 border-dashed border-gray-300 rounded-xl overflow-hidden flex items-center justify-center bg-gray-50 flex-shrink-0">
                                <img id="img-preview-tambah" src="{{ asset('images/icon-upload.svg') }}"
                                    class="w-6 h-6 opacity-40">
                            </div>
                            <div>
                                <input type="file" id="input-icon-tambah" name="icon_lulusan" class="hidden"
                                    accept="image/*">
                                <button type="button" onclick="document.getElementById('input-icon-tambah').click()"
                                    class="px-3 py-1.5 border border-[#3307CC] text-[#3307CC] rounded-xl text-xs hover:bg-purple-50 hover:scale-[1.025] transition-all">
                                    Upload Foto
                                </button>
                                <p class="text-[10px] text-gray-400 mt-0.5">Format PNG/JPG (Max 2MB)</p>
                                <p id="nama-file-tambah"
                                    class="text-[10px] text-[#3307CC] font-medium mt-0.5 truncate max-w-[200px]"></p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-5">
                        <button type="submit"
                            class="px-8 py-2 rounded-full bg-gradient-to-r from-[#1597FF] to-[#3307CC] text-white font-semibold text-sm cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- MODAL EDIT PROFIL LULUSAN --}}
        <div id="modalEditProfil" class="fixed inset-0 bg-black/30 hidden items-center justify-center z-50 p-4">
            <div
                class="bg-white rounded-2xl w-[95%] max-w-[520px] max-h-[calc(100vh-2rem)] overflow-y-auto p-5 md:p-6 relative shadow-xl">
                <button onclick="closeModalEdit()"
                    class="absolute right-2 top-2 md:right-4 md:top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>
                <h2 class="text-center text-xl font-bold text-[#3307CC] mb-5">Edit Profil Lulusan</h2>
                <form id="formEditProfil" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Judul</label>
                        <input id="editJudul" type="text" name="judul_lulusan"
                            placeholder="Masukkan nama profil lulusan"
                            class="w-full h-10 px-4 border border-gray-300 rounded-xl focus:outline-none shadow-md text-sm"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Deskripsi</label>
                        <textarea id="editDeskripsi" rows="5" name="deskripsi_lulusan"
                            placeholder="Masukkan deskripsi profil lulusan"
                            class="w-full h-40 p-3 border border-gray-300 rounded-xl resize-none focus:outline-none shadow-md text-sm"
                            required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-[#3307CC] font-semibold mb-1 text-lg">Foto</label>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-16 h-16 border-2 border-dashed border-gray-300 rounded-xl overflow-hidden flex items-center justify-center bg-gray-50 flex-shrink-0">
                                <img id="img-preview-edit" src="{{ asset('images/icon-upload.svg') }}"
                                    class="w-6 h-6 opacity-40">
                            </div>
                            <div>
                                <input type="file" id="input-icon-edit" name="icon_lulusan" class="hidden"
                                    accept="image/*">
                                <button type="button" onclick="document.getElementById('input-icon-edit').click()"
                                    class="px-3 py-1.5 border border-[#3307CC] text-[#3307CC] rounded-xl text-xs hover:bg-purple-50 hover:scale-[1.025] transition-all">
                                    Ganti Foto
                                </button>
                                <p class="text-[10px] text-gray-400 mt-0.5">Kosongkan jika tidak ingin mengubah</p>
                                <p id="nama-file-edit"
                                    class="text-[10px] text-[#3307CC] font-medium mt-0.5 truncate max-w-[200px]"></p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-5">
                        <button type="submit"
                            class="px-8 py-2 rounded-full bg-gradient-to-r from-[#1597FF] to-[#3307CC] text-white font-semibold text-sm cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="{{ asset('js/kustomisasi.js') }}"></script>
    </body>

</x-layout.layout>