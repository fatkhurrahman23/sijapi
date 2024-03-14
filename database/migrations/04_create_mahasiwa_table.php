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
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kode_kelas', 20);
            
            $table->foreign('kode_kelas')
                ->references('kode_kelas')
                ->on('kelas_mahasiswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
                // $table->foreign('nim')
                // ->references('username')
                // ->on('users')
                // ->onDelete('cascade')
                // ->onUpdate('cascade');
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
