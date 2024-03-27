<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class jam extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat beberapa data ke kolom kode_jam, range_jam
        $data = [
            [
                'kode_jam' => 'JAM-01',
                'range_jam' => '07:00:00'
            ],
            [
                'kode_jam' => 'JAM-02',
                'range_jam' => '08:00:00'
            ],
            [
                'kode_jam' => 'JAM-03',
                'range_jam' => '09:00:00'
            ],
            [
                'kode_jam' => 'JAM-04',
                'range_jam' => '10:00:00'
            ],
            [
                'kode_jam' => 'JAM-05',
                'range_jam' => '11:00:00'
            ],
            [
                'kode_jam' => 'JAM-06',
                'range_jam' => '12:00:00'
            ],
            [
                'kode_jam' => 'JAM-07',
                'range_jam' => '13:00:00'
            ],
            [
                'kode_jam' => 'JAM-08',
                'range_jam' => '14:00:00'
            ],
            [
                'kode_jam' => 'JAM-09',
                'range_jam' => '15:00:00'
            ],
            [
                'kode_jam' => 'JAM-10',
                'range_jam' => '16:00:00'
            ],
            [
                'kode_jam' => 'JAM-11',
                'range_jam' => '17:00:00'
            ],
            [
                'kode_jam' => 'JAM-12',
                'range_jam' => '18:00:00'
            ]  
        ];

        // insert data ke dalam tabel jam
        DB::table('jam')->insert($data);
    }
}
