@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('title', 'Login')

@section('content')
<div class="form-login">
    <div class="container-md-offset-3 row-md-6">
            <form class="form-horizontal">
                <div class="heading">
                    <div class="login">LOGIN</div>
                </div>
                <div class="login-req">Email : </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputemail" placeholder="example@gmail.com">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                <div class="login-req">Password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="more than 8 characters">
                    {{-- <i class="fa fa-lock"></i> --}}
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="submit-btn">
                    <button type="submit" class="button">SUBMIT</button>
                </div>
                <div class="question">Don't have an account yet? <a href="/register">Register here</a></div>
            </form>
    </div>
</div>
@endsection
