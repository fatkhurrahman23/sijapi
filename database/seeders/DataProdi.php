<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataProdi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat data prodi ke tabel data_prodi dengan kolom kode_prodi, nama
        $data = [
            [
                'kode_prodi' => 'TI',
                'nama' => 'D4 - TEKNOLOGI REKAYASA KOMPUTER'
            ],
            [
                'kode_prodi' => 'IK',
                'nama' => 'D3 - TEKNIK INFORMATIKA'
            ]
        ];

        // Insert data ke database
        foreach ($data as $prodi) {
            \DB::table('data_prodi')->insert($prodi);
        }
        
    }
}
