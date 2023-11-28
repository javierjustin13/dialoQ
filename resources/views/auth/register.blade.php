@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush

@section('title', 'Register')

@section('register')
    <section class="register">
        <div class="registerimg"><img src="/image/dialoQ-register.png" alt="Image"></div>
        <form name="registerform" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="container">
                <div class="registertitle">Register</div>

                <div class="inputtitle">Name</div>
                <div class="form-group"><input class="inputbox" type="text" name="name"
                        placeholder="ex. Delvin Setiamin"></div>
                @error('name')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="inputtitle">Username</div>
                <div class="form-group"><input class="inputbox" type="text" name="username" placeholder="ex. @delvin88">
                </div>
                @error('username')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="inputtitle">Email</div>
                <div class="form-group"><input class="inputbox" type="email" name="email"
                        placeholder="example@gmail.com"></div>
                @error('email')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="inputtitle">Password</div>
                <div class="form-group"><input class="inputbox" type="password" name="password"
                        placeholder="more than 8 characters"></div>
                @error('password')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="inputtitle">Confirm Password</div>
                <div class="form-group"><input class="inputbox" type="password" name="password_confirmation"
                        placeholder="more than 8 characters"></div>
                @error('password_confirmation')
                    <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                @enderror

                <div class="question">Have an account? <a href="/login">Login here</a></div>
                <button class="submitbtn" type="submit">Submit</button>
                <p class="error submit-error"></p>
                <p class="success register-success"></p>
            </div>

        </form>
    </section>
@endsection
