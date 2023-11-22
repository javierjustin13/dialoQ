@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/dialogues/show.css') }}">
@endpush

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row gx-4">
        <div class="col-3 " id="leftpane">
            @include('widgets.dialog-form')
        </div>
        <div class="col-6">
            @include('widgets.success-message')
            @include('widgets.view-card')
        </div>
        <div class="col-3">
            @include('widgets.search-bar')
            @include('widgets.suggested-bar')
            @include('widgets.copyright')
        </div>
    </div>
</div>
@endsection
