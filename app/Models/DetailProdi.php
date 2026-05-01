<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailProdi extends Model
{
    protected $table      = 'detail_prodi';
    protected $primaryKey = 'id_detail_prodi';
    public    $timestamps = false;

    protected $fillable = [
        'id_prodi',
        'visi',
        'misi',
        'deskripsi_prodi',
        'logo',
        'icon_lulusan',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function profilLulusans(): HasMany
    {
        return $this->hasMany(ProfilLulusan::class, 'id_detail_prodi', 'id_detail_prodi');
    }
}