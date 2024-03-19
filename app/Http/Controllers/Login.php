<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            // Authentication failed...
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
