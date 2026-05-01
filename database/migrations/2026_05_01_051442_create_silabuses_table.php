<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silabus', function (Blueprint $table) {
            $table->unsignedInteger('id_silabus')->autoIncrement();
            $table->unsignedInteger('id_detail')->unique();
            $table->text('bahan_pustaka')->nullable();
            $table->text('cpk')->nullable();
            $table->text('cpm')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('file_rps', 255)->nullable();

            $table->foreign('id_detail')
                  ->references('id_detail')->on('detail_kurikulum')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silabus');
    }
};