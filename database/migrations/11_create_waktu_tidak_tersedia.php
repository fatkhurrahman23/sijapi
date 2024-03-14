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
        if(!Schema::hasTable('waktu_tidak_tersedia')){

            Schema::create('waktu_tidak_tersedia', function (Blueprint $table) {
                $table->id();
                $table->string('kode_waktu_tidak_tersedia', 20);
                $table->string('kode_dosen', 20);
                $table->string('kode_jam', 20);
                $table->string('kode_hari', 20);
                // $table->timestamps();
    
                $table->foreign('kode_dosen')
                    ->references('kode_dosen')
                    ->on('dosen')
                    ->onDelete('cascade');
    
                    
                $table->foreign('kode_jam')
                    ->references('kode_jam')
                    ->on('jam')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                    
                $table->foreign('kode_hari')
                    ->references('kode_hari')
                    ->on('hari');
                    // ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_tidak_tersedia');
    }
};
