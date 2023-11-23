<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDialogRequest;
use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DialogController extends Controller
{
    public function store(CreateDialogRequest $request){
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();

        Dialog::create($validated);

        return redirect()->route('home')->with('success', 'Dialog created successfully !');
    }

    public function show(Dialog $dialog)
    {
        $users = User::all();
        return view('dialogues.show', compact('dialog', 'users'));
    }
}


