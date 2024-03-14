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
        if(!Schema::hasTable('presensi')){

            Schema::create('presensi', function (Blueprint $table) {
                $table->id();
                $table->string('kode_presensi', 20)->unique();
                $table->string('kode_jadwal_kuliah', 20);
                $table->timestamp('jam_token');
    
                $table->foreign('kode_jadwal_kuliah')
                    ->references('kode_jadwal_kuliah')
                    ->on('jadwal_kuliah');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
