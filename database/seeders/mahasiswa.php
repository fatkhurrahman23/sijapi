<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nim' => '43322001',
                'nama' => 'MAHASISWA A 1',
                'tahun_masuk' => '2021/2022-1',
                'kode_prodi' => 'TI',
                'jenis_kelamin' => 'L',
                'status' => 'Aktif',
                'kode_kelas' => 'TI-2A',

            ],

        ];

        // insert data mahasiswa
        DB::table('mahasiswa')->insert($data);
    }
}
