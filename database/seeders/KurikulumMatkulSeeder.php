<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KurikulumMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'id_prodi' => 1,
                'id_jurusan' => 1,
                'kode_prodi' => 'IF',
                'nama_prodi' => 'Teknik Informatika',
                'jenjang' => 'D3',
                'status_prodi' => 'published',
                'primary' => '#136479',
                'secondary' => '#01B2C2',
                'tertiary' => '#7EFFE1',
                'quaternary' => '#FF5B97',
                'logo' => 'prodi/logo/logo-if.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-if.svg',
                'visi' => 'Menjadi program studi yang unggul dalam pengembangan keilmuan rekayasa perangkat lunak, komputasi cerdas, dan sistem jaringan, berkontribusi pada pemecahan masalah industri dan masyarakat melalui pendekatan teknologi terapan, serta mendorong inovasi digital untuk mendukung Indonesia maju dan sejahtera.',
                'misi' => 'Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang keilmuan rekayasa perangkat lunak, komputasi cerdas, dan sistem jaringan, melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola program studi yang baik untuk kehidupan bangsa yang lebih baik.',
                'deskripsi' => 'Teknik Informatika merupakan program studi yang mengkhususkan pada pengembangan aplikasi software and hardware untuk tujuan tertentu. Lulusan memiliki keterampilan yang baik di bidang pemrograman dan jaringan serta kemampuan tambahan di bidang multimedia.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Programmer/Software Developer',
                        'deskripsi' => 'Fokus utama kompetensi ini adalah kemampuan menyeluruh dalam siklus hidup pengembangan perangkat lunak, mulai dari menganalisis kebutuhan pengguna dan menerjemahkannya ke dalam desain teknis, hingga membangun antarmuka serta arsitektur basis data yang kokoh pada platform web dan mobile menggunakan prinsip pemrograman terstruktur dan berorientasi objek yang sesuai dengan standar industri.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                    [
                        'judul' => 'Junior Network Administrator',
                        'deskripsi' => 'Kompetensi ini menitikberatkan pada keahlian infrastruktur jaringan yang mencakup perancangan pengalamatan IP yang efisien, pemasangan perangkat nirkabel, serta penguasaan teknis dalam mengonfigurasi perangkat keras seperti switch dan router untuk memastikan kelancaran lalu lintas data baik di dalam satu sistem otonom maupun antar jaringan skala luas.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'dosen_list' => [
                    [
                        'id_dosen' => 101,
                        'nama' => 'Hilda Widyastuti, S.T., M.T.',
                        'nik' => '102020',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'hilda@polibatam.ac.id',
                        'foto' => 'foto-dosen/hilda.png',
                        'riwayat' => [
                            'Sarjana (S1) Institut Teknologi Bandung : Teknik Informatika',
                            'Magister (S2) Institut Teknologi Bandung : Informatika'
                        ],
                        'spesialis' => ['Kecerdasan buatan']
                    ],
                    [
                        'id_dosen' => 102,
                        'nama' => 'Afdhol Dzikri, S.ST., M.T',
                        'nik' => '107048',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'afdhol@polibatam.ac.id',
                        'foto' => 'foto-dosen/afdhol.jpg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) PENS : Teknologi Informasi',
                            'Magister (S2) Institut Teknologi Sepuluh Nopember : Jaringan Cerdas Multimedia, Teknik Elektro'
                        ],
                        'spesialis' => ['Computer Vision', 'Biometrik']
                    ],
                    [
                        'id_dosen' => 103,
                        'nama' => 'Condra Antoni,SS, M.A',
                        'nik' => '107054',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'condra@polibatam.ac.id',
                        'foto' => 'foto-dosen/condra.jpeg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Andalas : Sastra Inggris',
                            'Magister (S2) Radboud University : Linguistic'
                        ],
                        'spesialis' => ['Linguistic']
                    ]
                ],
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 11,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 101,
                                'kode_matkul' => 'IF101',
                                'nama_matkul' => 'Pengantar Proyek Perangkat Lunak',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Pada mata kuliah ini mahasiswa akan mengenal profesi software developer, bidang kerja dan kode etik professional, dan kontribusi profesi pada masyarakat.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 102,
                                'kode_matkul' => 'IF102',
                                'nama_matkul' => 'Pengantar Teknologi Informasi',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Pada mata kuliah ini, mahasiswa mempelajari tentang pengenalan keilmuan dan lingkup teknologi informasi.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 103,
                                'kode_matkul' => 'IF103',
                                'nama_matkul' => 'Dasar Pemrograman Web',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Matakuliah ini mengenalkan mahasiswa pada pengembangan web dengan fokus pada pemahaman HTML, CSS, dan JS.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 104,
                                'kode_matkul' => 'IF207',
                                'nama_matkul' => 'Proyek Pembuatan Prototipe',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Pada mata kuliah ini, mahasiswa akan terlibat dalam pengembangan sebuah proyek perangkat lunak dalam format tim.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 105,
                                'kode_matkul' => 'IF208',
                                'nama_matkul' => 'Dasar Rekayasa Perangkat Lunak',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Pada mata kuliah ini, mahasiswa belajar mengenai pengertian perangkat lunak, rekayasa perangkat lunak, aktivitas pengembangan, dll.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 106,
                                'kode_matkul' => 'IF314',
                                'nama_matkul' => 'Proyek Inovasi Agile',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 3,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Pada mata kuliah ini mahasiswa akan memperdalam dan memperkuat kemampuan mengembangkan produk perangkat lunak.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 107,
                                'kode_matkul' => 'IF315',
                                'nama_matkul' => 'Analisis Desain Sistem',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Memberikan pemahaman mengenai prinsip-prinsip manajemen proyek pengembangan perangkat lunak.',
                                'file_rps' => '-'
                            ],
                        ]
                    ]
                ]
            ],
            [
                'id_prodi' => 2,
                'id_jurusan' => 1,
                'kode_prodi' => 'GM',
                'nama_prodi' => 'Teknologi Geomatika',
                'jenjang' => 'D3',
                'status_prodi' => 'published',
                'primary' => '#00584A',
                'secondary' => '#119961',
                'tertiary' => '#D8FF6C',
                'quaternary' => '#FFC300',
                'logo' => 'prodi/logo/logo-gm.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-gm.svg',
                'visi' => 'Menghasilkan ahli madya komputer yang kompeten di bidang jaringan dan komputasi awan.',
                'misi' => '1. Menyelenggarakan pendidikan praktis di bidang infrastruktur IT.\n2. Menjalin kerja sama sertifikasi industri seperti Cisco dan AWS.',
                'deskripsi' => 'D3 Teknologi Geomatika merupakan program studi yang mengkhususkan pada pengembangan aplikasi software dan hardware untuk tujuan tertentu. Lulusan memiliki keterampilan yang baik di bidang pemrograman and jaringan serta kemampuan tambahan di bidang multimedia.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Programmer/Software Developer',
                        'deskripsi' => 'Fokus utama kompetensi ini adalah kemampuan menyeluruh dalam siklus hidup pengembangan perangkat lunak.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                    [
                        'judul' => 'Junior Network Administrator',
                        'deskripsi' => 'Kompetensi ini menitikberatkan pada keahlian infrastruktur jaringan.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 21,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 214,
                                'kode_matkul' => 'TG101',
                                'nama_matkul' => 'Pengantar Geomatika',
                                'semester' => 1,
                                'sesi_teori' => 1,
                                'sesi_praktikum' => 7,
                                'bobot_teori' => 1,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Matakuliah ini terdiri dari 10 pokok topik bahasan dan menjadi mata kuliah backbone.',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 287,
                                'kode_matkul' => 'TG102',
                                'nama_matkul' => 'Matematika Geodesi',
                                'semester' => 1,
                                'sesi_teori' => 2,
                                'sesi_praktikum' => 4,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Matakuliah ini terdiri dari 9 pokok bahasan matematika.',
                                'file_rps' => '-'
                            ],
                        ]
                    ]
                ]
            ],
            [
                'id_prodi' => 3,
                'id_jurusan' => 1,
                'kode_prodi' => 'AN',
                'nama_prodi' => 'Animasi',
                'jenjang' => 'D4',
                'status_prodi' => 'published',
                'primary' => '#980003',
                'secondary' => '#DB0063',
                'tertiary' => '#FF00D0',
                'quaternary' => '#00AEFF',
                'logo' => 'prodi/logo/logo-an.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-an.svg',
                'visi' => 'Menghasilkan ahli madya komputer yang kompeten di bidang jaringan dan komputasi awan.',
                'misi' => '1. Menyelenggarakan pendidikan praktis di bidang infrastruktur IT.\n2. Menjalin kerja sama sertifikasi industri seperti Cisco dan AWS.',
                'deskripsi' => 'D4 Animasi merupakan program studi yang mengkhususkan pada pengembangan aplikasi software dan hardware untuk tujuan tertentu.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Programmer/Software Developer',
                        'deskripsi' => 'Fokus utama kompetensi ini adalah kemampuan menyeluruh dalam siklus hidup pengembangan.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 31,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 390,
                                'kode_matkul' => 'AN107',
                                'nama_matkul' => 'Pengembangan Cerita',
                                'semester' => 1,
                                'sesi_teori' => 2,
                                'sesi_praktikum' => 3,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Mata kuliah ini bertujuan agar mahasiswa memahami proses membuat ide cerita.',
                                'file_rps' => '-'
                            ],
                        ]
                    ]
                ]
            ],
            [
                'id_prodi' => 4,
                'id_jurusan' => 1,
                'kode_prodi' => 'TRM',
                'nama_prodi' => 'Teknologi Rekayasa Multimedia',
                'jenjang' => 'D4',
                'status_prodi' => 'published',
                'primary' => '#AB0000',
                'secondary' => '#D52700',
                'tertiary' => '#FF9D00',
                'quaternary' => '#259CFE',
                'logo' => 'prodi/logo/logo-trm.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-trm.svg',
                'visi' => 'Menjadi program studi vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri.',
                'misi' => 'Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang multimedia.',
                'deskripsi' => 'Program Studi Sarjana Terapan Teknologi Rekayasa Multimedia Politeknik Negeri Batam.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Desainer Grafis',
                        'deskripsi' => 'Menciptakan elemen visual untuk media cetak dan digital.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'dosen_list' => [
                    [
                        'id_dosen' => 401,
                        'nama' => 'Happy Yugo Prasetiya, S.Sn., M.Sn.',
                        'nik' => '112092',
                        'jabatan' => 'Kepala Program Studi',
                        'pendidikan' => 'S2',
                        'email' => 'yugo@polibatam.ac.id',
                        'foto' => 'foto-dosen/Happy.jpg',
                        'riwayat' => ['Sarjana (S1) UMN', 'Magister (S2) ISI Yogyakarta'],
                        'spesialis' => ['Desain Komunikasi Visual']
                    ]
                ],
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 41,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 401, 
                                'kode_matkul' => 'TRM101',
                                'nama_matkul' => 'Ide Kreatif',
                                'semester' => 1,
                                'sesi_teori' => 2,
                                'sesi_praktikum' => 4,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Mata kuliah ide kreatif merupakan pondasi dasar dalam penciptaan karya.',
                                'file_rps' => '-'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id_prodi' => 5,
                'id_jurusan' => 1,
                'kode_prodi' => 'RKS',
                'nama_prodi' => 'Teknologi Rekayasa Keamanan Siber',
                'jenjang' => 'D4',
                'status_prodi' => 'published',
                'primary' => '#506476',
                'secondary' => '#8F9DBB',
                'tertiary' => '#D0DEF2',
                'quaternary' => '#1F9EFF',
                'logo' => 'prodi/logo/logo-rks.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-rks.svg',
                'visi' => 'Menghasilkan ahli madya komputer yang kompeten di bidang jaringan.',
                'misi' => '1. Menyelenggarakan pendidikan praktis di bidang infrastruktur IT.',
                'deskripsi' => 'D4 Rekayasa Keamanan Siber merupakan program studi yang mengkhususkan pada pengembangan aplikasi.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Security Analyst',
                        'deskripsi' => 'Memantau dan menganalisis sistem keamanan jaringan.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 51,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 501, 
                                'kode_matkul' => 'RKS101',
                                'nama_matkul' => 'Dasar Keamanan Siber',
                                'semester' => 1,
                                'sesi_teori' => 2,
                                'sesi_praktikum' => 4,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Mata kuliah dasar keamanan siber.',
                                'file_rps' => '-'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id_prodi' => 6,
                'id_jurusan' => 1,
                'kode_prodi' => 'PM',
                'nama_prodi' => 'Teknologi Permainan',
                'jenjang' => 'D4',
                'status_prodi' => 'published',
                'primary' => '#5C0071',
                'secondary' => '#8400D0',
                'tertiary' => '#4D00FF',
                'quaternary' => '#FF00C8',
                'logo' => 'prodi/logo/logo-tp.svg',
                'ilustrasi' => 'prodi/ilustrasi/ilustrasi-tp.svg',
                'visi' => 'Menghasilkan ahli madya komputer yang kompeten.',
                'misi' => '1. Menyelenggarakan pendidikan praktis.',
                'deskripsi' => 'D4 Teknologi Permainan merupakan program studi yang mengkhususkan pada pengembangan game.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Game Designer',
                        'deskripsi' => 'Merancang alur cerita, core mechanics, dan level difficulty.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
               
                'kurikulum_list' => [
                    [
                        'id_kurikulum' => 61,
                        'nama_kurikulum' => 'k24',
                        'status' => 'Aktif',
                        'detail_matkul' => [
                            [
                                'id_MK' => 601,
                                'kode_matkul' => 'PM101',
                                'nama_matkul' => 'Dasar Logika Game Engine',
                                'semester' => 1,
                                'sesi_teori' => 2,
                                'sesi_praktikum' => 4,
                                'bobot_teori' => 1,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => 'Mata kuliah dasar pemrograman interaktif game.',
                                'file_rps' => '-'
                            ]
                        ]
                    ]
                ]
            ],
        ];

        // START LOOPING PRODI
        foreach ($prodis as $prodi) {
            // A. Insert ke tabel prodi
            DB::table('prodi')->insert([
                'id_prodi' => $prodi['id_prodi'],
                'id_jurusan' => $prodi['id_jurusan'],
                'kode_prodi' => $prodi['kode_prodi'],
                'nama_prodi' => $prodi['nama_prodi'],
                'jenjang' => $prodi['jenjang'],
                'status_prodi' => $prodi['status_prodi'],
            ]);

            // B. Akun Tim Kurikulum Otomatis per Prodi
            DB::table('user')->insert([
                'id_prodi' => $prodi['id_prodi'],
                'nama' => 'Tim Kurikulum ' . $prodi['kode_prodi'],
                'nip' => '1990010' . $prodi['id_prodi'],
                'email' => 'kurikulum.' . strtolower($prodi['kode_prodi']) . '@example.com',
                'password' => Hash::make('kurikulum123'),
                'role' => 'tim_kurikulum'
            ]);

            // C. Data detail_prodi
            DB::table('detail_prodi')->insert([
                'id_detail_prodi' => $prodi['id_prodi'],
                'id_prodi' => $prodi['id_prodi'],
                'visi' => $prodi['visi'],
                'misi' => $prodi['misi'],
                'deskripsi_prodi' => $prodi['deskripsi'],
                'logo' => $prodi['logo'],
                'ilustrasi' => $prodi['ilustrasi'],
            ]);

            // D. Profil Lulusan (Looping Cabang)
            foreach ($prodi['profil_lulusan_list'] as $profil) {
                DB::table('profil_lulusan')->insert([
                    'id_detail_prodi' => $prodi['id_prodi'],
                    'judul_lulusan' => $profil['judul'],
                    'deskripsi_lulusan' => $profil['deskripsi'],
                    'icon_lulusan' => $profil['icon']
                ]);
            }

            // F. Kustomisasi warna khas masing-masing prodi
            DB::table('kustomisasi')->insert([
                'id_kustomisasi' => $prodi['id_prodi'],
                'id_prodi' => $prodi['id_prodi'],
                'primary_color' => $prodi['primary'],
                'secondary_color' => $prodi['secondary'],
                'tertiary_color' => $prodi['tertiary'],
                'quaternary_color' => $prodi['quaternary']
            ]);

            // G. DATA DOSEN & DETAIL RELASINYA (Otomatis per Prodi)
            if (isset($prodi['dosen_list']) && is_array($prodi['dosen_list'])) {
                foreach ($prodi['dosen_list'] as $dosen) {
                    DB::table('dosen')->insert([
                        'id_dosen' => $dosen['id_dosen'],
                        'id_prodi' => $prodi['id_prodi'],
                        'nama_dosen' => $dosen['nama'],
                        'NIK' => $dosen['nik'],
                        'status_jabatan' => $dosen['jabatan'],
                        'jenjang_pendidikan' => $dosen['pendidikan'],
                        'email' => $dosen['email'],
                        'foto_dosen' => $dosen['foto'],
                    ]);

                    foreach ($dosen['riwayat'] as $rw) {
                        DB::table('riwayat_pendidikan')->insert([
                            'id_dosen' => $dosen['id_dosen'],
                            'deskripsi_riwayat' => $rw
                        ]);
                    }

                    foreach ($dosen['spesialis'] as $sp) {
                        DB::table('bidang_spesialis')->insert([
                            'id_dosen' => $dosen['id_dosen'],
                            'deskripsi_bidang' => $sp
                        ]);
                    }
                }
            }

            // H. DATA KURIKULUM & MATA KULIAH BERELASI (Dinamis per Prodi)
            if (isset($prodi['kurikulum_list']) && is_array($prodi['kurikulum_list'])) {
                foreach ($prodi['kurikulum_list'] as $kurikulum) {
                    if (!is_array($kurikulum)) continue;

                    // 1. Insert ke tabel 'kurikulum'
                    DB::table('kurikulum')->insert([
                        'id_kurikulum' => $kurikulum['id_kurikulum'],
                        'id_prodi' => $prodi['id_prodi'],
                        'nama_kurikulum' => $kurikulum['nama_kurikulum'],
                        'tahun_mulai' => 2026,
                        'total_semester' => ($prodi['jenjang'] === 'D3') ? 6 : 8,
                        'status_kurikulum' => $kurikulum['status']
                    ]);

                    // 2. Looping isi detail mata kuliah
                    if (isset($kurikulum['detail_matkul']) && is_array($kurikulum['detail_matkul'])) {
                        foreach ($kurikulum['detail_matkul'] as $dm) {
                            if (!is_array($dm)) continue;

                            // 3. Insert/Update tabel master 'matakuliah'
                            DB::table('matakuliah')->updateOrInsert(
                                ['id_MK' => $dm['id_MK']],
                                [
                                    'kode_matkul' => $dm['kode_matkul'],
                                    'nama_matkul' => $dm['nama_matkul'],
                                ]
                            );

                            // 4.PERBAIKAN UTAMA: Menggunakan updateOrInsert sebagai pagar anti-duplikasi matkul
                            DB::table('detail_kurikulum')->updateOrInsert(
                                [
                                    'id_kurikulum' => $kurikulum['id_kurikulum'],
                                    'id_MK' => $dm['id_MK']
                                ],
                                [
                                    'semester' => $dm['semester'],
                                    'sesi_teori' => $dm['sesi_teori'],
                                    'sesi_praktikum' => $dm['sesi_praktikum'],
                                    'bobot_teori' => $dm['bobot_teori'],
                                    'bobot_praktikum' => $dm['bobot_praktikum'],
                                    'status_matkul' => $dm['status_matkul'],
                                    'sks' => $dm['sks'],
                                    'bahan_pustaka' => $dm['bahan_pustaka'] ?? null,
                                    'cpk' => $dm['cpk'] ?? null,
                                    'cpm' => $dm['cpm'] ?? null,
                                    'deskripsi' => $dm['deskripsi'] ?? null,
                                    'file_rps' => $dm['file_rps'] ?? null,
                                ]
                            );
                        }
                    }
                }
            }
        }
    }
}