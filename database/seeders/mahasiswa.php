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
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2A'
            ],
            [
                'nim' => '43322002',
                'nama' => 'MAHASISWA A 2',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2A'
            ],
            [
                'nim' => '43322101',
                'nama' => 'MAHASISWA B 1',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2B'
            ],
            [
                'nim' => '43322102',
                'nama' => 'MAHASISWA B 2',
                'jenis_kelamin' => 'L',
                'kode_kelas' => 'TI-2B'
            ]
        ];

        // insert data mahasiswa
        DB::table('mahasiswa')->insert($data);
    }
}
