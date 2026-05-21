<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
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
        'role' => 'string',
    ];

    public function prodis(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function dosens(): HasMany
    {
        return $this->hasMany(Dosen::class, 'id_user', 'id_user');
    }
}