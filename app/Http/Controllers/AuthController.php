<?php

namespace App\Http\Controllers;

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



//            dd($request->session()->all());

            // redirect user berdasarkan level
            if ($user->level === 'admin') {
                return redirect('admin/dashboard');
            } elseif ($user->level === 'dosen') {
                return redirect('dosen/page/beranda');
            } else {
                // put kelas dengan join dari tabel mahasiswa berdasarkan kolom username user
                $kelas = DB::table('users')
                    ->join('mahasiswa', 'users.username', '=', 'mahasiswa.nim')
                    ->join('kelas_mahasiswa', 'mahasiswa.kode_kelas', '=', 'kelas_mahasiswa.kode_kelas')
                    ->select('kelas_mahasiswa.kode_kelas', 'kelas_mahasiswa.kode_kelas')
                    ->where('users.username', $user->username)
                    ->first();
//                dd($kelas);
                $request->session()->put('kode_kelas', $kelas->kode_kelas);
//                dd($request->session()->all());
                return redirect('mahasiswa/page/beranda');
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
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
