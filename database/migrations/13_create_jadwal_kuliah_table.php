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
        if (!Schema::hasTable('jadwal_kuliah')) {

            Schema::create('jadwal_kuliah', function (Blueprint $table) {
                $table->id();
                $table->string('kode_jadwal_kuliah', 20)->unique();
                $table->string('tahun_akademik', 20);
                $table->string('kode_enrollment', 20);
                $table->string('kode_hari', 20);
                $table->string('kode_ruang', 20);
                $table->string('kode_kelas', 20);
                $table->enum('semester', ['gasal', 'genap']);
                $table->integer('kode_jam_awal');
                $table->integer('kode_jam_akhir');

                $table->foreign('tahun_akademik')
                    ->references('tahun_akademik')
                    ->on('tahun_akademik');

                $table->foreign('kode_enrollment')
                    ->references('kode_enrollment')
                    ->on('enrollment');

                $table->foreign('kode_hari')
                    ->references('kode_hari')
                    ->on('hari');

                $table->foreign('kode_ruang')
                    ->references('kode_ruang')
                    ->on('ruang');

                $table->foreign('kode_kelas')
                    ->references('kode_kelas')
                    ->on('kelas_mahasiswa');

                $table->foreign('kode_jam_awal')
                    ->references('kode_jam')
                    ->on('jam');
                
                $table->foreign('kode_jam_akhir')
                    ->references('kode_jam')
                    ->on('jam');
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};
