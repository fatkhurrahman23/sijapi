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
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jadwal_kuliah', 20);
            $table->string('kode_enrollment', 20);
            $table->string('kode_hari', 20);
            $table->string('kode_ruang', 20);
            $table->string('kode_kelas', 20);
            $table->string('kode_jam', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};
