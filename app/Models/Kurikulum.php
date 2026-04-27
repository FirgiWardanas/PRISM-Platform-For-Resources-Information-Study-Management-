<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Kurikulum extends Model
{
    protected $table      = 'kurikulum';
    protected $primaryKey = 'id_kurikulum';
    public $timestamps    = false;

    protected $fillable = [
        'nama_kurikulum',
        'tahun_mulai',
        'status',
        'id_prodi',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function detailKurikulums(): HasMany
    {
        return $this->hasMany(DetailKurikulum::class, 'id_kurikulum', 'id_kurikulum');
    }

}