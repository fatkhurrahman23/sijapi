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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mata_kuliah', 20)->unique();
            $table->string('kode_kelas')->length(20);
            $table->string('nama')->length(20);
            $table->integer('sks')->length(20);
            $table->integer('semester')->length(20);
            $table->enum('jenis', ['gasal', 'genap']);

            $table->foreign('kode_kelas')
                ->references('kode_kelas')
                ->on('kelas_mahasiswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
