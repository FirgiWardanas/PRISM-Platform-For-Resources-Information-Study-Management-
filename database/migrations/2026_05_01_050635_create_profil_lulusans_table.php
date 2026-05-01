<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_lulusan', function (Blueprint $table) {
            $table->unsignedInteger('id_lulusan')->autoIncrement();
            $table->unsignedInteger('id_detail_prodi');
            $table->string('judul_lulusan', 255);
            $table->text('deskripsi_lulusan')->nullable();

            $table->foreign('id_detail_prodi')
                  ->references('id_detail_prodi')->on('detail_prodi')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_lulusan');
    }
};