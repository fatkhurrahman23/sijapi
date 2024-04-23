<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Redirect;
// use models\User;
use App\Models\User;


class RedirectIfNotAdmin
{

    
    public function handle($request, Closure $next)
    {

        if (Auth::user()->level === 'admin') {
            return $next($request);
        }
        
        
        return $next($request);



    }
}
