<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class prodiDosen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodiDosens = [
            [
                'kode_prodi' => 'TI',
                'nama' => 'D4 - TEKNOLOGI REKAYASA KOMPUTER'
            ],
            [
                'kode_prodi' => 'IK',
                'nama' => 'D3 - TEKNIK INFORMATIKA'
            ]
        ];
    
        foreach ($prodiDosens as $prodiDosen) {
            // Cek apakah data sudah ada
            $exist = DB::table('data_prodi')
                ->where('kode_prodi', $prodiDosen['kode_prodi'])
                ->where('nama', $prodiDosen['nama'])
                ->first();
    
            // Jika data belum ada, tambahkan ke database
            if (!$exist) {
                DB::table('prodi_dosen')->insert($prodiDosen);
            }
        }
    }
}
