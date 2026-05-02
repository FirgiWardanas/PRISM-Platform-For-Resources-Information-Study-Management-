<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>



            <div
                class="relative flex justify-between rounded-2xl bg-white p-10 shadow-xl h-[300px] border border-gray-300">

                <!-- Pensil -->
                <button onclick="openModal()" class="absolute top-5 right-5 text-gray-500 hover:text-blue-500 text-xl">
                </button>

                <!-- Kiri -->
                <div class="flex items-center gap-8">
                <div class="flex flex-col items-end gap-6">
                    <img src="{{ asset('images/Profile-Circle.png') }}" alt="profil"
                        class="w-40 h-40 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full ">
                </div>
                    <div class="text-sm text-gray-700 space-y-1">
                        <h2 class="text-lg font-semibold mb-2">Jane Doe</h2>
                        <p>Nama : Jane joe</p>
                        <p>NIP : 12345 </p>
                        <p>Email : JayantoSutiawan@gmail.com</p>
                        <p>Password : 45silam</p>
                    </div>
                </div>

                <!-- Logout bawah -->
                <!-- SESUDAH (benar) -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="mt-auto inline-block rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 px-6 py-3 text-white shadow hover:opacity-90">
        Logout ↗
    </button>
</form>
                
                </div>

            </div>

        </main>
    </div>

    <!-- MODAL -->
    <div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/40">

        <div class="w-[400px] rounded-2xl bg-white p-6 shadow-xl relative">

            <button onclick="closeModal()" class="absolute right-4 top-4 h-8 w-8 rounded-full bg-blue-500 text-white">
                ✕
            </button>

            <h2 class="mb-6 text-center text-lg font-semibold text-[#1B4597]">
                Update Profile
            </h2>

            <div class="max-w-lg text-sm">
                <form action="">
                    <label for="email">
                        <span>Nama</span>
                        <input type="text" id="nama" placeholder="Masukkan Nama"
                            class="py-2 px-3  border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="name">
                        <span>NIP</span>
                        <input type="text" id="nip" placeholder="Masukkan NIP"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="email">
                        <span>Email</span>
                        <input type="email" id="email" placeholder="Masukkan Email"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-2">
                    </label>
                    <label for="password">
                        <span>Password</span>
                        <input type="password" id="password" placeholder="Masukkan Password"
                            class="py-2 px-3 border border-gray-300 shadow-lg rounded w-full block text-sm mb-5">
                    </label>
                    <div class="flex justify-center">
                        <button onclick="saveData()"
                            class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white">
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
    <script src="{{ asset('js/profil.js') }}"></script>
</x-layout.layout>