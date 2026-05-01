<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->unsignedInteger('id_kurikulum')->autoIncrement();
            $table->unsignedInteger('id_prodi');
            $table->string('nama_kurikulum', 150);
            $table->year('tahun_mulai');
            $table->enum('status_kurikulum', ['aktif', 'tidak aktif'])->default('aktif');

            $table->foreign('id_prodi')
                  ->references('id_prodi')->on('prodi')
                  ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kurikulum');
    }
};