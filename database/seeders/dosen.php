<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class dosen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_dosen=[
            [
                'kode_dosen' => 'D001',
                'nip' => '1234567890',
                'nama' => 'Dr. John Doe',
                'alamat' => 'Jl. Merdeka 123',
                'no_telp' => '08123456789',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D002',
                'nip' => '9876543210',
                'nama' => 'Jane Doe, M.Sc.',
                'alamat' => 'Jl. Sudirman 456',
                'no_telp' => '08987654321',
                'kode_prodi' => 'IK',
            ],
            [
                'kode_dosen' => 'D003',
                'nip' => '1122334455',
                'nama' => 'Dr. John Doe',
                'alamat' => 'Jl. Merdeka 123',
                'no_telp' => '08123456789',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D004',
                'nip' => '5432167890',
                'nama' => 'Jane Doe, M.Sc.',
                'alamat' => 'Jl. Sudirman 456',
                'no_telp' => '08987654321',
                'kode_prodi' => 'IK',
            ],
            [
                'kode_dosen' => 'D005',
                'nip' => '197904262003122002',
                'nama' => 'Ir. Kurnianingsih, S.T., M.T.',
                'alamat' => 'Jl. Merdeka 123',
                'no_telp' => '08123456789',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D006',
                'nip' => '199107302019031010',
                'nama' => '	NURSENO BAYU AJI , S.Kom., M.Kom.',
                'alamat' => 'Jl. Sudirman 456',
                'no_telp' => '08987654321',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D007',
                'nip' => '198703272019032012',
                'nama' => 'WIKTASARI , S.T., M.Kom.',
                'alamat' => 'Jl. Merdeka 123',
                'no_telp' => '08123456789',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D008',
                'nip' => '198407192019031008',
                'nama' => 'KUWAT SANTOSO , S.T., M.Kom.',
                'alamat' => 'Jl. Sudirman 456',
                'no_telp' => '08987654321',
                'kode_prodi' => 'IK',
            ],
            [
                'kode_dosen' => 'D009',
                'nip' => '197112042000032001',
                'nama' => 'NUR HIDAYATI , S.H., M.H.',
                'alamat' => 'Jl. Merdeka 123',
                'no_telp' => '08123456789',
                'kode_prodi' => 'TI',
            ],
            [
                'kode_dosen' => 'D010',
                'nip' => '199209092020121007',
                'nama' => 'MUTTABIK FATHUL LATHIEF S.Kom., M.Eng.',
                'alamat' => 'Jl. Sudirman 456',
                'no_telp' => '08987654321',
                'kode_prodi' => 'IK',
            ],

        ];

        // insert data ke dalam tabel dosen
        DB::table('dosen')->insert($data_dosen);

        //tabel uuid, username, password, level
        $userData = array_map(function ($dosen) {
            return [
                'uuid' => (string) Str::uuid(),
                'username' => $dosen['nip'],
                'password' => Hash::make($dosen['nip']),
                'level' => 'dosen'
            ];
        }, $data_dosen);

        // insert data ke dalam tabel users
        DB::table('users')->insert($userData);

    }
}
