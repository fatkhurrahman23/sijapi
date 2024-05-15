<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tahunAkademik extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tahun_akademik' => '2021/2022',
                'status' => 'tidak aktif'
            ],
            [
                'tahun_akademik' => '2022/2023',
                'status' => 'aktif'
            ]
        ];

        // insert data ke dalam tabel tahun_akademik
        DB::table('tahun_akademik')->insert($data);
    }
}
