<?php

namespace App\Livewire\Shared;

use App\Models\Dialog;
use App\Models\User;
use Livewire\Component;

class LikeButton extends Component
{
    public Dialog $dialog;
    public int $count;

    public function mount(Dialog $dialog)
    {
        $this->dialog = $dialog;
        $this->count = $dialog->likes_count;
    }

    public function toggleLike()
    {
        if(auth()->guest())
        {
            return $this->redirect(route('login', true));
        }

        $liker = auth()->user();

        if($liker->hasLiked($this->dialog))
        {
            $liker->likes()->detach($this->dialog);
            $this->count--;
        }
        else
        {
            $liker->likes()->attach($this->dialog);
            $this->count++;
        }
    }

    public function render()
    {
        return view('livewire.shared.like-button');
    }
}
