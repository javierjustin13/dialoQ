<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Dialog $dialog){
        $liker = auth()->user();
        $liker->likes()->attach($dialog);

        return back();
    }

    public function unlike(Dialog $dialog){
        $liker = auth()->user();
        $liker->likes()->detach($dialog);

        return back();
    }
}
