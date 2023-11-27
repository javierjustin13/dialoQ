<div class="upper">
    <div class="left-content">

        <div class="card-profile">
            <div class="upper-profile">
                <div class="profile-picture">
                    <img class="pp-image"
                        src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt="">
                </div>

                <div class="identity ">
                    <div class="username-edit">
                        <h3 class="username">{{ $user->username }}</h3>
                        @auth()
                            @if (Auth::user()->id == $user->id)
                                <a href="{{ route('users.edit', $user->id) }}">
                                    <button type="submit">Edit profile</button>
                                </a>
                            @endif
                        @endauth
                    </div>

                    <span class="email pt-3">{{ $user->email }} </span>

                    @include('users.widgets.user-stats')

                </div>
            </div>

            <div class="bottom-profile">
                <div class="name-bio">
                    <div class="name">
                        <span class="name">{{ $user->name }} </span>
                    </div>

                    <div class="bio">
                        <p>{{ $user->bio }}</p>
                    </div>
                    @auth()
                        @if (Auth::user()->isNot($user))
                            <div class="foll-button">
                                @if (Auth::user()->follows($user))
                                    <form method="POST" action="{{ route('users.unfollow', $user->id) }}">
                                        @csrf
                                        <button type="submit" class="btn-unfoll"> Unfollow </button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('users.follow', $user->id) }}">
                                        @csrf
                                        <button type="submit" class="btn-follow"> Follow </button>
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

