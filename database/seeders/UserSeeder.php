<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            'id_user' => 1,
            'id_prodi' => null,
            'nama' => 'Ketua Jurusan',
            'nip' => '12345678',
            'email' => 'ketuajurusan@example.com',
            'password' => Hash::make('ketuajurusan123'),
            'role' => 'ketua_jurusan'
        ]);
    }
}