<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

use App\Models\TokenPresensi;
use App\Models\Jadwal_kuliah;
use App\Models\Jam;
use App\Models\Data_presensi;



class PresensiController extends Controller
{
    //
    public function generateToken(Request $request)
    {
        $day = \Carbon\Carbon::now()->locale('id')->dayOfWeek;
        $currentTime = \Carbon\Carbon::now()->locale('id')->isoFormat('HH:mm:ss');

        $dateNow = Carbon::now()->locale('id')->isoFormat('YYYY-MM-DD');

        $jam = Jam::where('jam_awal', '<=', $currentTime)
            ->where('jam_akhir', '>=', $currentTime)
            ->first();

        try {
            $kode_jadwal = Jadwal_kuliah::where('kode_dosen', session()->get('kode_dosen'))
                ->where('kode_hari', $day)
                ->where('kode_jam_awal', '<=', $jam->kode_jam)
                ->where('kode_jam_akhir', '>=', $jam->kode_jam)
                ->firstOrFail()->kode_jadwal_kuliah;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Jadwal kuliah tidak ditemukan'
            ], 404);
        }

        $token = Str::random(32);
        $created_at = now();

        $jam_akhir = Jadwal_kuliah::where('kode_jadwal_kuliah', $kode_jadwal)->first()->kode_jam_akhir;
        $jam_expired = Jam::where('kode_jam', $jam_akhir)->first()->jam_akhir;
        $expired_at = $dateNow . ' ' . $jam_expired;

        $tokenPresensi = new TokenPresensi;
        $tokenPresensi->token = $token;
        $tokenPresensi->kode_jadwal_kuliah = $kode_jadwal;
        $tokenPresensi->created_at = $created_at;
        $tokenPresensi->expired_at = $expired_at;
        $tokenPresensi->save();


        return response()->json([
            'message' => 'Token generated successfully',
            'token' => $token
        ]);
    }

    public function checkToken(Request $request)
    {
        $token = $request->token;

        $tokenPresensi = TokenPresensi::where('token', $token)
                                      ->where('expired_at', '>', now())
                                      ->first();


        if ($tokenPresensi) {
            // Get the student's NIM from the session
            $nim = session()->get('username');
            $kelas_mhs = session()->get('kelas');

            if ($kelas_mhs != $tokenPresensi->kode_jadwal_kuliah) {
                return response()->json([
                    'message' => 'Anda tidak terdaftar dalam kelas ini'
                ]);
//                with('error', '')
            }

            $dataPresensi = new Data_presensi;

            $dataPresensi->token = $token;
            $dataPresensi->nim = $nim;
            $dataPresensi->waktu_presensi = now();
            $dataPresensi->status = 'hadir';

            // Save the instance to the database
            $dataPresensi->save();

            // Return a success message
            return response()->json([
                'message' => 'Presensi berhasil'
            ]);
        } else {
            // Return an error message
            return response()->json([
                'message' => 'Token tidak valid atau sudah expired'
            ]);
        }
    }


}
