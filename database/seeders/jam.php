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
        //buat beberapa data ke kolom kode_jam, jam_awal (time), jam_akhir (time). jaral antara jam_awal dan jam_akhir adalah 45 menit
        $data = [
            [
                'kode_jam' => '1',
                'jam_awal' => '07:00:00',
                'jam_akhir' => '07:45:00'
            ],
            [
                'kode_jam' => '2',
                'jam_awal' => '07:45:00',
                'jam_akhir' => '08:30:00'
            ],
            [
                'kode_jam' => '3',
                'jam_awal' => '08:30:00',
                'jam_akhir' => '09:15:00'
            ],
            [
                'kode_jam' => '4',
                'jam_awal' => '09:15:00',
                'jam_akhir' => '10:00:00'
            ],
            [
                'kode_jam' => '5',
                'jam_awal' => '10:00:00',
                'jam_akhir' => '10:45:00'
            ],
            [
                'kode_jam' => '6',
                'jam_awal' => '10:45:00',
                'jam_akhir' => '11:30:00'
            ],
            [
                'kode_jam' => '7',
                'jam_awal' => '11:30:00',
                'jam_akhir' => '12:15:00'
            ],
            [
                'kode_jam' => '8',
                'jam_awal' => '12:15:00',
                'jam_akhir' => '13:00:00'
            ],
            [
                'kode_jam' => '9',
                'jam_awal' => '13:00:00',
                'jam_akhir' => '13:45:00'
            ],
            [
                'kode_jam' => '10',
                'jam_awal' => '13:45:00',
                'jam_akhir' => '14:30:00'
            ],
            [
                'kode_jam' => '11',
                'jam_awal' => '14:30:00',
                'jam_akhir' => '15:15:00'
            ],
            [
                'kode_jam' => '12',
                'jam_awal' => '15:15:00',
                'jam_akhir' => '16:00:00'
            ],
        ];

        
        // insert data ke dalam tabel jam
        DB::table('jam')->insert($data);
    }
}
