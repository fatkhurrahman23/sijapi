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
        Schema::create('jam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_jam', 20)->unique();
            $table->time('jam_awal');
            $table->time('jam_akhir');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jam');
    }
};
