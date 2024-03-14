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
        Schema::create('mahasiswa', function (Blueprint $table) {
            // $table->id();
            $table->string('nim', 20)->primary();
            $table->string('nama', 90);
            $table->string('kode_kelas', 20);
            $table->enum('jenis_kelamin', ['L', 'P']);
            
            $table->foreign('kode_kelas')
                ->references('kode_kelas')
                ->on('kelas_mahasiswa');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
