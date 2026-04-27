<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailKurikulum extends Model
{
    protected $table      = 'detail_kurikulum';
    protected $primaryKey = 'id_detail';
    public $timestamps    = false;

    protected $fillable = [
        'id_kurikulum',
        'id_MK',
        'semester',
        'sks',
        'status_matkul',
        'sesi_teori',
        'sesi_praktikum',
        'bobot_teori',
        'bobot_praktikum',
        'id_silabus',
    ];

    protected $casts = [
        'semester'        => 'integer',
        'sks'             => 'integer',
        'sesi_teori'      => 'integer',
        'sesi_praktikum'  => 'integer',
        'bobot_teori'     => 'integer',
        'bobot_praktikum' => 'integer',
    ];

    // Detail milik satu kurikulum
    public function kurikulum(): BelongsTo
    {
        return $this->belongsTo(Kurikulum::class, 'id_kurikulum', 'id_kurikulum');
    }

    // Detail merujuk ke satu mata kuliah
    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'id_MK', 'id_MK');
    }

    // Detail boleh punya silabus (nullable)
    public function silabus(): BelongsTo
    {
        return $this->belongsTo(Silabus::class, 'id_silabus', 'id_silabus');
    }
}