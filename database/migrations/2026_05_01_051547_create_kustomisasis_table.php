<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kustomisasi', function (Blueprint $table) {
            $table->unsignedInteger('id_kustomisasi')->autoIncrement();
            $table->unsignedInteger('id_prodi')->unique();
            $table->string('primary_color', 20)->nullable();
            $table->string('secondary_color', 20)->nullable();
            $table->string('tertiary_color', 20)->nullable();
            $table->string('quaternary_color', 20)->nullable();
            $table->string('header', 255)->nullable();
            $table->string('footer', 255)->nullable();
            $table->string('ring', 20)->nullable();

            $table->foreign('id_prodi')
                  ->references('id_prodi')->on('prodi')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kustomisasi');
    }
};