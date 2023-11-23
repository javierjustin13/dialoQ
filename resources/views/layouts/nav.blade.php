<nav class="navbar sticky-top navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="/">dialoQ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @php
                        $route = Route::currentRouteName();
                    @endphp
                    <a class="nav-link" href="/" id="{{ $route === 'home' ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feeds" id="{{ (Route::is('feeds')) ? 'active' : '' }}">Feeds</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" id="{{ (Route::is('login')) ? 'active' : '' }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <div class="border-profile">
                            {{-- <<img src="{{ $dialog->user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt=""> --}}
                            <div class="profile-pict ml-2">
                                <img class="rounded-5" src="{{ Auth::user()->getImageUrl() }}" alt="profile picture">
                            </div>
                            <div class="username-nav">
                                <a class="nav-link" href="{{ route('profile') }}" id="{{ (Route::is('profile')) ? 'active' : '' }}">{{ Auth::user()->username }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link">
                                <img src="/image/logout_icon.png" alt="logout">
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
