<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class enrollment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buatkan seeder yang berisi data untuk tabel enrollment
        // kolom yang ada di tabel enrollment adalah: id, kode_enrollment, kode_kelas, kode_dosen, kode_tahun_akademik, kode_mata_kuliah
        // buat 2 data untuk tabel enrollment

        $data = [
            [
                'kode_enrollment' => 'ENR001',
                'kode_kelas' => 'TI-2A',
                'kode_dosen' => 'D001',
                'kode_tahun_akademik' => '2021/2022-1',
                'kode_mata_kuliah' => 'MK001',
            ],
            [
                'kode_enrollment' => 'ENR002',
                'kode_kelas' => 'TI-2B',
                'kode_dosen' => 'D002',
                'kode_tahun_akademik' => '2021/2022-1',
                'kode_mata_kuliah' => 'MK002',
            ],
        ];

        DB::table('enrollment')->insert($data);
    }
}
