<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('profil_lulusan', function (Blueprint $table) {
            $table->string('icon_lulusan', 255)->nullable()->after('deskripsi_lulusan');
        });
    }

    public function down(): void
    {
        Schema::table('profil_lulusan', function (Blueprint $table) {
            $table->dropColumn('icon_lulusan');
        });
    }
};
