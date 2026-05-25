<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>

            <div class="relative flex justify-between rounded-2xl bg-white p-10 shadow-xl h-[300px] border border-gray-300">

                <!-- Pensil -->
                <button onclick="openModal()" class="absolute top-5 right-5 text-gray-500 hover:text-blue-500 text-xl btn-img">
                    <img src="{{ asset('images/update button.png') }}" alt="icon" width="20" height="20">
                </button>

                <!-- Kiri -->
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-end gap-6">
                        <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil"
                            class="w-40 h-40 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">
                    </div>
                    <div class="text-sm text-gray-700 space-y-1">
                        <h2 class="text-lg font-semibold mb-2">{{ $user->nama }}</h2>
                        <p>Nama : {{ $user->nama }}</p>
                        <p>NIP : {{ $user->nip }}</p>
                        <p>Email : {{ $user->email }}</p>
                        <p>Password : ••••••••</p>
                    </div>
                </div>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="mt-auto inline-block rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 px-6 py-3 text-white shadow hover:opacity-90">
                        Logout ↗
                    </button>
                </form>

            </div>

        </main>

        <!-- MODAL -->
        <div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/40">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">

                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">
                    Update Profile
                </h2>

                <div class="max-w-lg text-sm">
                    <form method="POST" action="{{ route('admin.profile-ketua-jurusan.update', $user->id_user) }}">
                        @csrf
                        @method('PUT')
                        <label>
                            <span>Nama</span>
                            <input type="text" name="nama" value="{{ old('nama', $user->nama) }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-1">
                            @error('nama')
                                <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                            @enderror
                        </label>
                        <label>
                            <span>NIP</span>
                            <input type="text" name="nip" value="{{ old('nip', $user->nip) }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-1">
                            @error('nip')
                                <p class="text-red-500 text-xs mb-2">NIP sudah digunakan, silakan gunakan NIP lain.</p>
                            @enderror
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-1">
                            @error('email')
                                <p class="text-red-500 text-xs mb-2">Email sudah digunakan, silakan gunakan email lain.</p>
                            @enderror
                        </label>
                        <label>
                            <span>Password Baru (kosongkan jika tidak diubah)</span>
                            <input type="password" name="password" placeholder="Masukkan Password Baru"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-5">
                            @error('password')
                                <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                            @enderror
                        </label>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white cursor-pointer">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- POPUP SUCCESS -->
        <div id="successPopup" class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>

    </body>
    <script>
        @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('successPopup');
            popup.classList.remove('hidden');
            setTimeout(function() {
                popup.classList.add('hidden');
            }, 3000);
        });
        @endif

        @if(session('info'))
        document.addEventListener('DOMContentLoaded', function() {
            openModal();
            alert("{{ session('info') }}");
        });
        @endif

        @if($errors->any())
        document.addEventListener('DOMContentLoaded', function() {
            openModal();
        });
        @endif

        function openModal() {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>
</x-layout.layout>