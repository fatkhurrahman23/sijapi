<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class prodiDosen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //KOLOM kode_prodi, nama
        DB::table('prodi_dosen')->insert(
            [
                'kode_prodi' => 'TI',
                'nama' => 'DOSEN 1'
            ],
            [
                'kode_prodi' => 'TI',
                'nama' => 'DOSEN 2'
            ],
            [
                'kode_prodi' => 'IK',
                'nama' => 'DOSEN 3'
            ],
            [
                'kode_prodi' => 'IK',
                'nama' => 'DOSEN 4'
            ]
        );
    }
}
