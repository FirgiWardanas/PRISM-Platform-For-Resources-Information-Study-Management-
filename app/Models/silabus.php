<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Silabus extends Model
{
    protected $table      = 'silabus';
    protected $primaryKey = 'id_silabus';
    public    $timestamps = false;

    protected $fillable = [
        'id_detail',
        'bahan_pustaka',
        'cpk',
        'cpm',
        'deskripsi',
        'file_rps',
    ];

    public function detailKurikulum(): BelongsTo
    {
        return $this->belongsTo(DetailKurikulum::class, 'id_detail', 'id_detail');
    }
}