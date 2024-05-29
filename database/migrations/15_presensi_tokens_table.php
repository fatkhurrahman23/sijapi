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
        Schema::create('presensi_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('kode_jadwal_kuliah');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('expired_at')->nullable();

            $table->foreign('kode_jadwal_kuliah')
                ->references('kode_jadwal_kuliah')
                ->on('jadwal_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_tokens');
    }
};
