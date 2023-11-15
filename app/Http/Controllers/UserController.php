<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show(Request $req)
    // {
    //     $data = [
    //         'title' => $req->title,
    //         'content' => $req->content,
    //         'user_id' => 3,

    //         // 'author' => 1,
    //         // 'likes' => 2,

    //     ];
    //     $savedata = Dialog::create($data);
    //     return redirect()->back();
    // }

    public function show(User $user)
    {
<<<<<<< HEAD
        $data = [
            'title' => $req->title,
            'content' => $req->content,
            'user_id' => Auth::user()->id,
            'likes' => 0,

        ];
        $savedata = Dialog::create($data);
        return redirect()->back();
=======
        return view('users.show', compact('user'));
>>>>>>> 8282579ddce58eb90b133a718f59d78a9ba3fd32
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


}
