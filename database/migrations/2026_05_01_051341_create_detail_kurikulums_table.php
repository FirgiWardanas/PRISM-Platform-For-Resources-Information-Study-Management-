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
            $table->unsignedTinyInteger('bobot_teori')->nullable();
            $table->unsignedTinyInteger('bobot_praktikum')->nullable();
            $table->enum('status_matkul', ['langsung', 'tidak langsung', 'pendukung']);
            $table->unsignedTinyInteger('sks');
            $table->text('bahan_pustaka')->nullable();
            $table->text('cpk')->nullable();
            $table->text('cpm')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('file_rps', 255)->nullable();

            $table->foreign('id_kurikulum')
                  ->references('id_kurikulum')->on('kurikulum')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_MK')
                  ->references('id_MK')->on('matakuliah')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_kurikulum');
    }
};