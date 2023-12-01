<?php

namespace App\Livewire\Shared;

use App\Models\Dialog;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\On;
use Livewire\Component;

class DialogList extends Component
{
    #[On('dialog-created')]
    public function render()
    {
        if(Route::currentRouteName() == 'feeds'){
            $followingIDs = auth()->user()->followings()->pluck('user_id');
            $dialogues = Dialog::whereIn('user_id', $followingIDs)->latest();
        }
        else{
            $dialogues = Dialog::latest();
        }
        return view('livewire.shared.dialog-list',
        [
            'dialogues' => $dialogues->paginate(10)
        ]);
    }
}
