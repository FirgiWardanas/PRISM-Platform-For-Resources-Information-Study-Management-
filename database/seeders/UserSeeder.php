<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nip'      => '198501012010011001',
            'nama'     => 'Ketua Jurusan',
            'email'    => 'ketuajurusan@gmail.com',
            'password' => bcrypt('ketua123'),
            'role'     => 'ketua_jurusan',
            'id_prodi' => 1,
        ]);

        User::create([
            'nip'      => '199001032012013003',
            'nama'     => 'Tim Kurikulum',
            'email'    => 'timkurikulum@gmail.com',
            'password' => bcrypt('kurikulum123'),
            'role'     => 'tim_kurikulum',
            'id_prodi' => 1,
        ]);
    }
}