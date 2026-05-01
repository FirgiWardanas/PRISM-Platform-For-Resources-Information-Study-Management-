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
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_prodi');
            $table->string('nama_dosen', 150);
            $table->string('NIK', 30)->unique();
            $table->string('email', 150)->unique();
            $table->string('foto_dosen', 255)->nullable();
            $table->enum('status_jabatan', ['ketua program studi', 'dosen', 'laboran']);

            $table->foreign('id_user')
                  ->references('id_user')->on('user')
                  ->onDelete('restrict')->onUpdate('cascade');

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