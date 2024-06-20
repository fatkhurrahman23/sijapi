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
                'kode_tahun_akademik' => '2021/2022-1',
                'tahun_akademik' => '2021/2022',
                'tgl_mulai' => '2021-09-01',
                'tgl_selesai' => '2022-02-28',
                'semester' => 'Gasal',
                'status' => 'Tidak aktif'
            ],
            [
                'kode_tahun_akademik' => '2021/2022-2',
                'tahun_akademik' => '2021/2022',
                'tgl_mulai' => '2022-03-01',
                'tgl_selesai' => '2022-08-31',
                'semester' => 'Genap',
                'status' => 'Tidak aktif'
            ],
            [
                'kode_tahun_akademik' => '2022/2023-1',
                'tahun_akademik' => '2022/2023',
                'tgl_mulai' => '2022-09-01',
                'tgl_selesai' => '2022-02-28',
                'semester' => 'Gasal',
                'status' => 'Aktif'
            ],
            [
                'kode_tahun_akademik' => '2022/2023-2',
                'tahun_akademik' => '2022/2023',
                'tgl_mulai' => '2023-03-01',
                'tgl_selesai' => '2023-08-31',
                'semester' => 'Genap',
                'status' => 'Tidak aktif'
            ],


        ];

        // insert data ke dalam tabel tahun_akademik
        DB::table('tahun_akademik')->insert($data);
    }
}
