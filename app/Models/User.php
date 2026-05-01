<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    public    $timestamps = false;

    protected $fillable = [
        'nama',
        'nip',
        'email',
        'password',
        'role',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'role' => 'string',
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