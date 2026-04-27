<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use Notifiable;

    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps    = false;

    protected $fillable = [
        'nip',
        'nama',
        'email',
        'password',
        'role',
        'id_prodi',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function isKetuaJurusan(): bool
    {
        return $this->role === 'ketua_jurusan';
    }

    public function isTimKurikulum(): bool
    {
        return $this->role === 'tim_kurikulum';
    }
}