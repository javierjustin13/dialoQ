<div class="upper">
    <div class="left-content">

        <div class="card-profile p-3">
            <div class="pp-identity d-flex align-items-center">
                <div class="profile-picture flex-wrap align-items-center">
                    <img src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt="">
                </div>

                <div class="identity ">
                    <div class="username-edit">
                        <h3 class="username">{{ $user->username }}</h3>
                        <a href="#">
                            <button type="submit">Edit profile</button>
                        </a>
                    </div>

                    <span class="email">{{ $user->email }} </span>

                    @include('users.widgets.user-stats')

                    <div class="button d-flex flex-row align-items-center">
                        <span class="name">{{ $user->name }} </span>
                    </div>

                    <div class="bio">
                        <p>
                            {{ $user->bio }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-content col-3">
        @include('widgets.search-bar')
        @include('widgets.suggested-bar')
    </div>
</div>
