<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->unsignedInteger('id_riwayat_pendidikan')->autoIncrement();
            $table->unsignedInteger('id_dosen');
            $table->text('deskripsi_riwayat')->nullable();

            $table->foreign('id_dosen')
                  ->references('id_dosen')->on('dosen')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_pendidikan');
    }
};