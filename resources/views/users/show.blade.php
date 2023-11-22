@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/show.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="container">
        @include('users.widgets.user-card')
        <div class="dialogs">
            <div class="col">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 0)
                        @include('widgets.dialog-card')
                    @endif
                @endforeach
            </div>

            <div class="col" id="coloumn">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 1)
                        @include('widgets.dialog-card')
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
