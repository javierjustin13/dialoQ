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
                    <img class="profile-img p-4" src="{{ $user->getImageURL()}}" alt="profile picture">
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
                    <textarea class="input-bio p-3" type="text" id="editBIO" name="bio"
                        placeholder="Halo! Aku lahir bulan Januari"></textarea>
                </div>
                <div class="button-save">
                    <button class="button" type="submit">SAVE CHANGES</button>
                </div>
            </div>
        </div>

        <div class="right-side pl-5">
            <form action="">
                <div class="p-1 rounded rounded-pill shadow-sm mb-4 ml-1" id="searchbar">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="button-addon2" type="submit" class="btn btn-link text-warning">
                                <i class="bi bi-search" id="magnifying"></i>
                            </button>
                        </div>
                        <input type="search" placeholder="Search dialoQ" aria-describedby="button-addon2"
                            class="form-control border-0 rounded-pill">
                    </div>
                </div>
            </form>
            <div class="card mb-3" style="max-width: 18rem;background-color: #D9D9D9">
                <div class="card-body ">
                    <div class="card mb-2" style="background-color:white" id="suggestedtext">
                        <p>
                            SUGGESTED FOR YOU
                        </p>
                    </div>
                    <div class="suggestedpeople">
                        {{-- <img src="image/profile-image.jpeg" alt=""> --}}
                        <p>nama</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
