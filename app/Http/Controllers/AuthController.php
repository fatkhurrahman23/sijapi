<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // ======================================== LOGIN ========================================
    public function showLoginPage()
    {
        return view('signin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials/* , $remember */)) {
            // Get the currently logged in user
            $user = Auth::user();

            $request->session()->put('username', $user->username);
            $request->session()->put('level', $user->level);

            // redirect user berdasarkan level
            if ($user->level === 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif ($user->level === 'dosen') {
                $data_dosen = Dosen::where('nip', $user->username)->first();

                $request->session()->put('kode_dosen', $data_dosen->kode_dosen);
                $request->session()->put('nama', $data_dosen->nama);

                return redirect()->intended('dosen/page/beranda');
            } else {
                // put kelas dengan join dari tabel mahasiswa berdasarkan kolom username user

                $dataMhs = Mahasiswa::where('nim', $user->username)->first();

                $prodi = $dataMhs->kode_prodi;
                $tingkat = $dataMhs->tingkat;
                $kelas = $dataMhs->kelas;
                $kode_kelas = $prodi . '-' . $tingkat . $kelas;

                $request->session()->put('kelas', $kode_kelas);
                $request->session()->put('namaMhs', $dataMhs->nama);

                return redirect()->intended('mahasiswa/page/beranda');
            }
        } else {
            return redirect()->route('login.index')->with('error', 'Username atau password salah');
        }
    }

    // ======================================== REGISTER ========================================
    public function showRegistrationPage()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        if (User::where('username', $request->username)->exists()) {
            return redirect()->route('register.index')->with('error', 'Username already exists');
        }

        $user = new User;
        $user->uuid = (string) Str::uuid();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->level = 'mahasiswa';
        $user->save();

        return redirect()->route('login.index')->with('success', 'Registration successful. You can now login.');
    }

    // ======================================== LOGOUT ========================================
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login.index');

    }
}
