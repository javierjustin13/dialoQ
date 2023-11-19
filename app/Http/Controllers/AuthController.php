<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function store()
    {
        $validated = request()->validate(
            [
                'name' => 'required|min:2|max:20',
                'username' => 'required|unique:users,username|min:2|max:20|alpha_dash',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|max:50|confirmed'
            ]
        );

        $user = User::create(
            [
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password'])
            ]
        );

        return redirect()->route('login')->with('success', 'Account has been successfully made, login now!');
    }

    public function authenticate()
    {
        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(
            [
                'email' => 'Invalid credentials'
            ]
        );
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Logged out successfully!');
    }
}
