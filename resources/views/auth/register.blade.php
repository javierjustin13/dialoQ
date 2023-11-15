@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush

@section('title', 'Register')

@section('content')
    <div class="form-register">
        <div class="container-md-offset-3 row-md-6">
            <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="heading">
                    <div class="register">REGISTER</div>
                </div>
                <div class="login-req">Name : </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="ex. Delvin Setiamin">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                @error('name')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror

                <div class="login-req">Username : </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="ex. delvin88">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                @error('username')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror

                <div class="login-req">Email : </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
                @error('email')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror

                <div class="login-req">Password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="more than 8 characters">
                    {{-- <i class="fa fa-lock"></i> --}}
                    {{-- <a href="#" class="fa fa-question-circle"></a> --}}
                </div>
                @error('password')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror

                <div class="login-req">Confirm password :</div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="enter your password">
                    {{-- <i class="fa fa-lock"></i> --}}
                    {{-- <a href="#" class="fa fa-question-circle"></a> --}}
                </div>
                @error('password_confirmation')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror

                <div class="submit-btn">
                    <button type="submit" name="submit" class="button" value="submit">SUBMIT</button>
                </div>
                <div class="question">Have an account? <a href="/login">Login here</a></div>
            </form>
        </div>
    </div>
@endsection
