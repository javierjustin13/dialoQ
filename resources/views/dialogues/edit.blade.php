@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/dialogues/edit.css') }}">
@endpush

@section('title', 'Edit Dialog')

@section('content')
<div class="container">
    <div class="row gx-5">
        <div class="col-3 " id="leftpane">
            @include('widgets.search-bar')
            <livewire:shared.dialog-form />
        </div>
        <div class="col-6 p-3" id="midpane">
            @include('widgets.success-message')
            @include('widgets.edit-card')
        </div>
        <div class="col-3">
            @include('widgets.suggested-bar')
            @include('widgets.copyright')
        </div>
    </div>
</div>
@endsection
