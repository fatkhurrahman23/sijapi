<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tabel uuid, username, password, level
        DB::table('users')->insert(
            [[
                'uuid' => (string) Str::uuid(),
                'username' => 'admin',
                'password' => Hash::make('admin'), // Hash the password
                'level' => 'admin'
            ],
            [
                'uuid' => (string) Str::uuid(),
                'username' => 'dosen',
                'password' => Hash::make('dosen'), // Hash the password
                'level' => 'dosen'
            ],
            [
                'uuid' => (string) Str::uuid(),
                'username' => 'mahasiswa',
                'password' => Hash::make('mahasiswa'), // Hash the password
                'level' => 'mahasiswa'
            ]]
        );
    }
}