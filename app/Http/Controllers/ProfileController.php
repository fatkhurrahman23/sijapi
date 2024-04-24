<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // get profile untuk mahasiswa menggunakan join table berdasarkan username user
    // menampilkan nama, nim, dan kelas mahasiswa
    public function getProfileMahasiswa($username)
    {
        $data = DB::table('users')
            ->join('mahasiswa', 'users.username', '=', 'mahasiswa.username')
            ->join('kelas_mahasiswa', 'mahasiswa.kode_kelas', '=', 'kelas_mahasiswa.kode_kelas')
            ->select('users.nama', 'mahasiswa.nim', 'kelas_mahasiswa.nama_kelas')
            ->where('users.username', $username)
            ->first();

//        dd(response()->json($data));

        return view('mahasiswa/page/profile', compact('data'));
    }



}
