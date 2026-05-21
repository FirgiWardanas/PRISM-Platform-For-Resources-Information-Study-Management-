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
<<<<<<< Updated upstream
            'id_prodi' => null,
=======
            'id_prodi' => NULL,
>>>>>>> Stashed changes
        ]);

        UserKurikulum::create([
            'nip'      => '199001032012013003',
            'nama'     => 'Tim Kurikulum',
            'email'    => 'timkurikulum@gmail.com',
            'password' => bcrypt('kurikulum123'),
            'role'     => 'tim_kurikulum',
            'id_prodi' => 1,
        ]);
        User::create([
            'nip'      => '199001032012013002',
            'nama'     => 'user',
            'email'    => 'timkur@gmail.com',
            'password' => bcrypt('kurikulum123'),
            'role'     => 'tim_kurikulum',
            'id_prodi' => 1,
        ]);
    }
}