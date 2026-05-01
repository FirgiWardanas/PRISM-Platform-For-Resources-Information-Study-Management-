<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->unsignedInteger('id_jurusan')->autoIncrement();
            $table->string('nama_jurusan', 150);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jurusan');
    }
};