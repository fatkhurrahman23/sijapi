<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class hari extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat 7 data ke kolom kode_hari, hari
        $data = [
            [
                'kode_hari' => '01',
                'hari' => 'senin'
            ],
            [
                'kode_hari' => '02',
                'hari' => 'selasa'
            ],
            [
                'kode_hari' => '03',
                'hari' => 'rabu'
            ],
            [
                'kode_hari' => '04',
                'hari' => 'kamis'
            ],
            [
                'kode_hari' => '05',
                'hari' => 'jumat'
            ],
            [
                'kode_hari' => '06',
                'hari' => 'sabtu'
            ],
            [
                'kode_hari' => '07',
                'hari' => 'minggu'
            ]
        ];

        // insert data ke dalam tabel hari
        DB::table('hari')->insert($data);
    }
}
