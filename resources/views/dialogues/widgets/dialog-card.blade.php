<div wire:key="{{ $dialog->id }}" class="p-3 border rounded-4 mb-3" id="postcard">
    @include('dialogues.widgets.dialog-card-header')

    @include('dialogues.widgets.dialog-card-body')

    <hr>

    @include('dialogues.widgets.dialog-card-footer')
</div>
