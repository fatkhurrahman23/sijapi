<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    public function handle($request, Closure $next)
    {
        // dd($request->session()->all());

        // dd(auth()->check());
        if (!$request->session()->has('username')) {
            // User is not authenticated, redirect to the login page
            return redirect()->route('login.index')->with('error', 'Silakan login terlebih dahulu.');
        }

        // User is authenticated, allow the request to proceed
        return $next($request);
    }
}
