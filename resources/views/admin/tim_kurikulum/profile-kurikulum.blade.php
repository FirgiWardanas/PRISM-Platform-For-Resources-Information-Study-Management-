<x-layout.layout>

    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}');">
        {{-- sidebbar --}}
        <x-admin.sidebar_kurikulum></x-admin.sidebar_kurikulum>
        <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
        </div>
        <!-- Main -->
        <main class="flex-1 p-4 md:p-6 space-y-6 lg:ml-72">
            {{-- header --}}
            <x-admin.header_kurikulum>
               <div class="font-bold">Profil</div>
            </x-admin.header-kurikulum>

                <div class="relative rounded-2xl bg-white p-6 md:p-10 shadow-xl min-h-[300px] border border-gray-300">

                    <!-- Edit -->
                    <button onclick="openModal()" class="absolute top-5 right-5 btn-img cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                        <img src="{{ asset('images/icon-edit(hitam).svg') }}" alt="icon" width="20" height="20">
                    </button>

                    <!-- Kiri -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil"
                            class="w-32 h-32 md:w-40 md:h-40 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full">

                        <div class="text-sm text-gray-700 space-y-4 text-center md:text-left font-semibold">
                            <h2 class="text-xl font-bold mb-2 bg-gradient-to-r from-[#0285FE] to-[#3405CB] bg-clip-text text-transparent">{{ $user->nama }}</h2>
                            <p>Nama : <span>{{ $user->nama }}</span></p>
                            <p>NIP : <span>{{ $user->nip }}</span></p>
                            <p>Email : <span>{{ $user->email }}</span></p>
                            <p>Program Studi : <span>{{ $user->prodis->nama_prodi ?? '-' }}</span></p>
                        </div>
                    </div>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}" class="mt-6 md:absolute md:bottom-6 md:right-8">
                        @csrf
                        <button type="submit"
                            class="w-full md:w-auto flex items-center justify-center gap-1 rounded-xl bg-gradient-to-r from-[#0284FD] to-[#3207CC] px-6 py-3 text-white shadow hover:opacity-90 cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                            Keluar <img src="{{ asset('images/icon-logout.svg') }}" class="h-4 w-4 ">
                        </button>
                    </form>

                </div>

        </main>


        <!-- MODAL edit profile -->
        <div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/60 z-[999]">
            <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">

                <button onclick="closeModal()"
                    class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white cursor-pointer hover:scale-[1.025] transition-all hover:bg-blue-600">
                    ✕
                </button>

                <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">
                    Update Profile
                </h2>

                <div class="max-w-lg text-sm">
                    <form method="POST" action="{{ route('admin.profile-tim-kurikulum.update', $user->id_user) }}">
                        @csrf
                        @method('PUT')
                        <label>
                            <span>Nama</span>
                            <input type="text" name="nama" value="{{ $user->nama }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">

                        </label>
                        <label>
                            <span>NIP</span>
                            <input type="text" name="nip" value="{{ $user->nip }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">

                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" value="{{ $user->email }}"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">

                        </label>
                        <label>
                            <span>Password Baru (kosongkan jika tidak diubah)</span>
                            <input type="password" name="password" placeholder="Masukkan Password Baru"
                                class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-5">
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
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-[#0282FD] to-[#3502CA] py-2 text-white cursor-pointer hover:scale-[1.025] transition-all hover:opacity-90">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- POPUP SUCCESS -->
        <div id="successPopup"
            class="fixed top-5 right-5 hidden bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg">
            ✅ Data berhasil disimpan
        </div>

    </body>
    <script>



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