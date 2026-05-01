<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_prodi', function (Blueprint $table) {
            $table->unsignedInteger('id_detail_prodi')->autoIncrement();
            $table->unsignedInteger('id_prodi')->unique();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('deskripsi_prodi')->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('icon_lulusan', 255)->nullable();

            $table->foreign('id_prodi')
                  ->references('id_prodi')->on('prodi')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_prodi');
    }
};