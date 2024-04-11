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
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }
        
        // if (Auth::user()) {
        //     dd(Auth::user()->level);
        // } else {
        //     dd('No authenticated user');
        // }
    
        // abort(403, 'Unauthorized');
        return $next($request);



    }
}
