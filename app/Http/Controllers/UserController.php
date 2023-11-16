<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $dialogues = $user->dialogues()->get();

        return view('users.show', compact('user', 'dialogues'));
    }


    public function edit(User $user)
    {
        if (auth()->user()->id !== $user->id) {
            return redirect()->back();
        }
        return view('users.edit', compact('user'));

    }

    public function update(User $user){

    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
