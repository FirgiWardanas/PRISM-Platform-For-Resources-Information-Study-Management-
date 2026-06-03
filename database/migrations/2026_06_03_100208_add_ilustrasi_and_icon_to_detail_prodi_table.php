<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('detail_prodi', function (Blueprint $table) {
            $table->string('ilustrasi', 255)->nullable()->after('logo');
            $table->string('icon_lulusan', 255)->nullable()->after('ilustrasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_prodi', function (Blueprint $table) {
            $table->dropColumn(['ilustrasi', 'icon_lulusan']);
        });
    }
};
