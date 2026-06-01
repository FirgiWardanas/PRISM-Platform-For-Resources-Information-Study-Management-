<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pending_transfers', function (Blueprint $table) {
            $table->id('id_transfer');
            $table->unsignedInteger('id_user');
            $table->string('new_email');
            $table->string('token', 64)->unique();
            $table->timestamp('expires_at');
            $table->boolean('is_used')->default(false);

            $table->foreign('id_user')
                  ->references('id_user')
                  ->on('user')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pending_transfers');
    }
};