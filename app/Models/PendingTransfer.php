<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PendingTransfer extends Model
{

    protected $primaryKey = 'id_transfer';

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'new_email',
        'token',
        'expires_at',
        'is_used',
    ];

    

    // Otomatis cast kolom ini ke tipe yang sesuai
    protected $casts = [
        'expires_at' => 'datetime',
        'is_used'    => 'boolean',
    ];

    // Relasi ke model User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Helper: cek apakah token masih berlaku
    public function isValid(): bool
    {
        return !$this->is_used && $this->expires_at->isFuture();
    }
}