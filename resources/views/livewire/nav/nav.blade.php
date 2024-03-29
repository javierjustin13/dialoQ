<nav class="navbar sticky-top navbar-expand-lg border-bottom" style="background-color: #FFFFF">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('home') }}">dialoQ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @php
                        $route = Route::currentRouteName();
                    @endphp
                    <a class="nav-link" href="{{ route('home') }}" id="{{ $route === 'home' ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('feeds') }}" id="{{ Route::is('feeds') ? 'active' : '' }}">Feeds</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" wire:navigate id="{{ Route::is('login') ? 'active' : '' }}">Login</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <div class="border-profile">
                            <div class="profile-pict ml-2">
                                <img class="rounded-5" src="{{ Auth::user()->getImageUrl() }}" alt="profile picture">
                            </div>
                            <div class="username-nav">
                                <a class="nav-link" href="{{ route('profile') }}"
                                    id="{{ Route::is('profile') ? 'active' : '' }}">{{ Auth::user()->username }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link">
                                {{-- <img src="/image/logout_icon.png" alt="Log Out"> --}}
                                <div class="logout-box">
                                    <div class="logout-text me-2">Log Out</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#050505"
                                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                </div>
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
