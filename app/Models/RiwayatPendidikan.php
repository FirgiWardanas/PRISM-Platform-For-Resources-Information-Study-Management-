<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatPendidikan extends Model
{
    protected $table      = 'riwayat_pendidikan';
    protected $primaryKey = 'id_riwayat_pendidikan';
    public    $timestamps = false;

    protected $fillable = [
        'id_dosen',
        'deskripsi_riwayat',
    ];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }
}