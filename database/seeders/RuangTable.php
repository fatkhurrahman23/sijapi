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
                'nama' => 'Gedung Magister lantai 03 ruang 03'
            ],
            [
                'kode_ruang' => 'MST-03-04',
                'nama' => 'Gedung Magister lantai 03 ruang 04'
            ]
        ];

        // insert data ke dalam tabel ruang
        DB::table('ruang')->insert($data);

    }
}
