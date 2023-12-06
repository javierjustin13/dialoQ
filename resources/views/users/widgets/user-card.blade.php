<div class="upper">
    <div class="left-content">

        <div class="card-profile border">
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
                                    <button type="submit" class="edit-button">Edit profile</button>
                                </a>
                            @endif
                        @endauth
                        @include('users.widgets.user-follow-button')
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

                </div>
            </div>
        </div>
    </div>
</div>
