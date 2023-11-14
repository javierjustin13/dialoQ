@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush

@section('title', 'Register')

@section('content')
<div class="form-register">
    <div class="container-md-offset-3 row-md-6">
            <form class="form-horizontal">
                <div class="heading">
                    <div class="register">REGISTER</div>
                </div>
                <div class="login-req">Username : </div>
                <div class="form-group">
                    <input type="username" class="form-control" id="inputUsername" placeholder="ex. delvin88">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                <div class="login-req">Email : </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                <div class="login-req">Password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="more than 8 characters">
                    {{-- <i class="fa fa-lock"></i> --}}
                    {{-- <a href="#" class="fa fa-question-circle"></a> --}}
                </div>
                <div class="login-req">Confirm password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="enter your password">
                    {{-- <i class="fa fa-lock"></i> --}}
                    {{-- <a href="#" class="fa fa-question-circle"></a> --}}
                </div>
                <div class="submit-btn">
                    <button type="submit" class="button">SUBMIT</button>
                </div>
                <div class="question">Have an account? <a href="/login">Login here</a></div>
            </form>
    </div>
</div>
@endsection
