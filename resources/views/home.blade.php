@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="success-message">
            @include('widgets.success-message')
            @guest
                <h2 class="py-3 mb-3" style= "background-color: white; border-radius: 10px; border-style: solid; border-width: 1px;
                border-color: white; color: #050505; text-align: center; box-shadow: 0px 0px 6px 0px rgba(222,224,227,1);">LOGIN TO START YOUR DIALOG</h2>
            @endguest
        </div>
        <div class="row gx-5">
            <div class="col-3 " id="leftpane">
                @include('widgets.search-bar')
                <livewire:shared.dialog-form />
            </div>
            <div class="col-6" id="midborder">
                <livewire:shared.dialog-list />
                {{ $dialogues->links() }}
            </div>
            <div class="col-3" id="rightpane">
                {{-- @include('widgets.search-bar') --}}
                @include('widgets.suggested-bar')
                @include('widgets.copyright')
            </div>
        </div>
    </div>


@endsection

