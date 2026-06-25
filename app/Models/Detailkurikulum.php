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
        'id_silabus',
        'semester',
        'sesi_teori',
        'sesi_praktikum',
        'bobot_teori',
        'bobot_praktikum',
        'status_matkul',
        'sks',
    ];

    protected $casts = [
        'semester'        => 'integer',
        'sesi_teori'      => 'integer',
        'sesi_praktikum'  => 'integer',
        'bobot_teori'     => 'integer',
        'bobot_praktikum' => 'integer',
        'sks'             => 'integer',
        'status_matkul'   => 'string',
    ];

    public function kurikulum(): BelongsTo
    {
        return $this->belongsTo(
            Kurikulum::class,
            'id_kurikulum',
            'id_kurikulum'
        );
    }

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(
            Matakuliah::class,
            'id_MK',
            'id_MK'
        );
    }

    public function silabus(): BelongsTo
    {
        return $this->belongsTo(
            Silabus::class,
            'id_silabus',
            'id_silabus'
        );
    }
}