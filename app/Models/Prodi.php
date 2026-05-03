<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prodi extends Model
{
    protected $table      = 'prodi';
    protected $primaryKey = 'id_prodi';
    public    $timestamps = false;

    protected $fillable = [
        'id_jurusan',
        'kode_prodi',
        'nama_prodi',
        'jenjang',
        'status_prodi',
    ];

    protected $casts = [
        'status_prodi' => 'string',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_user', 'id_user');
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id_jurusan');
    }

    public function detailProdi(): HasOne
    {
        return $this->hasOne(DetailProdi::class, 'id_prodi', 'id_prodi');
    }

    public function kurikulums(): HasMany
    {
        return $this->hasMany(Kurikulum::class, 'id_prodi', 'id_prodi');
    }

    public function dosens(): HasMany
    {
        return $this->hasMany(Dosen::class, 'id_prodi', 'id_prodi');
    }

    public function kustomisasi(): HasOne
    {
        return $this->hasOne(Kustomisasi::class, 'id_prodi', 'id_prodi');
    }
}