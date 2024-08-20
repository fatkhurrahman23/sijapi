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
                'nama_mata_kuliah' => 'Pemrograman Web',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK002',
                'nama_mata_kuliah' => 'Pemrograman Mobile',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],
            [
                'kode_mata_kuliah' => 'MK003',
                'nama_mata_kuliah' => 'Pemrograman Desktop',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK004',
                'nama_mata_kuliah' => 'Pemrograman Game',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],
            [
                'kode_mata_kuliah' => 'MK005',
                'nama_mata_kuliah' => 'Pengolahan Citra',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK006',
                'nama_mata_kuliah' => 'Keamanan Jaringan',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],
            [
                'kode_mata_kuliah' => 'MK007',
                'nama_mata_kuliah' => 'Pembelajaran Mesin',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK008',
                'nama_mata_kuliah' => 'Interoperabilitas',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],
            [
                'kode_mata_kuliah' => 'MK009',
                'nama_mata_kuliah' => 'Pemrograman Web Berbasis Framework',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'gasal',
            ],
            [
                'kode_mata_kuliah' => 'MK010',
                'nama_mata_kuliah' => 'Pancasila',
                'sks' => 3,
                'semester' => 4,
                'jenis' => 'genap',
            ],

        ];

        // insert data ke dalam tabel mata_kuliah
        DB::table('mata_kuliah')->insert($data);

    }
}
