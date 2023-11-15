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
                    <a class="nav-link active" aria-current="page" href="/" id="active">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feeds">Feeds</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">{{ Auth::user()->username }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <img src="/image/logout_icon.png" alt="logout">
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
