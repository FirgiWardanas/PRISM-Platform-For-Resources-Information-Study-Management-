<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    protected $table      = 'dosen';
    protected $primaryKey = 'id_dosen';
    public    $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_prodi',
        'nama_dosen',
        'NIK',
        'email',
        'foto_dosen',
        'status_jabatan',
    ];

    protected $casts = [
        'status_jabatan' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function bidangSpesialis(): HasMany
    {
        return $this->hasMany(BidangSpesialis::class, 'id_dosen', 'id_dosen');
    }

    public function riwayatPendidikans(): HasMany
    {
        return $this->hasMany(RiwayatPendidikan::class, 'id_dosen', 'id_dosen');
    }
}