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
                $table->string('kode_data_presensi', 20)->unique();
                $table->string('kode_presensi', 20);
                $table->string('nim', 20);
                $table->timestamp('waktu');
                $table->enum('status', ['hadir', 'tidak hadir', 'terlambat']);

                $table->foreign('kode_presensi')
                    ->references('kode_presensi')
                    ->on('presensi');
                
                $table->foreign('nim')
                    ->references('nim')
                    ->on('mahasiswa');
            });
        }
        // Schema::create('data_presensi', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('kode_data_presensi', 20)->unique();
        //     $table->integer('kode_presensi')->length(50);
        //     $table->string('nim_mahasiswa', 20);
        //     $table->timestamp('waktu');
        //     $table->enum('status', ['hadir', 'tidak hadir', 'terlambat']);

        //     $table->foreign('kode_presensi')
        //         ->references('kode_presensi')
        //         ->on('presensi');
            
        //     $table->foreign('nim_mahasiswa')
        //         ->references('nim')
        //         ->on('mahasiswa');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_presensi');
    }
};
