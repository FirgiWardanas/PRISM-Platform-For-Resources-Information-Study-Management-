<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/image-7.png') }}')">
        {{-- sidebar --}}
        <x-admin.sidebar></x-admin.sidebar>

        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        {{-- main content --}}
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header>
                <div class="font-bold">Profile</div>
            </x-admin.header>

            <div class="relative rounded-2xl bg-white p-6 md:p-10 shadow-xl min-h-[300px] border border-gray-300">

                {{-- tombol edit --}}
                <button onclick="openModal()" class="absolute top-5 right-5 btn-img cursor-pointer">
                    <img src="{{ asset('images/icon-edit(hitam).svg') }}" alt="icon" width="20" height="20" hover:scale-[1.025] transition-all hover:opacity-90>
                </button>

                {{-- Baris atas --}}
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil"
                        class="w-32 h-32 md:w-40 md:h-40 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">

                    <div class="text-sm text-gray-700 space-y-4 text-center md:text-left font-semibold">
                        <h2 class="text-xl font-bold mb-2 bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent">{{ $user->nama }}</h2>
                        <p>Nama : {{ $user->nama }}</p>
                        <p>NIP : {{ $user->nip }}</p>
                        <p>Email : {{ $user->email }}</p>
                    </div>
                </div>

                {{-- Baris bawah --}}
                <div class="mt-8 flex flex-col gap-3 md:flex-row md:justify-between md:items-end">



                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full md:w-auto rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] px-6 py-3 text-white shadow hover:scale-[1.025] transition-all hover:opacity-90 cursor-pointer">
                            Logout ↗
                        </button>
                    </form>

                </div>

            </div>
        </main>

        <!-- Modal Edit Profil -->
        <div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">
                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">✕</button>
                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">Update Profile</h2>
                <form method="POST" action="{{ route('admin.profile-ketua-jurusan.update', $user->id_user) }}">
                    @csrf @method('PUT')

                    <label>
                        <span class="text-sm">Nama</span>
                        <input type="text" name="nama" value="{{ old('nama', $user->nama) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">NIP</span>
                        <input type="text" name="nip" value="{{ old('nip', $user->nip) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">Email</span>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                    <label>
                        <span class="text-sm">Password Baru (kosongkan jika tidak diubah)</span>
                        <input type="password" name="password" placeholder="Masukkan Password Baru"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>

                        <label for="password_confirmation">
                            <span>konfirmasi Password</span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Konfirmasi Password"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2"
                                >
                        </label>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-40 rounded-xl bg-gradient-to-r bg-gradient-to-r from-[#0284FD] to-[#3207CC]  py-2 text-white cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>












    </body>
    
    <script>


        function toggleModal(id, show) {
            const el = document.getElementById(id);
            if (show) { el.classList.remove('hidden'); el.classList.add('flex'); }
            else { el.classList.add('hidden'); el.classList.remove('flex'); }
        }

        function openModal() { toggleModal('modal', true); }
        function closeModal() { toggleModal('modal', false); }



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