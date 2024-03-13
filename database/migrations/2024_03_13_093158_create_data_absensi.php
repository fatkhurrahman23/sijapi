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
        Schema::create('data_presensi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_data_presensi', 20);
            $table->integer('kode_presensi', 50);
            $table->string('nim_mahasiswa', 20);
            $table->time('waktu');
            $table->enum('status', ['hadir', 'tidak hadir', 'terlambat']);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_presensi');
    }
};
