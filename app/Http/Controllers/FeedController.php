<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $followingIDs = auth()->user()->followings()->pluck('user_id');

        $dialogues = Dialog::whereIn('user_id', $followingIDs)->latest();

        return view(
            'feeds',
            [
                'dialogues' => $dialogues->paginate(10),
                'users' => User::all()
            ]
        );
    }
}
