<?php

namespace App\Livewire\Shared;

use App\Models\Dialog;
use Livewire\Attributes\On;
use Livewire\Component;

class DialogList extends Component
{
    #[On('dialog-created')]
    public function render()
    {
        return view('livewire.shared.dialog-list',
        [
            'dialogues' => Dialog::latest()->paginate(10)
        ]);
    }
}
