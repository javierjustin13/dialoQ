<?php

namespace App\Livewire\Follow;

use App\Models\User;
use Livewire\Component;

class FollowListButton extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function toggleFollow(){
        if(auth()->user()->follows($this->user))
        {
            $follower = auth()->user();
            $follower->followings()->detach($this->user);
        }
        else
        {
            $follower = auth()->user();
            $follower->followings()->attach($this->user);
        }
    }
    public function render()
    {
        return view('livewire.follow.follow-list-button');
    }
}
