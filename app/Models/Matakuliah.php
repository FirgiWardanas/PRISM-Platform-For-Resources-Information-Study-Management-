<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matakuliah extends Model
{
    protected $table      = 'matakuliah';
    protected $primaryKey = 'id_MK';
    public    $timestamps = false;

    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
    ];

    public function detailKurikulums(): HasMany
    {
        return $this->hasMany(DetailKurikulum::class, 'id_MK', 'id_MK');
    }
}