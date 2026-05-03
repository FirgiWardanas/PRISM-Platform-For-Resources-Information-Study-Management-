<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'id_user'
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'role' => 'string',
    ];

    public function prodis(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_user', 'id_user');
    }

    public function dosens(): HasMany
    {
        return $this->hasMany(Dosen::class, 'id_user', 'id_user');
    }
}