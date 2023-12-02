<?php

namespace App\Livewire\Follow;

use App\Models\User;
use Livewire\Component;

class RemoveFollowerListButton extends Component
{

    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function toggleRemove(){
        $this->user->followings()->detach(auth()->user());
        
    }

    public function render()
    {
        return view('livewire.follow.remove-follower-list-button');
    }
}
