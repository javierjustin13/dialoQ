<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function store(){
        $validated = request()->validate(
            [
                'name' => 'required|min:2|max:50',
                'username' => 'required|unique:users,username|min:2|max:50|alpha_dash',
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

        return redirect()->route('login');
    }
}
