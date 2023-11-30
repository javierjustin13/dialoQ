<?php

namespace App\Livewire\Shared;

use Livewire\Component;

class DialogCard extends Component
{
    public $dialog;

    public function mount($dialog)
    {
        $this->dialog = $dialog;
    }

    public function render()
    {
        return view('livewire.shared.dialog-card');
    }
}
