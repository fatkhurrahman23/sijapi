<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tabel uuid, username, password, level
        DB::table('users')->insert(
            [
                'uuid' => (string) Str::uuid(),
                'username' => 'admin',
                'password' => 'admin',
                'level' => 'admin'
            ],
            [
                'uuid' => (string) Str::uuid(),
                'username' => 'dosen',
                'password' => 'dosen',
                'level' => 'dosen'
            ],
            [
                'uuid' => (string) Str::uuid(),
                'username' => 'mahasiswa',
                'password' => 'mahasiswa',
                'level' => 'mahasiswa'
            ]
        );
    }
}
