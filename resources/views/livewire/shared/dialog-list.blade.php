@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush

<div class="p-3 pt-0" id="midpane">
    @forelse ($dialogues as $dialog)
        @include('dialogues.widgets.dialog-card')
    @empty
        <h1>There are no dialogues</h1>
    @endforelse
</div>

