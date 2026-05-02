<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable  // <-- ganti dari Model ke Authenticatable
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    public    $timestamps = false;

    protected $fillable = [
        'id_prodi',
        'nama',
        'nip',
        'email',
        'password',
        'role',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'role'     => 'string',
        // 'password' => 'hashed',
    ];

    public function prodis(): HasMany
    {
        return $this->hasMany(Prodi::class, 'id_user', 'id_user');
    }

    public function dosens(): HasMany
    {
        return $this->hasMany(Dosen::class, 'id_user', 'id_user');
    }
}