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
            'user_id' => 3,
            'likes' => $req->likes,

        ];
        $savedata = Dialog::create($data);
        return redirect()->back();
    }
}
