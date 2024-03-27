<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ShareUsername
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            view()->share('username', $username);  
        }

        return $next($request);
    }
}
