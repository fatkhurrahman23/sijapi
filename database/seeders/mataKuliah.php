<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mataKuliah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat 2 data ke tabel mata_kuliah
        // kolom yang ada di tabel mata_kuliah adalah: id, kode_mata_kuliah, nama, sks, semester, jenis
        // buat 2 data untuk tabel mata_kuliah

        $data = [
            [
                'kode_mata_kuliah' => 'MK001',
                // 'kode_kelas' => 'TI-2A',
                'nama' => 'Pemrograman Web',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK002',
                // 'kode_kelas' => 'TI-2A',
                'nama' => 'Pemrograman Mobile',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],
        ];

        // insert data ke dalam tabel mata_kuliah
        DB::table('mata_kuliah')->insert($data);
        
    }
}
