@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/users/show.css') }}"> {{--ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <h1>profile</h1>
@endsection
