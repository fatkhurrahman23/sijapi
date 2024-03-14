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
        Schema::create('enrollment', function (Blueprint $table) {
            $table->id();
            $table->string('kode_enrollment', 20)->unique();
            $table->string('kode_kelas', 20);
            $table->string('kode_dosen', 20);
            $table->string('kode_tahun_akademik', 20);
            $table->string('kode_mata_kuliah', 20);

            $table->foreign('kode_kelas')
                ->references('kode_kelas')
                ->on('kelas_mahasiswa');
            
            $table->foreign('kode_dosen')
                ->references('kode_dosen')
                ->on('dosen');
            
            $table->foreign('kode_tahun_akademik')
                ->references('kode_tahun_akademik')
                ->on('tahun_akademik');
            
            $table->foreign('kode_mata_kuliah')
                ->references('kode_mata_kuliah')
                ->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment');
    }
};
