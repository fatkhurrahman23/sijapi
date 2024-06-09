<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                'kelas' => 'A',
                'jenis_kelamin' => 'L',
                'status' => 'Aktif',
                'kode_kelas' => 'TI-2A',

            ],
            [
                'nim' => '43322002',
                'nama' => 'MAHASISWA A 2',
                'tahun_masuk' => '2021/2022-1',
                'kode_prodi' => 'TI',
                'kelas' => 'A',
                'jenis_kelamin' => 'L',
                'status' => 'Aktif',
                'kode_kelas' => 'TI-2A',

            ],
            [
                'nim' => '43322003',
                'nama' => 'MAHASISWA A 3',
                'tahun_masuk' => '2022/2023-1',
                'kode_prodi' => 'TI',
                'kelas' => 'A',
                'jenis_kelamin' => 'L',
                'status' => 'Aktif',
                'kode_kelas' => 'TI-2A',

            ],
            [
                'nim' => '43322004',
                'nama' => 'MAHASISWA A 4',
                'tahun_masuk' => '2022/2023-1',
                'kode_prodi' => 'TI',
                'kelas' => 'A',
                'jenis_kelamin' => 'L',
                'status' => 'Aktif',
                'kode_kelas' => 'TI-2A',
            ]

        ];

        // insert data mahasiswa
        DB::table('mahasiswa')->insert($data);

        // insert data user
        $userData = array_map(function ($mahasiswa) {
            return [
                'uuid' => (string) Str::uuid(),
                'username' => $mahasiswa['nim'],
                'password' => Hash::make($mahasiswa['nim']),
                'level' => 'mahasiswa'
            ];
        }, $data);

        DB::table('users')->insert($userData);
    }
}
