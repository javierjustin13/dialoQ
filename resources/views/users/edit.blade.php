@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/edit.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('title', 'Edit Profile')

@section('content')
    <div class="edit-profile">
        <div class="edit-box">
            <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="top">
                    <div class="profile-picture">
                        <img class="profile-img" style="border-radius: 50%;"
                            src="{{ $user->getImageURL() }}" alt="profile picture">
                    </div>
                    <div class="data-req">
                        <div class="data">
                            <input name="username" class="input-box border" type="text" id="editUsername" name="username" value="{{ $user->username }}"style="color: #67696D">
                            @error('username')
                                <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="data">
                            <input name="name" class="input-box border" type="text" id="editName" name="name"
                                value={{ $user->name }} style="color: #67696D">
                            @error('name')
                                <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    {{-- <div class="edit-pp">
                        <div class="your-input">Profile Picture :</div>
                        <input name="image" class="input-pp form-control border" type="file" accept="image/*" id="editPP">
                    </div> --}}
                    <div class="wrap-input">
                        <div class="your-input">Profile Picture :</div>
                        <input type="file" id="editPP" name="image" class="input-pp border" accept=".png, .jpg, .jpeg">
                    </div>
                    @error('image')
                        <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
                    @enderror
                    <div class="edit-bio">
                        <div class="your-input">BIO :</div>
                        <textarea class="input-bio border" type="text" id="editBIO" name="bio" style="color: #67696D; font-size: 15px;">{{ $user->bio }}</textarea>
                    </div>
                    <div class="button-save">
                        <button class="button" type="submit">SAVE CHANGES</button>
                        <button class="button ms-3 bg-danger" type="button" onclick="window.history.back()">CANCEL</button>
                    </div>
                </div>
            </form>
            <div class="delete-box">
                <div>
                    @can('delete', $user)
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#UserModal{{ $user->id }}">
                            DELETE ACCOUNT
                        </button>
                        @include('modals.modal-delete-user')
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
