<div class="upper">
    <div class="left-content">

        <div class="card-profile p-3">
            <div class="pp-identity d-flex align-items-center">
                <div class="profile-picture flex-wrap align-items-center">
                    <img class="" style="border-radius: 50%; height: 200px; width:200px"
                        src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt="">
                </div>

                <div class="identity ">
                    <div class="username-edit">
                        <h3 class="username">{{ $user->username }}</h3>
                        @auth
                            @if (Auth::user()->id == $user->id)
                                <a href="{{ route('users.edit', $user->id) }}">
                                    <button type="submit">Edit profile</button>
                                </a>
                            @endif
                        @endauth
                    </div>

                    <span class="email pt-2">{{ $user->email }} </span>

                    @include('users.widgets.user-stats')

                    <div class="button d-flex flex-row align-items-center">
                        <span class="name">{{ $user->name }} </span>
                    </div>

                    <div class="bio">
                        <p>{{ $user->bio }}</p>
                    </div>
                    @auth()
                        @if (Auth::user()->isNot($user))
                            <div class="mt-3">
                                @if (Auth::user()->follows($user))
                                    <form method="POST" action="{{ route('users.unfollow', $user->id) }}">
                                        @csrf
                                        @honeypot
                                        <button type="submit" class="btn btn-danger btn-sm"> Unfollow </button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('users.follow', $user->id) }}">
                                        @csrf
                                        @honeypot
                                        <button type="submit" class="btn btn-primary btn-sm"> Follow </button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <div class="right-content col-3">
        @include('widgets.search-bar')
        @include('widgets.suggested-bar')
    </div>
</div>
