<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            'id_prodi' => null,
            'nama' => 'Admin Ketua Jurusan', 
            'nip' => '12345678',
            'email' => 'ketuajurusan@example.com',
            'password' => Hash::make('ketuajurusan123'),
            'role' => 'ketua_jurusan'
        ]);
    }
}