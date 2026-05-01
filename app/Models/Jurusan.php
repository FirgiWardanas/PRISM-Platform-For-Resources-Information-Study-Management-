<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    protected $table      = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    public    $timestamps = false;

    protected $fillable = [
        'nama_jurusan',
    ];

    public function prodis(): HasMany
    {
        return $this->hasMany(Prodi::class, 'id_jurusan', 'id_jurusan');
    }
}