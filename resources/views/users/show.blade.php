@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/show.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="container">

        <div class="upper">
            <div class="left-content">

                <div class="card-profile p-3">
                    <div class="pp-identity d-flex align-items-center">
                        <div class="profile-picture flex-wrap align-items-center">
                            <img src="{{ $user->getImageURL() }}"
                            class="d-block ui-w-40 rounded-circle" alt="">
                        </div>

                        <div class="identity ">
                            <div class="username-edit">
                                <h3 class="username">{{ $user->username }}</h3>
                                <a href="#">
                                    <button type="submit">Edit profile</button>
                                </a>
                            </div>

                            <span class="email">{{ $user->email }} </span>

                            <div class="details d-flex justify-content-between rounded text-BLACK stats">
                                <div class="d-flex flex-column align-items-center">
                                    <span class="articles">Dialogs</span>
                                    <span class="number1">38</span>
                                </div>

                                <div class="d-flex flex-column align-items-center">
                                    <span class="followers">Followers</span>
                                    <span class="number2">980</span>
                                </div>

                                <div class="d-flex flex-column align-items-center">
                                    <span class="rating">Following</span>
                                    <span class="number3">300</span>
                                </div>
                            </div>

                            <div class="button d-flex flex-row align-items-center">
                                <span class="name">{{ $user->name }} </span>
                            </div>

                            <div class="bio">
                                <p class="">
                                    halo nama saya {{ $user->name }} :){{-- {{ $user->bio }} --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="mt-3">
                @include('widgets.dialog-card')
                {{ $dialogues->links() }}
            </div> --}}


            <div class="right-content col-3">
                @include('widgets.search-bar')
                @include('widgets.suggested-bar')
            </div>
        </div>



        <div class="dialogs">
            <div class="col">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 0)
                        <div class="p-3 border rounded-4 mb-3" id="postcard">
                            <div class="card-header">
                                <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                                        class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body ml-3"> <a href="{{ route('users.show', $user->id)}}" data-abc="true">{{ $user->username }}</a>
                                    </div>
                                    <div class="text-muted small ml-3">
                                        <a href="">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <h4>{{ $dialog->title }}</h4>
                                <p>{{ $dialog->title }}</p>
                            </div>
                            <div class="card-footer align-items-center px-0 pt-0 pb-3">
                                <div class="pt-3 d-flex justify-content-between">
                                    <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                        <i class="bi bi-heart mr-1"></i>
                                        <span class="align-middle">8 likes</span>
                                    </span>
                                    <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                        <i class="bi bi-clock mr-1"></i>
                                        <span class="align-middle">
                                            8 hours ago
                                            {{-- @php
                                                $diff = date_diff(new DateTime($dialog->created_at), new DateTime());
                                            @endphp
                                            {{ $diff->format('%d days, %h hours ago') }} --}}
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="comments pt-3">
                                <h5>No Comments Found.</h5>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="col">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 1)
                        <div class="p-3 border rounded-4 mb-3" id="postcard">
                            <div class="card-header">
                                <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                                        class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body ml-3"> <a href="{{ route('users.show', $user->id)}}" data-abc="true">{{ $user->username }}</a>
                                    </div>
                                    <div class="text-muted small ml-3">
                                        <a href="">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <h4>{{ $dialog->title }}</h4>
                                <p>{{ $dialog->title }}</p>
                            </div>
                            <div class="card-footer align-items-center px-0 pt-0 pb-3">
                                <div class="pt-3 d-flex justify-content-between">
                                    <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                        <i class="bi bi-heart mr-1"></i>
                                        <span class="align-middle">8 likes</span>
                                    </span>
                                    <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                                        <i class="bi bi-clock mr-1"></i>
                                        <span class="align-middle">
                                            8 hours ago
                                            {{-- @php
                                                $diff = date_diff(new DateTime($dialog->created_at), new DateTime());
                                            @endphp
                                            {{ $diff->format('%d days, %h hours ago') }} --}}
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="comments pt-3">
                                <h5>No Comments Found.</h5>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

    </div>

@endsection
