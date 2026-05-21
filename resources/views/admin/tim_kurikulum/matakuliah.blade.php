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
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/untuk kurikulum putih.svg') }}" class="h-4 w-4">matakuliah</a>
                    <a href="/admin/profile-tim-kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/untuk profil(biru).svg') }}" class="h-4 w-4">Profile</a>


                </nav>
            </aside>

            <!-- Main -->
            <main class="ml-6 flex-1">

                <div class="flex items-start justify-between mb-6">
                    <h1 class="text-2xl font-semibold">Matakuliah</h1>
                    <div class="flex flex-col items-end gap-6">
                        <img src="{{ asset('images/Profile Circle.svg') }}" alt="profil"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF] rounded-full ">
                    </div>
                </div>

                <div class="px-12 space-y-4 ">

                    <!-- ITEM -->
                    <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                        <div class="grid grid-cols-[100px_1fr_150px_100px] text-sm w-full">
                        <p>M001</p>
                        <p>Pemrogramman Basis Data</p>
                    </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                        <div class="grid grid-cols-[100px_1fr_150px_100px] text-sm w-full">
                        <p>M002</p>
                        <p>Pemrogramman Basis Data</p>
                    </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                        <div class="grid grid-cols-[100px_1fr_150px_100px] text-sm w-full">
                        <p>M003</p>
                        <p>Pemrogramman Basis Data</p>
                    </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 shadow flex justify-between items-center border border-gray-300">
                        <div class="grid grid-cols-[100px_1fr_150px_100px] text-sm w-full">
                        <p>M004</p>
                        <p>Pemrogramman Basis Data</p>
                    </div>
                    </div>

                </div>
            </main>
        </div>

    </body>
    <script src="{{ asset('js/profil.js') }}"></script>
</x-layout.layout>