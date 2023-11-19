@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/widgets/search-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/edit.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="edit-profile">
        <div class="left-side">
            <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="top">
                    <div class="profile-picture">
                        <img class="profile-img p-4" src="{{ $user->getImageURL() }}" alt="profile picture">
                    </div>
                    <div class="data-req">
                        <div class="data">
                            <input name="username" class="input-box" type="text" id="editUsername" name="username"
                                placeholder={{ $user->username }}>
                            @error('username')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="data">
                            <input name="name" class="input-box" type="text" id="editName" name="name"
                                placeholder={{ $user->name }}>
                            @error('name')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="bottom p-4">
                    <div class="edit-pp">
                        <div class="your-input">Profile Picture :</div>
                        <input name="image" class="input-pp form-control" type="file" id="editPP"
                            placeholder="Choose a file!">
                    </div>
                    <div class="edit-bio">
                        <div class="your-input">BIO :</div>
                        <textarea class="input-bio p-3" type="text" id="editBIO" name="bio" placeholder="{{ $user->bio }}"></textarea>
                    </div>
                    <div class="button-save">
                        <button class="button">SAVE CHANGES</button>
                        <button class="button ms-3 bg-danger"> <a href="{{ route('users.show', $user->id) }}">CANCEL</a></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="right-content col-3">
            @include('widgets.search-bar')
            @include('widgets.suggested-bar')
        </div>
    </div>
@endsection
