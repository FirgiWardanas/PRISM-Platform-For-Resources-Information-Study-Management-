<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->unsignedInteger('id_prodi')->autoIncrement();
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_jurusan');
            $table->string('kode_prodi', 20)->unique();
            $table->string('nama_prodi', 150);
            $table->string('jenjang', 10);
            $table->enum('status_prodi', ['draft', 'published'])->default('draft');

            $table->foreign('id_user')
                  ->references('id_user')->on('user')
                  ->onDelete('restrict')->onUpdate('cascade');

            $table->foreign('id_jurusan')
                  ->references('id_jurusan')->on('jurusan')
                  ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};