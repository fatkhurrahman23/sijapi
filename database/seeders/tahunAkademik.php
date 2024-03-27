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
        // buat 2 data ke kolom kode_tahun_akademik, tahun_akademik, status (gasal/genap)
        $data = [
            [
                'kode_tahun_akademik' => '2021/2022-1',
                'tahun_akademik' => '2021/2022',
                'status' => 'genap'
            ],
            [
                'kode_tahun_akademik' => '2021/2022-2',
                'tahun_akademik' => '2021/2022',
                'status' => 'genap'
            ]
        ];

        // insert data ke dalam tabel tahun_akademik
        DB::table('tahun_akademik')->insert($data);
    }
}
