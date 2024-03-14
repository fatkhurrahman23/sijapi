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
        Schema::create('waktu_tidak_tersedia', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dosen', 20);
            $table->string('kode_hari', 20);
            $table->string('kode_jam', 20);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_tidak_tersedia');
    }
};
