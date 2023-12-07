@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Home')