<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;



class Authenticate implements AuthenticatesRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     
    public function handle(Request $request, Closure $next)
    {
        // dd($request->session()->all());

        // Check if the user is authenticated
        if (!$request->session()->has('username')) {
            return redirect()->route('login.index')->with('error', 'Please log in to access this page.');
        }
        
        // User is authenticated, allow the request to proceed
        return $next($request);
    }
}
