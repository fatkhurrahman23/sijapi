<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(Jurusan::class);
        $this->call(tahunAkademik::class);
        $this->call(RuangTable::class);
        $this->call(DataProdi::class);
        $this->call(kelasMahasiswa::class);
        $this->call(jam::class);
        $this->call(mahasiswa::class);
        $this->call(prodiDosen::class);
        $this->call(mataKuliah::class);
        $this->call(dosen::class);
        $this->call(users::class);
        $this->call(hari::class);
        // $this->call(waktuTidakTersedia::class);
        $this->call(enrollment::class);
        $this->call(jadwalKuliah::class);
        $this->call(TokenPresensiSeeder::class);
        // $this->call(dataPresensi::class);

    }
}
