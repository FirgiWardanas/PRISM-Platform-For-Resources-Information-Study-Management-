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
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Kurikulum</a>
                    <a href="/admin/matakuliah"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Matakuliah</a>
                    <a href="/admin/profile-tim-kurikulum"
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/icon-profil(putih).svg') }}" class="h-4 w-4">Profile</a>

                </nav>
            </aside>

            <!-- Main -->
            <main class="ml-6 flex-1">

                <div class="flex items-start justify-between mb-6">
                    <h1 class="text-2xl font-semibold">Profile</h1>
                    <div class="flex flex-col items-end gap-6">
                        <img src="{{ asset('images/Profile Circle.svg') }}" alt="profil"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full ">
                    </div>
                </div>

                <div
                    class="relative flex justify-between rounded-2xl bg-white p-10 shadow-xl h-[300px] border border-gray-300">

                    <!-- Pensil -->
                    <button onclick="openModal()"
                        class="absolute top-5 right-5 text-gray-500 hover:text-blue-500 text-xl w-6 h-6 cursor-pointer">
                        <img src="{{ asset('images/icon-edit.svg') }}">
                    </button>

                    <!-- Kiri -->
                    <div class="flex items-center gap-8">
                        <div class="h-20 w-20 rounded-full bg-gradient-to-br from-purple-500 to-blue-500"></div>

                        <div class="text-sm text-gray-700 space-y-1">
                            <h2 class="text-lg font-semibold mb-2">Kisabat</h2>
                            <p>Nama : <span id="viewNama">Kisabat</span></p>
                            <p>NIP : <span id="viewNip">4786</span></p>
                            <p>Email : <span id="viewEmail">kisabatadin@gmail.com</span></p>
                            <p>Password : <span id="viewPassword">payakumbuah86</span></p>
                        </div>
                    </div>

                    <!-- Logout bawah -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center gap-1 mt-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 px-6 py-3 text-white shadow hover:opacity-90">
                            Logout <img src="{{ asset('images/icon-logout.svg') }}" class="h-4 w-4">
                        </button>
                    </form>

                </div>

            </main>
        </div>

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
                                class="w-40 mx-auto rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 py-2 text-white cursor-pointer">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </body>
    <script src="{{ asset('js/profil.js') }}"></script>
</x-layout.layout>