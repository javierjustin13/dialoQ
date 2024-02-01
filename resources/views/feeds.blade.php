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
                @include('widgets.success-message')
                @guest
                    <h2 class="py-3 mb-3 border"
                        style="background-color: white; color:#FCEAFC; border-radius:10px; text-align:center;box-shadow: 0px 0px 6px 0px rgba(222,224,227,1);">LOGIN TO START
                    YOUR DIALOG</h2> @endguest

                @auth
                    <livewire:shared.dialog-list />
                    {{ $dialogues->links() }}
                @endauth

            </div>
            <div class="col-3" id="rightpane">
                @include('widgets.search-bar')
                @include('widgets.suggested-bar')
                @include('widgets.copyright')
            </div>
        </div>
    </div>


@endsection
