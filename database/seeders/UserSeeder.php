<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserKurikulum;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        UserKurikulum::create([
            'nip'      => '198501012010011001',
            'nama'     => 'Ketua Jurusan',
            'email'    => 'ketuajurusan@gmail.com',
            'password' => bcrypt('ketua123'),
            'role'     => 'ketua_jurusan',
            'id_prodi' => null,
        ]);

        UserKurikulum::create([
            'nip'      => '199001032012013003',
            'nama'     => 'Tim Kurikulum',
            'email'    => 'timkurikulum@gmail.com',
            'password' => bcrypt('kurikulum123'),
            'role'     => 'tim_kurikulum',
            'id_prodi' => 1,
        ]);
    }
}