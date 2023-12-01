@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush


@section('content')
    <div class="container" >
        @include('users.widgets.user-card')
        <div class="dialogs border">
            <div class="col">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 0)
                        @include('dialogues.widgets.dialog-card')
                    @endif
                @endforeach
            </div>

            <div class="col" id="coloumn">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 1)
                        @include('dialogues.widgets.dialog-card')
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
