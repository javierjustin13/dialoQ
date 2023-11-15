<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $req)
    {
        $data = [
            'title' => $req->title,
            'content' => $req->content,
            'user_id' => Auth::user()->id,
            'likes' => 0,

        ];
        $savedata = Dialog::create($data);
        return redirect()->back();
    }
}
