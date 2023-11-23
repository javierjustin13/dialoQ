@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('title', 'Login')

@section('content')
    <div class="form-login">
        <div class="container-md-offset-3 row-md-6">
            @include('widgets.success-message')
            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                @csrf
                @honeypot
                <div class="heading">
                    <div class="login">LOGIN</div>
                </div>
                <div class="login-req">Email : </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                @error('email')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="login-req">Password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    {{-- <i class="fa fa-lock"></i> --}}
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                @error('password')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror
                <div class="submit-btn">
                    <button type="submit" class="button" onclick="disable(this)">SUBMIT</button>
                </div>
                <div class="question">Don't have an account yet? <a href="/register">Register here</a></div>
            </form>
        </div>
    </div>
@endsection
