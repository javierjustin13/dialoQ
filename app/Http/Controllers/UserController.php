<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Dialog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(User $user)
    {
        $dialogues = $user->dialogues()->get();
        $users = User::all();

        return view('users.show', compact('user', 'dialogues', 'users'));
    }


    public function edit(User $user)
    {
        $this->authorize('update', $user);

        $users = User::all();

        if (auth()->user()->id !== $user->id) {
            return redirect()->back();
        }
        return view('users.edit', compact('user', 'users'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $validated = $request->validated();

        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image ?? '');
        }

        $user->update($validated);

        return redirect()->route('profile');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }

    public function follow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->attach($user);

        return redirect()->back()->with('success', "You've started following $user->username!");
    }

    public function unfollow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->detach($user);

        return redirect()->back()->with('success', "You've unfollowed $user->username!");
    }
}
