<x-layout.layout>
    <body class="font-montserrat bg-cover" style="background-image: url('{{ asset('images/image-7.png') }}')">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6 ml-72">
            <!-- Header -->
            <x-admin.header>Kelola Akun </x-admin.header>

                <!-- Content -->
                <div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-bold text-gray-800">Akun</h2>
    <button class="bg-blue-600 text-white text-sm font-semibold px-5 py-2 rounded-xl hover:bg-blue-700">
        Tambah +
    </button>
</div>

<div class="bg-white rounded-3xl shadow-lg p-6">
    <div class="overflow-y-auto max-h-[70vh]">
        <table class="w-full">
            <thead class="sticky top-0 bg-white">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-purple-600">Nama</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-purple-600">NIP</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-purple-600">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-purple-600">Password</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-purple-600">Prodi</th>
                    <th class="px-8 py-3 text-left text-sm font-semibold text-purple-600">  Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach([
                    ['Jane Doe', '123456', 'janedoe@gmail.com', 'pass123', 'TRPL'],
                    ['John Smith', '234567', 'johnsmith@gmail.com',  'pass234', 'TRPL'],
                    ['Alice Brown', '345678', 'alicebrown@gmail.com', 'pass345', 'SI'],
                    ['Bob Johnson', '456789', 'bobjohnson@gmail.com', 'pass456', 'SI'],
                    ['Clara White', '567890', 'clarawhite@gmail.com', 'pass567', 'TI'],
                    ['David Lee', '678901', 'davidlee@gmail.com', 'pass678', 'TI'],
                    ['Eva Green', '789012', 'evagreen@gmail.com', 'pass789', 'TRPL'],
                    ['Frank Black', '890123', 'frankblack@gmail.com', 'pass890', 'SI'],
                    ['Grace Hall', '901234', 'gracehall@gmail.com', 'pass901', 'TI'],
                    ['Henry King', '012345', 'henryking@gmail.com', 'pass012', 'TRPL'],
                    ['Isla Scott', '111222', 'ilascott@gmail.com', 'pass111', 'SI'],
                    ['Jack Turner', '222333', 'jackturner@gmail.com', 'pass222', 'TI'],
                    ['Karen Adams', '333444', 'karenadams@gmail.com', 'pass333', 'TRPL'],
                    ['Leo Baker', '444555', 'leobaker@gmail.com', 'pass444', 'SI'],
                    ['Mia Clark', '555666', 'miaclark@gmail.com', 'pass555', 'TI'],
                ] as [$nama, $nip, $email, $password, $prodi])
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $nama }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $nip }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $email }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $password }}</td>
                    <td class="px-4 py-3">
                        <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-lg">{{ $prodi }}</span>
                    </td>
                    <td class="px-4 py-3 flex gap-2">
                        <button class="text-blue-600 hover:bg-blue-50 p-1.5 rounded-lg text-sm">✎</button>
                        <button class="text-red-500 hover:bg-red-50 p-1.5 rounded-lg text-sm">🗑</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>
        </body>
    </x-layout.layout>