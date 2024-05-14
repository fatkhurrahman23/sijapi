<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class jadwalKuliah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buatkan seeder untuk menambahkan data ke tabel jadwal_kuliah
        // kolom yang dimiliki oleh tabel jadwal_kuliah adalah: kode_jadwal_kuliah, kode_enrollment, kode_hari, kode_ruang, kode_kelas, kode_jam
        // tambahkan minimal 5 data ke tabel jadwal_kuliah
        // pastikan kode_jadwal_kuliah adalah unique

        $data = [
            [
                'kode_jadwal_kuliah' => 'JK001',
                'kode_enrollment' => 'ENR001',
                'kode_hari' => '1',
                'kode_ruang' => 'MST-03-03',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '1',
                'kode_jam_akhir' => '6',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',
            ],
            [
                'kode_jadwal_kuliah' => 'JK002',
                'kode_enrollment' => 'ENR002',
                'kode_hari' => '1',
                'kode_ruang' => 'MST-03-04',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '7',
                'kode_jam_akhir' => '8',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',

            ],
            [
                'kode_jadwal_kuliah' => 'JK003',
                'kode_enrollment' => 'ENR001',
                'kode_hari' => '2',
                'kode_ruang' => 'MST-03-03',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '1',
                'kode_jam_akhir' => '6',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK004',
                'kode_enrollment' => 'ENR002',
                'kode_hari' => '2',
                'kode_ruang' => 'MST-03-04',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '7',
                'kode_jam_akhir' => '8',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK005',
                'kode_enrollment' => 'ENR001',
                'kode_hari' => '3',
                'kode_ruang' => 'MST-03-03',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '1',
                'kode_jam_akhir' => '6',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK006',
                'kode_enrollment' => 'ENR002',
                'kode_hari' => '3',
                'kode_ruang' => 'MST-03-04',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '7',
                'kode_jam_akhir' => '8',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK007',
                'kode_enrollment' => 'ENR001',
                'kode_hari' => '4',
                'kode_ruang' => 'MST-03-03',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '1',
                'kode_jam_akhir' => '6',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK008',
                'kode_enrollment' => 'ENR002',
                'kode_hari' => '4',
                'kode_ruang' => 'MST-03-04',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '7',
                'kode_jam_akhir' => '8',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK009',
                'kode_enrollment' => 'ENR001',
                'kode_hari' => '5',
                'kode_ruang' => 'MST-03-03',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '1',
                'kode_jam_akhir' => '6',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],
            [
                'kode_jadwal_kuliah' => 'JK010',
                'kode_enrollment' => 'ENR002',
                'kode_hari' => '5',
                'kode_ruang' => 'MST-03-04',
                'kode_kelas' => 'TI-2A',
                'kode_jam_awal' => '7',
                'kode_jam_akhir' => '8',
                'tahun_akademik' => '2022/2023',
                'semester' => 'gasal',


            ],




        ];

        DB::table('jadwal_kuliah')->insert($data);

    }
}
