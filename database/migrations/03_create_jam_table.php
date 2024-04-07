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
<<<<<<< HEAD
            $table->time('range_jam');
=======
            $table->string('range_jam', 20);
>>>>>>> 20f81164e171f5fcc8bf5668a79d47c817c6147d
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jam');
    }
};
