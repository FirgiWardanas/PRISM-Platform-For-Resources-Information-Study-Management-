<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prodi extends Model
{
    protected $table      = 'prodi';
    protected $primaryKey = 'id_prodi';
    public $timestamps    = false;

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'jenjang',
        'id_jurusan',
    ];

    // Prodi milik satu jurusan
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id_jurusan');
    }


    public function kurikulums(): HasMany
    {
        return $this->hasMany(Kurikulum::class, 'id_prodi', 'id_prodi');
    }

    public function kurikulumAktif(): HasOne
    {
        return $this->hasOne(Kurikulum::class, 'id_prodi', 'id_prodi')
                    ->where('status', 'aktif');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_prodi', 'id_prodi');
    }
}