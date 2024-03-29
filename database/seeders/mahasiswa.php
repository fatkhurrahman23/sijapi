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
                'nim' => '4.33.22.0.01',
                'nama' => 'MAHASISWA A 1',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2A'
            ],
            [
                'nim' => '4.33.22.0.02',
                'nama' => 'MAHASISWA A 2',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2A'
            ],
            [
                'nim' => '4.33.22.1.01',
                'nama' => 'MAHASISWA B 1',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2B'
            ],
            [
                'nim' => '4.33.22.1.02',
                'nama' => 'MAHASISWA B 2',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2B'
            ]
        ];

        // insert data mahasiswa
        DB::table('mahasiswa')->insert($data);
    }
}
