<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokenPresensi;
use App\Models\JadwalKuliah;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    //
    public function generateToken(Request $request)
    {
        $token = Str::random(32); // generate random token
        $kode_jadwal = $request->kode_jadwal;
        $created_at = now();

        // Get the end time from the 'jam' table based on 'jam_akhir'
        $jam_akhir = Jam::where('kode_jadwal', $kode_jadwal)->first()->jam_akhir;

        // Convert 'jam_akhir' to a Carbon instance and set it as 'expired_at'
        $expired_at = Carbon::createFromFormat('H:i:s', $jam_akhir);


        $tokenPresensi = new TokenPresensi;
        $tokenPresensi->token = $token;
        $tokenPresensi->kode_jadwal = $kode_jadwal;
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
            return response()->json([
                'message' => 'Token is valid',
                'kode_jadwal' => $tokenPresensi->kode_jadwal
            ]);
        } else {
            return response()->json([
                'message' => 'Token is invalid or expired'
            ], 400);
        }
    }
}
