@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/widgets/search-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/edit.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="edit-profile">
        <div class="left-side">
            <div class="top">
                <div class="profile-picture">
                    <img class="profile-img p-4" src="{{ $user->getImageURL() }}" alt="profile picture">
                </div>
                <div class="data-req">
                    <div class="data">
                        <input class="input-box" type="text" id="editUsername" name="username"
                            placeholder={{ $user->username }}>
                    </div>
                    <div class="data">
                        <input class="input-box" type="text" id="editEmail" name="email"
                            placeholder={{ $user->email }}>
                    </div>
                    <div class="data">
                        <input class="input-box" type="text" id="editName" name="name"
                            placeholder={{ $user->name }}>
                    </div>
                </div>
            </div>
            <div class="bottom p-4">
                <div class="edit-pp">
                    <div class="your-input">Profile Picture :</div>
                    <form class="upload-pp" action="">
                        <input class="input-pp" type="file" id="editPP" name="profile-picture"
                            placeholder="Choose a file!">
                    </form>
                </div>
                <div class="edit-bio">
                    <div class="your-input">BIO :</div>
                    <textarea class="input-bio p-3" type="text" id="editBIO" name="bio" placeholder="{{ $user->bio }}"></textarea>
                </div>
                <div class="button-save">
                    <button class="button" type="submit">SAVE CHANGES</button>
                </div>
            </div>
        </div>

        <div class="right-content col-3">
            @include('widgets.search-bar')
            @include('widgets.suggested-bar')
        </div>
    </div>
@endsection
