<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
{
    if (Auth::check()) {
        return redirect('/dashboard'); 
    }
    return view('auth.register');
}

    public function showLoginForm()
{
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('auth.login');
}

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha incorretos.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Você saiu da sua conta.');
    }
}
