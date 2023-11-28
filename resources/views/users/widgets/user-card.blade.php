<div class="upper">
    <div class="left-content">

        <div class="card-profile">
            <div class="upper-profile">
                <div class="profile-picture">
                    <img class="pp-image" src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle"
                        alt="">
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

                    <div class="bio mb-3">
                        <p>{{ $user->bio }}</p>
                    </div>
                    @include('users.widgets.user-follow-button')
                </div>
            </div>
        </div>
    </div>

    <div class="right-content col-3">
        @include('widgets.search-bar')
        @include('widgets.suggested-bar')
    </div>
</div>
