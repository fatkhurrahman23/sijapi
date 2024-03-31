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
                'kode_hari' => '1',
                'nama_hari' => 'Senin'
            ],
            [
                'kode_hari' => '2',
                'nama_hari' => 'Selasa'
            ],
            [
                'kode_hari' => '3',
                'nama_hari' => 'Rabu'
            ],
            [
                'kode_hari' => '4',
                'nama_hari' => 'Kamis'
            ],
            [
                'kode_hari' => '5',
                'nama_hari' => 'Jumat'
            ],
            [
                'kode_hari' => '6',
                'nama_hari' => 'Sabtu'
            ],
            [
                'kode_hari' => '7',
                'nama_hari' => 'Minggu'
            ]
        ];

        // insert data ke dalam tabel hari
        DB::table('hari')->insert($data);
    }
}
