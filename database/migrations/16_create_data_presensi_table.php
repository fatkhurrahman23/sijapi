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
        if(!Schema::hasTable('data_presensi')){

            Schema::create('data_presensi', function (Blueprint $table) {
                $table->id();
//                $table->string('kode_data_presensi', 20)->unique();
                $table->string('token');
                $table->string('nim', 20);
                $table->timestamp('waktu_presensi');
                $table->enum('status', ['hadir', 'tidak hadir', 'terlambat']);

//                $table->foreign('kode_jadwal_kuliah')
//                    ->references('kode_jadwal_kuliah')
//                    ->on('jadwal_kuliah');

                $table->foreign('nim')
                    ->references('nim')
                    ->on('mahasiswa');

                $table->foreign('token')
                    ->references('token')
                    ->on('presensi_tokens');
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_presensi');
    }
};
