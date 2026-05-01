<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kustomisasi extends Model
{
    protected $table      = 'kustomisasi';
    protected $primaryKey = 'id_kustomisasi';
    public    $timestamps = false;

    protected $fillable = [
        'id_prodi',
        'primary_color',
        'secondary_color',
        'tertiary_color',
        'quaternary_color',
        'header',
        'footer',
        'ring',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }
}