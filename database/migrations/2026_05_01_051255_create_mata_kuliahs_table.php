<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->unsignedInteger('id_MK')->autoIncrement();
            $table->string('kode_matkul', 20)->unique();
            $table->string('nama_matkul', 150);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};