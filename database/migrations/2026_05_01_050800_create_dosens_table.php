<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->unsignedInteger('id_dosen')->autoIncrement();
            $table->unsignedInteger('id_prodi');
            $table->string('nama_dosen', 150);
            $table->string('NIK', 30)->unique();
            $table->string('email', 150)->unique();
            $table->string('foto_dosen', 255)->nullable();
            $table->enum('status_jabatan', ['Kepala Program Studi', 'Dosen', 'Laboran']);
            $table->enum('jenjang_pendidikan', ['D3', 'D4','S1','S2','S3']);

            $table->foreign('id_prodi')
                  ->references('id_prodi')->on('prodi')
                  ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};