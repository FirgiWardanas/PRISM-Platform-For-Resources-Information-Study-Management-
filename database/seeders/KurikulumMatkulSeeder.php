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
                    [
                        'judul' => 'Data Analyst',
                        'deskripsi' => 'Profil ini berfokus pada penjaminan integritas dan keamanan data melalui pengelolaan pusat data yang terstandar, pelaksanaan prosedur cadangan sistem secara berkala, serta penerapan teknik validasi untuk memastikan bahwa informasi yang dikelola akurat, aman dari ancaman privasi, dan sesuai dengan kebutuhan operasional organisasi.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                    [
                        'judul' => 'IT Project Supervisor',
                        'deskripsi' => 'Fokus utama pada bidang ini adalah manajerial teknis yang mengintegrasikan pengelolaan jadwal, sumber daya manusia, dan kualitas hasil kerja untuk memastikan seluruh tahapan proyek IT berjalan sesuai target, didukung oleh kemampuan komunikasi yang efektif guna menjembatani kebutuhan pemangku kepentingan dengan hasil akhir proyek.',
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
                    ],
                    [
                        'id_dosen' => 104,
                        'nama' => 'Mira Chandra Kirana, S.T., M.T',
                        'nik' => '109064',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => ' mira@polibatam.ac.id',
                        'foto' => 'foto-dosen/mira.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Institut Teknologi Sepuluh Nopember : Teknik Elektro',
                            'Magister (S2) Institut Teknologi Sepuluh Nopember : Teknik Elektro'
                        ],
                        'spesialis' => ['Biomedical Engineering', 'Image Processing', 'Intelligent System']
                    ],
                    [
                        'id_dosen' => 105,
                        'nama' => 'Nur Zahrati Janah, S.Kom, M.Sc',
                        'nik' => '112087',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'nur.zahrati@polibatam.ac.id',
                        'foto' => 'foto-dosen/nurzahrati.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Gajah Mada : Ilmu Komputer',
                            'Magister (S2) Universiti Teknologi PETRONAS, Malaysia : Information technology'
                        ],
                        'spesialis' => ['Software development', 'machine learning', 'image processing']
                    ],
                    [
                        'id_dosen' => 106,
                        'nama' => 'Yeni Rokhayati, S.Si., M.Sc',
                        'nik' => '112093',
                        'jabatan' => 'Kepala Program Studi',
                        'pendidikan' => 'S2',
                        'email' => ' yeni@polibatam.ac.id',
                        'foto' => 'foto-dosen/yeni.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Riau : Matematika',
                            'Magister (S2) Universiti Malaysia Terengganu : Sains Matematik'
                        ],
                        'spesialis' => ['Data Science']
                    ],
                    [
                        'id_dosen' => 107,
                        'nama' => 'Sartikha, S.ST., M.Eng',
                        'nik' => '113115',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'sartikha@polibatam.ac.id',
                        'foto' => 'foto-dosen/sartikha.jpg', 
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Institut Teknologi Bandung : Teknik Media Digital',
                            'Magister (S2) Universitas Gadjah Mada : Teknologi Informasi'
                        ],
                        'spesialis' => ['Database Engineering', 'Software Engineering', 'Optimization']
                    ],
                    [
                        'id_dosen' => 108,
                        'nama' => 'Rina Yelius, S.Pd., M.Eng',
                        'nik' => '118199',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'rinayelius@polibatam.ac.id',
                        'foto' => 'foto-dosen/ryulius.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Negeri Padang : Pendidikan Teknik Informatika dan Komputer',
                            'Magister (S2) Universitas Gadjah Mada : Teknik Elektro'
                        ],
                        'spesialis' => ['E-Learning', 'Human Computer Interaction', 'Gamification']
                    ],
                    [
                        'id_dosen' => 109,
                        'nama' => 'Swono Sibagariang, S.Kom., M.Kom',
                        'nik' => '119224',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'swono@polibatam.ac.id',
                        'foto' => 'foto-dosen/swono.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) Univ Khatolik Santo Thomas Sumatera Utara : Teknik Informatika',
                            'Magister (S2) Universitas Sumatera Utara : Ilmu dan Teknologi'
                        ],
                        'spesialis' => ['Software Development']
                    ],
                    [
                        'id_dosen' => 110,
                        'nama' => 'Siskha Handayani, M.Si',
                        'nik' => '121246',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'siskha@polibatam.ac.id',
                        'foto' => 'foto-dosen/siskha.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Andalas : Matematika',
                            'Magister (S2) Universitas Andalas : Matematika'
                        ],
                        'spesialis' => ['Matematika']
                    ],
                    [
                        'id_dosen' => 111,
                        'nama' => 'Dwi Amalia Purnamasari, S.T., M.Cs.',
                        'nik' => '121248',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'dwiamalia@polibatam.ac.id',
                        'foto' => 'foto-dosen/dwiamalia.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Maritim Raja Ali Haji : Teknik Informatika',
                            'Magister (S2) Universitas Gadjah Mada : Ilmu Komputer'
                        ],
                        'spesialis' => ['Software Development', 'Supply Chain Management', 'Forecasting']
                    ],
                    [
                        'id_dosen' => 112,
                        'nama' => 'Muhammad Idris, S.Tr., M.Tr.Kom',
                        'nik' => '122283',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'idris@polibatam.ac.id',
                        'foto' => 'foto-dosen/idris.jpg', 
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Multimedia & Jaringan',
                            'Magister (S2) PENS : Teknik Informatika dan Komputer'
                        ],
                        'spesialis' => ['Software Development', 'QA Software', 'Web Security']
                    ],
                    [
                        'id_dosen' => 113,
                        'nama' => 'Luki Aswar, M.Pd.',
                        'nik' => '124316',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'lukiaswar@polibatam.ac.id',
                        'foto' => 'foto-dosen/luki.jpeg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Riau : Pendidikan Bahasa dan Sastra Indonesia',
                            'Magister (S2) Universitas Negeri Padang : Pendidikan Bahasa dan Sastra Indonesia'
                        ],
                        'spesialis' => ['Pendidikan Bahasa Indonesia']
                    ],
                    [
                        'id_dosen' => 114,
                        'nama' => 'Ummul Fitri Afifah, S.Kom., M.MSI.',
                        'nik' => '125330',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'ummul@polibatam.ac.id',
                        'foto' => 'foto-dosen/ummul.jpeg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Prima Indonesia : Sistem Informasi',
                            'Magister (S2) Universitas Bina Nusantara : Manajemen Sistem Informasi'
                        ],
                        'spesialis' => ['IT Governance', 'AI']
                    ],
                    [
                        'id_dosen' => 115,
                        'nama' => 'Cyntia Lasmi Andesti, S.Kom., M.Kom',
                        'nik' => '125331',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'cyntia@polibatam.ac.id',
                        'foto' => 'foto-dosen/cyntia.png', 
                        'riwayat' => [
                            "Sarjana (S1) Universitas Putra Indonesia 'YPTK' Padang : Teknik Informatika",
                            "Magister (S2) Universitas Putra Indonesia 'YPTK' Padang : Teknik Informatika"
                        ],
                        'spesialis' => ['Artificial Intelligence', 'Data Mining']
                    ],
                    [
                        'id_dosen' => 116,
                        'nama' => 'Nadya Satya Handayani, S.Kom., M.Kom',
                        'nik' => '125351',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'nadyasatya@polibatam.ac.id',
                        'foto' => 'foto-dosen/nadya.jpeg', 
                        'riwayat' => [
                            'Sarjana (S1) STMIK Amik Riau : Teknik Informatika',
                            'Magister (S2) Universitas Islam Indonesia : Informatika'
                        ],
                        'spesialis' => ['Biomedical', 'AI']
                    ],
                    [
                        'id_dosen' => 117,
                        'nama' => 'Novia syafitriani, S.Tr.Akun',
                        'nik' => '213162',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'S1',
                        'email' => 'tu-if@polibatam.ac.id',
                        'foto' => 'foto-dosen/novia.jpg', 
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Akuntansi Manajerial'
                        ],
                        'spesialis' => ['-']
                    ],
                    [
                        'id_dosen' => 118,
                        'nama' => 'Dede Nurdiansyah, S.Sos',
                        'nik' => '218292',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'S1',
                        'email' => 'tu-if2@polibatam.ac.id',
                        'foto' => 'foto-dosen/dede.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) STIDKI AL-AZIZ BATAM : Komunikasi Islam'
                        ],
                        'spesialis' => ['Kajian Islam']
                    ],
                    [
                        'id_dosen' => 119,
                        'nama' => 'Muhamad Sahrul Nizan A.Md.Kom',
                        'nik' => '221320',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D3',
                        'email' => 'nizan@polibatam.ac.id',
                        'foto' => 'foto-dosen/nizan.jpg', 
                        'riwayat' => [
                            'Diploma (DIII) Politeknik Negeri Batam : Teknik Informatika'
                        ],
                        'spesialis' => ['Web']
                    ],
                    [
                        'id_dosen' => 120,
                        'nama' => 'Gilang Bagus Ramadhan, A.Md. Kom',
                        'nik' => '222331',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D3',
                        'email' => 'gilang@polibatam.ac.id',
                        'foto' => 'foto-dosen/gilang.jpg', 
                        'riwayat' => [
                            'Diploma (DIII) Politeknik Negeri Batam : Teknik Informatika'
                        ],
                        'spesialis' => ['Pengembangan Web']
                    ],
                    [
                        'id_dosen' => 121,
                        'nama' => 'Iqbal Afif, A.Md.Kom',
                        'nik' => '222332',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D3',
                        'email' => 'iqbal@polibatam.ac.id',
                        'foto' => 'foto-dosen/iqbal.jpg', 
                        'riwayat' => [
                            'Diploma (DIII) Politeknik Negeri Batam : Teknik Informatika'
                        ],
                        'spesialis' => ['Pengembangan Web']
                    ],
                    [
                        'id_dosen' => 122,
                        'nama' => 'Rhanna Mawira, S.E',
                        'nik' => '224345',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'S1',
                        'email' => 'tu-if3@polibatam.ac.id',
                        'foto' => 'foto-dosen/rhana.jpg', 
                        'riwayat' => [
                            'Sarjana (S1) Universitas Terbuka - Akuntansi'
                        ],
                        'spesialis' => ['Akuntansi']
                    ],
                    [
                        'id_dosen' => 123,
                        'nama' => 'Kevin Riady, A.Md.Kom',
                        'nik' => '225362',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D3',
                        'email' => 'kevin@polibatam.ac.id',
                        'foto' => 'foto-dosen/kevinriyadi.jpg', 
                        'riwayat' => [
                            'Diploma (DIII) Politeknik Negeri Batam : Teknik Informatika'
                        ],
                        'spesialis' => ['IT Hardware and software Maintenance']
                    ],



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
                                'deskripsi' => '-',
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
                                'deskripsi' => '-',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 104,
                                'kode_matkul' => 'IF104',
                                'nama_matkul' => 'Dasar Pemrograman',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 105,
                                'kode_matkul' => 'IF105',
                                'nama_matkul' => 'Sistem Komputer',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 106,
                                'kode_matkul' => 'IF106',
                                'nama_matkul' => 'Matematika',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 3,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 107,
                                'kode_matkul' => 'PK2IF',
                                'nama_matkul' => 'Pendidikan Pancasila',
                                'semester' => 1,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 108,
                                'kode_matkul' => 'IF201',
                                'nama_matkul' => 'Struktur Data',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 109,
                                'kode_matkul' => 'IF202',
                                'nama_matkul' => 'Pemrograman Berorientasi Objek',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 110,
                                'kode_matkul' => 'IF203',
                                'nama_matkul' => 'Basis Data',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 111,
                                'kode_matkul' => 'IF204',
                                'nama_matkul' => 'Jaringan Komputer',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 112,
                                'kode_matkul' => 'IF205',
                                'nama_matkul' => 'Aljabar Linier',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 113,
                                'kode_matkul' => 'PK203',
                                'nama_matkul' => 'Pendidikan Agama',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 114,
                                'kode_matkul' => 'PK204',
                                'nama_matkul' => 'Pendidikan Kewarganegaraan',
                                'semester' => 2,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 115,
                                'kode_matkul' => 'IF301',
                                'nama_matkul' => 'Algoritma dan Analisis Desain',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 116,
                                'kode_matkul' => 'IF302',
                                'nama_matkul' => 'Pemrograman Perangkat Bergerak',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 117,
                                'kode_matkul' => 'IF303',
                                'nama_matkul' => 'Administrasi dan Jaringan Server',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 118,
                                'kode_matkul' => 'IF304',
                                'nama_matkul' => 'Kecerdasan Buatan',
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
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 119,
                                'kode_matkul' => 'IF305',
                                'nama_matkul' => 'Statistika Komputasi',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 120,
                                'kode_matkul' => 'IF306',
                                'nama_matkul' => 'Metodologi Penelitian dan Penulisan Ilmiah',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 121,
                                'kode_matkul' => 'PK202',
                                'nama_matkul' => 'Pendidikan Bahasa Indonesia',
                                'semester' => 3,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 122,
                                'kode_matkul' => 'IF401',
                                'nama_matkul' => 'Rekayasa Perangkat Lunak',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 123,
                                'kode_matkul' => 'IF402',
                                'nama_matkul' => 'Pemrograman Sisi Server',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 124,
                                'kode_matkul' => 'IF403',
                                'nama_matkul' => 'Keamanan Perangkat Lunak dan Jaringan',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 125,
                                'kode_matkul' => 'IF404',
                                'nama_matkul' => 'Desain Pengalaman Pengguna',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 126,
                                'kode_matkul' => 'IF405',
                                'nama_matkul' => 'Pengujian Perangkat Lunak',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 127,
                                'kode_matkul' => 'IF406',
                                'nama_matkul' => 'Kewirausahaan',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 128,
                                'kode_matkul' => 'PK201',
                                'nama_matkul' => 'Pendidikan Bahasa Inggris',
                                'semester' => 4,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 129,
                                'kode_matkul' => 'IF501',
                                'nama_matkul' => 'Proyek Perangkat Lunak I',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 4,
                                'status_matkul' => 'langsung',
                                'sks' => 4,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 130,
                                'kode_matkul' => 'IF502',
                                'nama_matkul' => 'Administrasi Sistem',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 131,
                                'kode_matkul' => 'IF503',
                                'nama_matkul' => 'Kecerdasan Bisnis',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 132,
                                'kode_matkul' => 'IF504',
                                'nama_matkul' => 'Grafika Komputer',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 1,
                                'status_matkul' => 'langsung',
                                'sks' => 3,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 133,
                                'kode_matkul' => 'IF505',
                                'nama_matkul' => 'Manajemen Proyek Perangkat Lunak',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 134,
                                'kode_matkul' => 'IF506',
                                'nama_matkul' => 'Etika Profesi',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 135,
                                'kode_matkul' => 'IF507',
                                'nama_matkul' => 'Bahasa Inggris untuk Keperluan Akademik',
                                'semester' => 5,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 2,
                                'bobot_praktikum' => 0,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 136,
                                'kode_matkul' => 'IF627',
                                'nama_matkul' => 'Proyek Akhir',
                                'semester' => 6,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 6,
                                'status_matkul' => 'langsung',
                                'sks' => 6,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 137,
                                'kode_matkul' => 'MB1IF',
                                'nama_matkul' => 'Magang',
                                'semester' => 6,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 12,
                                'status_matkul' => 'langsung',
                                'sks' => 12,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
                                'file_rps' => '-'
                            ],
                            [
                                'id_MK' => 138,
                                'kode_matkul' => 'IF526',
                                'nama_matkul' => 'Technopreneurship',
                                'semester' => 6,
                                'sesi_teori' => 8,
                                'sesi_praktikum' => 8,
                                'bobot_teori' => 0,
                                'bobot_praktikum' => 2,
                                'status_matkul' => 'langsung',
                                'sks' => 2,
                                'bahan_pustaka' => '-',
                                'cpk' => '-',
                                'cpm' => '-',
                                'deskripsi' => '-',
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
                'visi' => 'Menjadi program studi yang unggul dalam pengembangan keilmuan bidang geomatika/geospasial meliputi survei terestris, survei hidrografi, sistem informasi geografis dan fotogrametri, berkontribusi pada pemecahan masalah industri dan masyarakat melalui pendekatan teknologi terapan, serta mendorong inovasi digital untuk mendukung Indonesia maju dan sejahtera.',
                'misi' => 'Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi dibidang keilmuan geomatika/geospasial meliputi survei terestris, survei hidrografi, sistem informasi geografis, dan fotogrametri, melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola program studi yang baik untuk kehidupan bangsa yang lebih baik.',
                'deskripsi' => 'Geomatika merupakan sains dan teknologi yang mempelajari tentang pengukuran obyek-obyek di muka bumi yang melibatkan pemakaian komputer dan teknologi komunikasi dan informasi dalam pengumpulan (survei), pengolahan dan analisis, presentasi (penggambaran), penyimpanan (storage), managemen dan distribusi informasi ruang permukaan bumi untuk mendukung berbagai pengambilan keputusan. Program Studi Diploma 3 Teknologi Geomatika Politeknik Negeri Batam didirikan berdasarkan Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 38/KPT/I/2015 tentang Pembukaan Program Studi Teknologi Geomatika Diploma Tiga di Politeknik Negeri Batam. Ada 5 sub-bidang yang diselenggarakan sesuai dengan SKKNI-Informasi Geospasial, yaitu: survei terestris, hidrografi, penginderaan jauh, sistem informasi geografi, dan kartografi. Teknologi Geomatika mengolah data geospasial yaitu data tentang lokasi geografis, dimensi atau ukuran, dan/atau karakteristik objek alam dan/atau buatan manusia yang berada di bawah, pada, atau di atas permukaan bumi.',
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
                    [
                        'judul' => 'Data Analyst',
                        'deskripsi' => 'Profil ini berfokus pada penjaminan integritas dan keamanan data melalui pengelolaan pusat data yang terstandar, pelaksanaan prosedur cadangan sistem secara berkala, serta penerapan teknik validasi untuk memastikan bahwa informasi yang dikelola akurat, aman dari ancaman privasi, dan sesuai dengan kebutuhan operasional organisasi.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                    [
                        'judul' => 'IT Project Supervisor',
                        'deskripsi' => 'Fokus utama pada bidang ini adalah manajerial teknis yang mengintegrasikan pengelolaan jadwal, sumber daya manusia, dan kualitas hasil kerja untuk memastikan seluruh tahapan proyek IT berjalan sesuai target, didukung oleh kemampuan komunikasi yang efektif guna menjembatani kebutuhan pemangku kepentingan dengan hasil akhir proyek.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                    [
                        'judul' => 'Software Quality Assurance (QA) Engineer',
                        'deskripsi' => 'Fokus utama pada bidang ini adalah penjaminan mutu perangkat lunak yang mencakup penyusunan rencana pengujian, pengembangan skenario pengujian otomatis maupun manual, serta pelaksanaan pengujian fungsionalitas, performa, dan keamanan sistem untuk memastikan bahwa produk akhir terbebas dari cacat dan memenuhi standar kualitas sebelum dirilis.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ]
                ],
                'dosen_list' => [
                    [
                        'id_dosen' => 201,
                        'nama' => 'Ir. Sudra Irawan, S.Pd.Si., M.Sc., IPM.',
                        'nik' => '113110',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'sudra@polibatam.ac.id',
                        'foto' => 'foto-dosen/s_irawan.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Negeri Yogyakarta : Pendidikan Fisika',
                            'Magister (S2) Universitas Gadjah Mada : Fisika'
                        ],
                        'spesialis' => ['Geoscience', 'Geophysics', 'Hydro-oceanography', 'Geology', 'GIS']
                    ],
                    [
                        'id_dosen' => 202,
                        'nama' => 'Ir. Oktavianto Gustin, S.T., M.T., IPM.',
                        'nik' => '115138',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'oktavianto@polibatam.ac.id',
                        'foto' => 'foto-dosen/oktav.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Institut Teknologi Sepuluh Nopember Surabaya : Teknologi Geomatika',
                            'Magister (S2) Institut Teknologi Sepuluh Nopember Surabaya : Teknologi Geomatika'
                        ],
                        'spesialis' => ['GNSS', 'Remote Sensing', 'Engineering Survey']
                    ],
                    [
                        'id_dosen' => 203,
                        'nama' => 'Muhammad Zainuddin Lubis, S.I.K, M.Si',
                        'nik' => '116162',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'zainuddinlubis@polibatam.ac.id',
                        'foto' => 'foto-dosen/zainuddin_.jpeg',
                        'riwayat' => [
                            'Sarjana (S1) IPB University : Ilmu dan Teknologi Kelautan',
                            'Magister (S2) IPB University : Teknologi Kelautan'
                        ],
                        'spesialis' => ['Hydrographic Survey', 'Physical Oceanography', 'Underwater Acoustic', 'Marine GIS']
                    ],
                    [
                        'id_dosen' => 204,
                        'nama' => 'Wenang Anurogo, S.Si., M.Sc.',
                        'nik' => '116163',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'wenang@polibatam.ac.id',
                        'foto' => 'foto-dosen/wenang.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Gadjah Mada : Geografi/Kartografi dan Penginderaan Jauh',
                            'Magister (S2) Gadjah Mada : Geografi/Magister Pengelolaan Pesisir dan Daerah Aliran Sungai (MPPDAS)'
                        ],
                        'spesialis' => ['Computer Network', 'Information Security', 'Computer Science']
                    ],
                    [
                        'id_dosen' => 205,
                        'nama' => 'Ir. Luthfiya Ratna Sari, S.Si., M.T.',
                        'nik' => '117196',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'luthfiya.ratna.s@polibatam.ac.id',
                        'foto' => 'foto-dosen/luthfiya.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Gadjah Mada : Kartografi dan Penginderaan Jauh',
                            'Magister (S2) Institut Teknologi Bandung : Teknik Geodesi dan Geomatika',
                            'PSPPI Politeknik Negeri Batam'
                        ],
                        'spesialis' => ['Aplikasi Sistem Informasi Geografis', 'Penginderaan Jauh', 'Kartografi']
                    ],
                    [
                        'id_dosen' => 206,
                        'nama' => 'Satriya Bayu Aji, S.S., M.Hum.',
                        'nik' => '118201',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'satriya@polibatam.ac.id',
                        'foto' => 'foto-dosen/satria.jpeg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Terbuka : Sastra Inggris Bidang Minat Penerjemahan',
                            'Magister (S2) Universitas Sebelas Maret : Ilmu Linguistik'
                        ],
                        'spesialis' => ['Bahasa Inggris']
                    ],
                    [
                        'id_dosen' => 207,
                        'nama' => 'Siti Noor Chayati, S.T., M.Sc',
                        'nik' => '118207',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'sitinoorchayati@polibatam.ac.id',
                        'foto' => 'foto-dosen/chayati.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Gadjah Mada : Teknik Geodesi',
                            'Magister (S2) University College London : Hydrographic Surveying'
                        ],
                        'spesialis' => ['Hydrographic Surveying']
                    ],
                    [
                        'id_dosen' => 208,
                        'nama' => 'Ir. Farouki Dinda Rassarandi, S.T., M.Eng.',
                        'nik' => '118208',
                        'jabatan' => 'Kepala Program Studi',
                        'pendidikan' => 'S2',
                        'email' => 'farouki@polibatam.ac.id',
                        'foto' => 'foto-dosen/farouki.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Institut Teknologi Nasional (ITN) Malang : Teknik Geodesi',
                            'Magister (S2) Universitas Gadjah Mada (UGM) : Teknologi Geomatika',
                            'PSPPI Politeknik Negeri Batam'
                        ],
                        'spesialis' => ['Survei Terestris & Geoinformatika']
                    ],
                    [
                        'id_dosen' => 209,
                        'nama' => 'Fendra Dwi Ramadhan, S.T., M.T.',
                        'nik' => '124326',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'fendra@polibatam.ac.id',
                        'foto' => 'foto-dosen/fendra.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Institut Teknologi Sepuluh Nopember - Teknik Geomatika',
                            'Magister (S2) Institut Teknologi Sepuluh Nopember - Teknik Geomatika'
                        ],
                        'spesialis' => ['Remote Sensing', 'Geographical Information System (GIS)', 'Geoinformatics', 'GNSS', 'Photogrammetry']
                    ],
                    [
                        'id_dosen' => 210,
                        'nama' => 'Arif Rahman, M.T',
                        'nik' => '125341',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'arifrahman@polibatam.ac.id',
                        'foto' => 'foto-dosen/ArifRahman_.jpeg',
                        'riwayat' => [
                            'Sarjana (S1) Univesitas Negeri Padang - Teknik Sipil',
                            'Magister (S2) Universitas Andalas - Teknik Sipil'
                        ],
                        'spesialis' => ['Perencanaan Bangunan', 'AutoCad']
                    ],
                    [
                        'id_dosen' => 211,
                        'nama' => 'Nur Israyani, S.T., M.T',
                        'nik' => '125352',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'nurisrayani@polibatam.ac.id',
                        'foto' => 'foto-dosen/nurisrayani.jpg',
                        'riwayat' => [
                            'Sarjana (S1) - Universitas Muslim Indonesia - Teknik Sipil',
                            'Magister (S2) - Universitas Hasanuddin - Teknik Sipil'
                        ],
                        'spesialis' => ['Geographical Information System (GIS)']
                    ]
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
                'visi' => 'Menjadi program studi vokasional yang bermutu, unggul, adaptif, inovatif, dan bermitra erat dengan industri dan masyarakat di bidang animasi mendukung Indonesia Maju dan Sejahtera 2045.',
                'misi' => 'Aktif dalam proses kreasi, penyebaran dan penerapan sains dan teknologi di bidang animasi melalui layanan pendidikan tinggi vokasi dan penelitian terapan yang bermutu, terbuka, relevan, dan berkolaborasi erat dengan masyarakat dan industri dengan penerapan tata kelola institusi yang baik untuk kehidupan bangsa yang lebih baik.',
                'deskripsi' => 'D4 Animasi merupakan program studi yang mengkhususkan pada pengembangan aplikasi software dan hardware untuk tujuan tertentu.',
                'profil_lulusan_list' => [
                    [
                        'judul' => 'Programmer/Software Developer',
                        'deskripsi' => 'Fokus utama kompetensi ini adalah kemampuan menyeluruh dalam siklus hidup pengembangan.',
                        'icon' => 'profil_lulusan/icon/icon-profillulusan.svg'
                    ],
                ],
                'dosen_list' => [
                    [
                        'id_dosen' => 301,
                        'nama' => 'Gendhy Dwi Harlyan, S.Sn.,M.Sn',
                        'nik' => '112086',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'Gendhy@polibatam.ac.id',
                        'foto' => 'foto-dosen/gendhy.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Negeri Malang : Desain Komunikasi Visual',
                            'Magister (S2) Institut kesenian Jakarta : Pengkajian Seni'
                        ],
                        'spesialis' => ['Audio Visual']
                    ],
                    [
                        'id_dosen' => 302,
                        'nama' => 'Ir. Selly Artaty Zega, S.ST., M.Sc',
                        'nik' => '113104',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'selly@polibatam.ac.id',
                        'foto' => 'foto-dosen/selly.jpg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Institut Teknologi Bandung : Desain Komunikasi Visual - Animasi',
                            'Magister (S2) Nanyang Technological University'
                        ],
                        'spesialis' => ['Digital Media Technology']
                    ],
                    [
                        'id_dosen' => 303,
                        'nama' => 'Anis Rahmi, S.Tr. Kom., M.Sn',
                        'nik' => '122259',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'anis@polibatam.ac.id',
                        'foto' => 'foto-dosen/anis.jpeg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Teknik Multimedia dan Jaringan',
                            'Magister (S2) Institut Seni Indonesia Yogyakarta : Penciptaan Seni Media Rekam (Animasi)'
                        ],
                        'spesialis' => ['2D skeletal animation', '3D Animation Workflow (Rigging, Lighting, Render & Compositing)', 'Object-oriented computer animation']
                    ],
                    [
                        'id_dosen' => 304,
                        'nama' => 'Feby, S.Pd, M.Pd',
                        'nik' => '122270',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'feby@polibatam.ac.id',
                        'foto' => 'foto-dosen/feby.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Bung Hatta : Pendidikan Bahasa Inggris',
                            'Magister (S2) Universitas Negeri Padang : Pendidikan Bahasa Inggris'
                        ],
                        'spesialis' => ['Bahasa Inggris']
                    ],
                    [
                        'id_dosen' => 305,
                        'nama' => 'Amirul Mu"minin, S.Ds, M.Ds.',
                        'nik' => '122280',
                        'jabatan' => 'Dosen',
                        'pendidikan' => 'S2',
                        'email' => 'amirul@polibatam.ac.id',
                        'foto' => 'foto-dosen/amirul.jpg',
                        'riwayat' => [
                            'Sarjana (S1) Universitas Negeri Makassar : Desain Komunikasi Visual',
                            'Magister (S2) Institut Teknologi Bandung, Magister Desain'
                        ],
                        'spesialis' => ['Desain Grafis', 'Game Desain', 'Visual Effect']
                    ],
                    [
                        'id_dosen' => 306,
                        'nama' => 'Riki, S.Tr., M.F.A',
                        'nik' => '124329',
                        'jabatan' => 'Kepala Program Studi',
                        'pendidikan' => 'S2',
                        'email' => 'riki@polibatam.ac.id',
                        'foto' => 'foto-dosen/riki_.jpg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Multimedia & Jaringan',
                            'Magister (S2) -'
                        ],
                        'spesialis' => ['Animasi']
                    ],
                    [
                        'id_dosen' => 307,
                        'nama' => 'Ahmad Saropi S.Tr Kom',
                        'nik' => '219306',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D4',
                        'email' => 'saropi@polibatam.ac.id',
                        'foto' => 'foto-dosen/saropi.jpg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Multimedia & Jaringan'
                        ],
                        'spesialis' => ['Desain & Animasi 3D']
                    ],
                    [
                        'id_dosen' => 308,
                        'nama' => 'Aldino Saputra, S.S. T',
                        'nik' => '219310',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D4',
                        'email' => 'aldino@polibatam.ac.id',
                        'foto' => 'foto-dosen/aldino.jpg',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Multimedia & Jaringan'
                        ],
                        'spesialis' => ['Animasi 3D']
                    ],
                    [
                        'id_dosen' => 309,
                        'nama' => 'Gerson Julyfer Parulian Tambun, S.Tr.T',
                        'nik' => '222336',
                        'jabatan' => 'Laboran',
                        'pendidikan' => 'D4',
                        'email' => 'gerson@polibatam.ac.id',
                        'foto' => 'foto-dosen/gerson.png',
                        'riwayat' => [
                            'Sarjana Terapan (DIV) Politeknik Negeri Batam : Animasi'
                        ],
                        'spesialis' => ['Animasi']
                    ]
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