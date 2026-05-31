<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pending_transfers', function (Blueprint $table) {
            $table->id();

            // FK ke tabel user
            $table->unsignedInteger('id_user');

            // Email ketua jurusan baru
            $table->string('new_email');

            // Token verifikasi
            $table->string('token', 64)->unique();

            // Masa berlaku token
            $table->timestamp('expires_at');

            // Status penggunaan token
            $table->boolean('is_used')->default(false);

            // Foreign Key
            $table->foreign('id_user')
                  ->references('id_user')
                  ->on('user')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pending_transfers');
    }
};