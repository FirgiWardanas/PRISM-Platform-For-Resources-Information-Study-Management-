<div class="space-y-4">
    @for($i = 1; $i <= $kurikulum->total_semester; $i++)
        @php
            $details = $kurikulum->detailKurikulums->where('semester', $i);
        @endphp
        <div class="bg-white rounded-xl p-4 shadow-md border border-gray-300">
            <div onclick="toggleSemester(this)" class="flex justify-between items-center cursor-pointer">
                <span class="tracking-widest font-semibold text-[#001286]">SEMESTER {{ $i }}</span>
                <img src="{{ asset('images/panah.png') }}" class="h-5 w-5 transition-transform duration-300 arrow">
            </div>
            <div class="mt-3 hidden content">
                <div class="overflow-x-auto">
                    <div class="min-w-[700px] rounded-t-lg overflow-hidden shadow border border-gray-300">
                        <table class="w-full text-[10px] sm:text-xs border-collapse">
                            <colgroup>
                                <col class="w-[40px]"><col class="w-[70px]"><col class="w-[150px]">
                                <col class="w-[50px]"><col class="w-[40px]"><col class="w-[40px]">
                                <col class="w-[40px]"><col class="w-[40px]"><col class="w-[90px]">
                                <col class="w-[70px]">
                            </colgroup>
                            <thead>
                                <tr class="bg-[#D9E5FF] text-[11px] text-center">
                                    <th rowspan="2" class="p-2">No</th>
                                    <th rowspan="2" class="p-2">Kode</th>
                                    <th rowspan="2" class="p-2 text-left">Nama</th>
                                    <th rowspan="2" class="p-2">SKS</th>
                                    <th colspan="2" class="p-2">Bobot SKS</th>
                                    <th colspan="2" class="p-2">Jam/Sesi</th>
                                    <th rowspan="2" class="p-2">Kategori</th>
                                    <th rowspan="2" class="p-2">Silabus</th>
                                </tr>
                                <tr class="bg-[#D9E5FF] text-[9px] text-center">
                                    <th class="p-1">T</th><th class="p-1">P</th>
                                    <th class="p-1">T</th><th class="p-1">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($details as $idx => $detail)
                                    <tr class="text-[10px] text-center border-t border-gray-100 hover:bg-blue-50">
                                        <td class="p-2">{{ $idx + 1 }}</td>
                                        <td class="p-2">{{ $detail->matakuliah->kode_matkul }}</td>
                                        <td class="p-2 text-left">{{ $detail->matakuliah->nama_matkul }}</td>
                                        <td class="p-2">{{ $detail->sks }}</td>
                                        <td class="p-2">{{ $detail->bobot_teori ?? '-' }}</td>
                                        <td class="p-2">{{ $detail->bobot_praktikum ?? '-' }}</td>
                                        <td class="p-2">{{ $detail->sesi_teori ?? '-' }}</td>
                                        <td class="p-2">{{ $detail->sesi_praktikum ?? '-' }}</td>
                                        <td class="p-2 capitalize">{{ $detail->status_matkul }}</td>
                                        <td class="p-2 flex justify-center items-center">
                                            <img src="{{ asset('images/silabus.png') }}"
                                                class="cursor-pointer w-4 sm:w-5"
                                                onclick='openModalSilabus({
                                                    "nama_matkul":   "{{ addslashes($detail->matakuliah->nama_matkul) }}",
                                                    "kode_matkul":   "{{ $detail->matakuliah->kode_matkul }}",
                                                    "sks":           "{{ $detail->sks }}",
                                                    "deskripsi":     "{{ addslashes($detail->silabus?->deskripsi ?? '') }}",
                                                    "cpm":           "{{ addslashes($detail->silabus?->cpm ?? '') }}",
                                                    "cpk":           "{{ addslashes($detail->silabus?->cpk ?? '') }}",
                                                    "bahan_pustaka": "{{ addslashes($detail->silabus?->bahan_pustaka ?? '') }}",
                                                    "file_rps":      "{{ $detail->silabus?->file_rps ?? '' }}"
                                                })'>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="p-4 text-center text-gray-400 italic text-xs">
                                            Belum ada matakuliah untuk semester ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>