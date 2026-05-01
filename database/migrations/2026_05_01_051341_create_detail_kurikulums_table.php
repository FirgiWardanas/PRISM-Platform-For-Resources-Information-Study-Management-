<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_kurikulum', function (Blueprint $table) {
            $table->unsignedInteger('id_detail')->autoIncrement();
            $table->unsignedInteger('id_kurikulum');
            $table->unsignedInteger('id_MK');
            $table->unsignedTinyInteger('semester');
            $table->unsignedTinyInteger('sesi_teori')->nullable();
            $table->unsignedTinyInteger('sesi_praktikum')->nullable();
            $table->decimal('bobot_teori', 4, 2)->nullable();
            $table->decimal('bobot_praktikum', 4, 2)->nullable();
            $table->enum('status_matkul', ['langsung', 'tidak langsung', 'pendukung']);
            $table->unsignedTinyInteger('sks');

            $table->foreign('id_kurikulum')
                  ->references('id_kurikulum')->on('kurikulum')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_MK')
                  ->references('id_MK')->on('matakuliah')
                  ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_kurikulum');
    }
};