<?php

namespace App\Livewire\Shared;

use App\Models\Dialog;
use Illuminate\Auth\Events\Validated;
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
        Dialog::create($validated);

        $this->reset(['title', 'content']);
        session()->flash('success', 'Dialog created successfully !');
    }

    public function render()
    {
        return view('livewire.shared.dialog-form');
    }
}
