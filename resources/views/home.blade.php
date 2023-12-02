@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row gx-4">
            <div class="col-3 " id="leftpane">
                <livewire:shared.dialog-form />
            </div>
            <div class="col-6" id="midborder">
                @include('widgets.success-message')
                @guest
                    <h2 class="py-3 mb-3" style="background-color: #241B35; color:#FCEAFC; border-radius:10px;text-align: center">LOGIN TO START YOUR DIALOG</h2>
                @endguest
                <livewire:shared.dialog-list />
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

