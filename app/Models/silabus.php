<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Silabus extends Model
{
    protected $table      = 'silabus';
    protected $primaryKey = 'id_silabus';
    public $timestamps    = false;

    protected $fillable = [
        'cpm',
        'cpk',
        'bahan_pustaka',
        'deskripsi',
        'file_rps',
    ];

    public function detailKurikulums(): HasMany
    {
        return $this->hasMany(DetailKurikulum::class, 'id_silabus', 'id_silabus');
    }
}