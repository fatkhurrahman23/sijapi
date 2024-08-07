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
        Schema::create('tahun_akademik', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tahun_akademik')->unique();
            $table->string('tahun_akademik');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->enum('semester', ['Gasal', 'Genap']);
            $table->enum('status', ['Aktif', 'Tidak aktif', 'Lewat'])->default('Tidak aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahun_akademik');
    }
};
