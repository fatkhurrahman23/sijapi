<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat 2 data ke kolom kode_ruang, nama_ruang
        $data = [
            [
                'kode_ruang' => 'MST-03-03',
                'nama_ruang' => 'Gedung Magister lantai 03 ruang 03'
            ],
            [
                'kode_ruang' => 'MST-03-04',
                'nama_ruang' => 'Gedung Magister lantai 03 ruang 04'
            ],
            [
                'kode_ruang' => 'MST-03-05',
                'nama_ruang' => 'Gedung Magister lantai 03 ruang 05'
            ],
            [
                'kode_ruang' => 'MST-03-06',
                'nama_ruang' => 'Gedung Magister lantai 03 ruang 06'
            ],
            [
                'kode_ruang' => 'MST-02-01B',
                'nama_ruang' => 'Gedung Magister lantai 02 ruang 01B'
            ],
            [
                'kode_ruang' => 'GKT-08-06',
                'nama_ruang' => 'Gedung Kuliah Terpadu lantai 08 ruang 06'
            ],
            [
                'kode_ruang' => 'GKT-08-07',
                'nama_ruang' => 'Gedung Kuliah Terpadu lantai 08 ruang 07'
            ],
            [
                'kode_ruang' => 'LAB MULTIMEDIA',
                'nama_ruang' => 'Laboratorium Multimedia Gedung SB lantai 02'
            ],

        ];

        // insert data ke dalam tabel ruang
        DB::table('ruang')->insert($data);

    }
}
