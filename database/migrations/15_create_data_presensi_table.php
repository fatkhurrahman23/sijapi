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
            $table->string('kode_data_presensi', 20)->unique();
<<<<<<< HEAD
            $table->integer('kode_presensi')->length(50)->unsigned();
=======
            $table->string('kode_presensi');
>>>>>>> 8922799b7252d7e1cf5e6d8bbc3094964f2a5b6b
            $table->string('nim_mahasiswa', 20);
            $table->timestamp('waktu');
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
