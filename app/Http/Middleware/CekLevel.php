<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $level
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $level)
    {
        if (!$request->session()->has('level')) {
            return redirect()->route('login.index')->with('error', 'Silakan login terlebih dahulu.');
        }

        $currentLevel = $request->session()->get('level');

        if ($currentLevel != $level) {
            switch ($currentLevel) {
                case 'admin':
                    return redirect('/admin')->with('error', 'Anda tidak berhak mengakses halaman tersebut');
                case 'dosen':
                    return redirect('/dosen/page/beranda')->with('error', 'Anda tidak berhak mengakses halaman tersebut');
                case 'mahasiswa':
                    return redirect('/mahasiswa/page/beranda')->with('error', 'Anda tidak berhak mengakses halaman tersebut');
                default:
                    return redirect('/login')->with('error', 'Anda tidak berhak mengakses halaman tersebut');
            }
        }

        return $next($request);
    }


}
