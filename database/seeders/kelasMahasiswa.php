<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class kelasMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //isi database kelas mahasiswa
        DB::table('kelas_mahasiswa')->insert([
            [
                'kode_kelas' => 'TI-2A',
                'kode_prodi' => 'TI'
            ],
            [
                'kode_kelas' => 'TI-2B',
                'kode_prodi' => 'TI'
            ]
        ]
        );
    }
}
