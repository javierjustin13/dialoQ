<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dialogues = Dialog::latest();
        return view('home',
            [
                'dialogues' => $dialogues->paginate(10),
                'users' => User::all()
            ]);
    }
}
