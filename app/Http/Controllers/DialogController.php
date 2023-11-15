<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DialogController extends Controller
{
    public function store(Request $req){
        $data = [
            'title' => $req->title,
            'content' => $req->content,
            'user_id' => Auth::user()->id,
            'likes' => 0,

        ];
        // dd($data);
        $savedata = Dialog::create($data);
        return redirect()->back();
    }
}
