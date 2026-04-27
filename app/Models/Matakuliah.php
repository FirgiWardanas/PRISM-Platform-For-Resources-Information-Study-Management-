<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matakuliah extends Model
{
    protected $table      = 'matakuliah';
    protected $primaryKey = 'id_MK';
    public $timestamps    = false;

    protected $fillable = [
        'nama_matkul',
        'kode_matkul',
    ];


    public function detailKurikulums(): HasMany
    {
        return $this->hasMany(DetailKurikulum::class, 'id_MK', 'id_MK');
    }

}