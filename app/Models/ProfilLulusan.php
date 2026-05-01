<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfilLulusan extends Model
{
    protected $table      = 'profil_lulusan';
    protected $primaryKey = 'id_lulusan';
    public    $timestamps = false;

    protected $fillable = [
        'id_detail_prodi',
        'judul_lulusan',
        'deskripsi_lulusan',
    ];

    public function detailProdi(): BelongsTo
    {
        return $this->belongsTo(DetailProdi::class, 'id_detail_prodi', 'id_detail_prodi');
    }
}