@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/terms.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Terms')

@section('content')

    <section id="terms-of-service">
        <div class="card" style="">
            <h1 class="primary-heading">Terms of Service</h1>
            <p class="paragraph">
                By accessing and using our application, you agree to abide by these terms and conditions. You are solely
                responsible for the content you post, ensuring it complies with applicable laws and regulations. We reserve
                the right to moderate user-generated content and may remove inappropriate material. Respectful conduct is
                expected from all users, and any form of harassment or discrimination will not be tolerated. Account holders
                are responsible for maintaining the confidentiality of their credentials. We reserve the right to terminate
                accounts violating these terms. Our application's content and features are protected by intellectual
                property laws, and any unauthorized use is strictly prohibited. We may update these terms, and continued use
                of the application constitutes acceptance of the revised terms.
            </p>
        </div>
    </section>

@endsection
