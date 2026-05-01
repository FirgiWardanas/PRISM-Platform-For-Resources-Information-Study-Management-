<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->unsignedInteger('id_user')->autoIncrement();
            $table->string('nama', 150);
            $table->string('nip', 30)->unique();
            $table->string('email', 150)->unique();
            $table->string('password', 255);
            $table->enum('role', ['ketua_jurusan', 'tim_kurikulum']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};