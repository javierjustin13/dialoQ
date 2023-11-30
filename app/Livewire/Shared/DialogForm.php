<?php

namespace App\Livewire\Shared;

use App\Models\Dialog;
use Illuminate\Auth\Events\Validated;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DialogForm extends Component
{
    #[Rule('required|min:1|max:50')]
    public $title = '';

    #[Rule('required|min:1|max:10000')]
    public $content = '';

    public function storeDialog(){
        $validated = $this->validate();
        $validated['user_id'] = auth()->id();
        $dialog = Dialog::create($validated);

        $this->reset(['title', 'content']);

        $this->dispatch('dialog-created', $dialog);
    }

    public function render()
    {
        return view('livewire.shared.dialog-form');
    }
}
