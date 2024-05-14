<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jurusan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buatkan seeder untuk data jurusan berisi kode_jurusan dan nama_jurusan
        $data = [
            [
                'kode_jurusan' => 'elektro',
                'nama_jurusan' => 'Teknik Elektro'
            ],
            [
                'kode_jurusan' => 'mesin',
                'nama_jurusan' => 'Teknik Mesin'
            ],
            [
                'kode_jurusan' => 'sipil',
                'nama_jurusan' => 'Teknik Sipil'
            ],
        ];

        // Insert data ke database
        foreach ($data as $jurusan) {
            \DB::table('jurusan')->insert($jurusan);
        }
    }
}
