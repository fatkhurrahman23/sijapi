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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dosen', 20)->unique();
            $table->string('nip', 20)->unique();
            $table->string('nama', 90);
            $table->string('alamat');
            $table->string('no_telp', 20);
            $table->string('kode_prodi', 20);

            $table->foreign('kode_prodi')
                ->references('kode_prodi')
                ->on('prodi_dosen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            // $table->foreign('nip')
            //     ->references('username')
            //     ->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
