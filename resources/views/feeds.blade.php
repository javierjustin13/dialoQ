@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Feeds')

@section('content')
    <div class="container">
        <div class="row gx-4">
            <div class="col-3 " id="leftpane">
                <livewire:shared.dialog-form />
            </div>
            <div class="col-6" id="midborder">
                <livewire:shared.success-message />
                @guest
                    <h2 class="py-3 mb-3" style="background-color: #D9D9D9; color:#4a4a4a; border-radius:10px">LOGIN TO START YOUR
                        DIALOG</h2>
                @endguest
                <div class="p-3 border rounded-4" id="midpane">
                    @forelse ($dialogues as $dialog)
                        <livewire:shared.dialog-card :dialog="$dialog" />
                    @empty
                        <h1>The people you follow haven't started any dialogues.</h1>
                    @endforelse

                </div>
                {{ $dialogues->links() }}
            </div>
            <div class="col-3" id="rightpane">
                @include('widgets.search-bar')
                @include('widgets.suggested-bar')
                @include('widgets.copyright')
            </div>
        </div>
    </div>
@endsection
