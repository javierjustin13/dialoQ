<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dialogues = Dialog::orderBy('created_at', 'desc');
        return view('home',
            [
                'dialogues' => $dialogues->paginate(10)
            ]);
    }

}
