<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
public function logout()
{
    Auth::logout();
    return redirect('login');
}
