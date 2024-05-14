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
             $table->id();
            $table->string('nim', 20)->unique();
            $table->string('nama', 90);
            $table->string('tahun_masuk');
            $table->string('kode_prodi', 20);
            $table->string('kelas');
            $table->string('tingkat', 4)->default('1');
            $table->string('kode_kelas');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('status', ['Lulus', 'Cuti', 'Aktif'])->default('Aktif');


            $table->foreign('kode_prodi')
                ->references('kode_prodi')
                ->on('data_prodi');

            $table->foreign('tahun_masuk')
                ->references('kode_tahun_akademik')
                ->on('tahun_akademik');

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
