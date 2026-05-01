<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BidangSpesialis extends Model
{
    protected $table      = 'bidang_spesialis';
    protected $primaryKey = 'id_spesialis';
    public    $timestamps = false;

    protected $fillable = [
        'id_dosen',
        'deskripsi_bidang',
    ];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }
}