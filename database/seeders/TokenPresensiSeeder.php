<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TokenPresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tokens = [
            [
                'token' => '2kmAJyFSYpuuTN9yhVdQGsPp72TNtn3n',
                'kode_jadwal_kuliah' => 'JK001',
                'created_at' => Carbon::now(),
                'expired_at' => Carbon::now()->addHours(6)
            ],

            // tambahkan token lainnya jika diperlukan
        ];

        foreach ($tokens as $token) {
            DB::table('presensi_tokens')->insert($token);
        }

    }
}
