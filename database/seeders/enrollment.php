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

        $data = [
            [
                'kode_enrollment' => 'ENR001',
                'kode_dosen' => 'D001',
                'kode_mata_kuliah' => 'MK001',
            ],
            [
                'kode_enrollment' => 'ENR002',
                'kode_dosen' => 'D002',
                'kode_mata_kuliah' => 'MK002',
            ],
        ];

        DB::table('enrollment')->insert($data);
    }
}
