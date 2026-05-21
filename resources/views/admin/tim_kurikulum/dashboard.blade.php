<x-layout.layout>

    <body class="font-montserrat bg-cover bg-center bg-no-repeat h-screen overflow-hidden"
        style="background-image: url('{{ asset('images/image-7.png') }}');">

        <div class="flex h-full px-4 py-4 gap-4">

            <!-- Sidebar -->
            <aside class="w-64 shrink-0 rounded-3xl bg-white p-5 shadow-lg border border-gray-300">
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
                        class="flex items-center gap-0 rounded-full bg-gradient-to-r from-[#0088FF] to-[#3600C9] font-bold px-4 py-3 text-white shadow">
                        <img src="{{ asset('images/icon-dashboard(putih).svg') }}" class="h-4 w-4">Dashboard</a>
                    <a href="/admin/kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Kurikulum</a>
                    <a href="/admin/matakuliah"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-kurikulum(biru).svg') }}" class="h-4 w-4 mb-1 ">Matakuliah</a>
                    <a href="/admin/profile-tim-kurikulum"
                        class="flex items-center gap-0 rounded-full px-4 py-3 bg-gradient-to-r from-[#067AFA] to-[#3307CC] bg-clip-text text-transparent font-bold hover:bg-gray-200">
                        <img src="{{ asset('images/icon-profile(biru).svg') }}" class="h-4 w-4">Profile</a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 flex flex-col h-full">

                <div class="p-1 pb-0">
                    <div class="flex items-start justify-between mb-6">
                        <h1 class="text-2xl font-semibold">Dashboard</h1>
                        <img src="{{ asset('images/Profile Circle.svg') }}"
                            class="w-12 h-12 bg-gradient-to-r from-[#3665DF] to-[#9A55FF]  rounded-full ">
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto p-1 space-y-6">
                    <!-- Welcome Banner -->
                    <div
                        class="bg-gradient-to-r from-[#AD00F1] via-[#3700E9] to-[#009DFF] text-white p-6 rounded-2xl shadow-lg">
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
                                <input type="text" placeholder="Search"
                                    class="w-full border border-gray-300 focus:outline-none rounded-lg p-2 text-sm" />
                            </div>

                            <div class="bg-white h-32 rounded-xl shadow"></div>
                        </div>

                    </div>
                </div>

            </main>
        </div>
    </body>
</x-layout.layout>