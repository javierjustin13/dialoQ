@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/dialogues/edit.css') }}">
@endpush

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row gx-4">
        <div class="col-3 " id="leftpane">
            <livewire:shared.dialog-form />
        </div>
        <div class="col-6 p-3 border rounded-4" id="midpane">
            @include('widgets.success-message')
            @include('widgets.edit-card')
        </div>
        <div class="col-3">
            @include('widgets.search-bar')
            @include('widgets.suggested-bar')
            @include('widgets.copyright')
        </div>
    </div>
</div>
@endsection
