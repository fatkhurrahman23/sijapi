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
        if (!$request->session()->has('level') || $request->session()->get('level') != $level) {
//            return redirect('/')->with('error', 'You are not authorized to access this page');
            return redirect()->intended()->with('error', 'You are not authorized to access this page');
        }

        return $next($request);
    }
}
