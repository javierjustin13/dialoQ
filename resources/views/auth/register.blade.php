@extends('layouts.app')

@push('head')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/login/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/login/main.css')}}">
<!--===============================================================================================-->
@endpush

@section('title', 'Register')

{{-- @section('success')
@include('widgets.success-message')
@endsection --}}

@section('register')
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
                    Register
                </span>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="name" placeholder="Type your name">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                <div class="wrap-input100 validate-input m-t-23">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Type your username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                @error('username')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                <div class="wrap-input100 validate-input m-t-23">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Type your email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                <div class="wrap-input100 validate-input m-t-23">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                <div class="wrap-input100 validate-input m-t-23">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                @error('password_confirmation')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                <div class="container-login100-form-btn p-t-50">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Sign Up
                        </button>
                    </div>
                </div>

                <div class="flex-col-c p-t-50">
                    <a wire:navigate href="{{ route('login')}}" class="txt2">
                        Log In
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection