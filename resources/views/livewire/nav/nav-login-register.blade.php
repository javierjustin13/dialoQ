<nav class="navbar sticky-top navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('home') }}">dialoQ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" wire:navigate id="{{ (Route::is('login')) ? 'active' : '' }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" wire:navigate id="{{ (Route::is('register')) ? 'active' : '' }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
