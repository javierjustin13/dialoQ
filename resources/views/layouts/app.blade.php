<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="/image/dialoQ_icon.png">
    <title> {{ config('app.name') }} </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layouts/nav.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@multiavatar/multiavatar/multiavatar.min.js"></script>
    @stack('head')

</head>

<body>
    @if (request()->is('login') || request()->is('register'))
        @include('layouts.nav-login-register')
    @else
        @include('layouts.nav')
    @endif

    <div class="container pt-4">
        {{-- Page content goes here --}}
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.querySelectorAll('form').forEach((form) => {
            form.addEventListener('submit', (e) => {
                if (form.classList.contains('is-submitting')) {
                    e.preventDefault();
                    e.stopPropagation();
                    return false;
                };

                form.classList.add('is-submitting');
            });
        });
    </script>
</body>

</html>
