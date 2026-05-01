<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>


            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-[#AD00F1] via-[#3700E9] to-[#009DFF] 
            text-white p-6 rounded-2xl shadow-lg">
                <p class="text-sm opacity-80">HELLO Name!</p>
                <h1 class="text-2xl font-bold">Welcome Back</h1>
                <p class="text-xs mt-2 opacity-70">1 januari 2026</p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-3 gap-3">
                <div class="bg-gradient-to-r from-[#3864CF] to-[#3C8FFB] text-white p-4 rounded-xl shadow">
                    <p class="text-sm">Program studi</p>
                    <h2 class="text-xl font-bold">7</h2>
                </div>

                <div class="bg-gradient-to-r from-[#FE5E62] to-[#F98584] text-white p-4 rounded-xl shadow">
                    <p class="text-sm">Kurikulum</p>
                    <h2 class="text-xl font-bold">4</h2>
                </div>

                <div class="bg-gradient-to-r from-[#39D43E] to-[#49F843] text-white p-4 rounded-xl shadow">
                    <p class="text-sm">Mata kuliah</p>
                    <h2 class="text-xl font-bold">30</h2>
                </div>

            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-3 gap-4">

                <!-- Left -->
                <div class="col-span-2 space-y-4">

                    <div class="bg-white h-32 rounded-xl shadow"></div>

                    <!-- Table -->
                    <div class="bg-white p-4 rounded-xl shadow">
                        <div class="flex justify-between mb-3">
                            <h3 class="font-semibold">Kurikulum aktif</h3>
                            <button class="text-blue-500 text-sm">Selengkapnya →</button>
                        </div>

                        <table class="w-full  table-fixed text-sm">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-2 text-left w-12">No</th>
                                    <th class="p-2 text-left w-20">Kode</th>
                                    <th class="p-2 text-left w-1/2">Nama Matkul</th>
                                    <th class="p-2 text-center w-16">SKS</th>
                                    <th class="p-2 text-left w-24">Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="p-2">1</td>
                                    <td class="p-2">p02</td>
                                    <td class="p-2 whitespace-normal">pemrograman basis data </td>
                                    <td class="p-2 text-center">5</td>
                                    <td class="p-2">bersiap</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right -->
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-xl shadow">
                        <h3 class="font-semibold mb-3">Matakuliah</h3>

                        <div class="space-y-2 text-sm">
                            <div>
                                <p>Langsung</p>
                                <div class="w-full bg-gray-200 h-2 rounded">
                                    <div class="bg-blue-500 h-2 rounded w-3/4"></div>
                                </div>
                            </div>

                            <div>
                                <p>Pendukung</p>
                                <div class="w-full bg-gray-200 h-2 rounded">
                                    <div class="bg-green-500 h-2 rounded w-1/2"></div>
                                </div>
                            </div>

                            <div>
                                <p>Tidak langsung</p>
                                <div class="w-full bg-gray-200 h-2 rounded">
                                    <div class="bg-red-500 h-2 rounded w-1/3"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow">
                        <input type="text" placeholder="Search" class="w-full border rounded-lg p-2 text-sm" />
                    </div>

                    <div class="bg-white h-32 rounded-xl shadow"></div>
                </div>

            </div>

        </main>
    </div>
    </body>
    </x-layout.layout>