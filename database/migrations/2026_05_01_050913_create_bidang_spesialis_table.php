<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bidang_spesialis', function (Blueprint $table) {
            $table->unsignedInteger('id_spesialis')->autoIncrement();
            $table->unsignedInteger('id_dosen');
            $table->text('deskripsi_bidang')->nullable();

            $table->foreign('id_dosen')
                  ->references('id_dosen')->on('dosen')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bidang_spesialis');
    }
};