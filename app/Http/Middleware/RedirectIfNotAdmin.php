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
//        dd($request->session()->all());
        if ($request->session()->has('level') && $request->session()->get('level') == 'admin') {
            return $next($request);
        }
        return redirect('/')->with('error', 'You are not authorized to access this page');
        return $next($request);

    }
}
