@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/show.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="container">

        <div class="upper">
            <div class="left-content">

                <div class="card p-3">
                    <div class="box d-flex align-items-center">
                        <div class="profile-picture flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                                class="d-block ui-w-40 rounded-circle" alt="">
                        </div>
                        <div class="identity ml-3 w-10">
                            <div class="username-edit">
                                <h3 class="username">{{ $user->username }}</h3>
                                <a href="#">
                                    <button type="submit">Edit profile</button>
                                </a>
                            </div>

                            <span class="email">{{ $user->email }} </span>

                            <div class="p-2 mt-2 d-flex justify-content-between rounded text-BLACK stats">
                                <div class="d-flex flex-column">
                                    <span class="articles">Dialogs</span>
                                    <span class="number1">38</span>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="followers">Followers</span>
                                    <span class="number2">980</span>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="rating">Following</span>
                                    <span class="number3">300</span>
                                </div>
                            </div>

                            <div class="button mt-2 d-flex flex-row align-items-center">
                                <span class="name">{{ $user->name }} </span>
                            </div>

                            <div class="px-2 mt-2">
                                <p class="fs-6 fw-light">
                                    {{ $user->bio }}
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
            <div class="p-3 border rounded-4 mb-3" id="postcard">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                            class="d-block ui-w-40 rounded-circle" alt="">
                        <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">{{ $user->username }}</a>
                        </div>
                        <div class="text-muted small ml-3">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <h4>title</h4>
                    <p>content</p>
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

            <div class="p-3 border rounded-4 mb-3" id="postcard">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                            class="d-block ui-w-40 rounded-circle" alt="">
                        <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">{{ $user->username }}</a>
                        </div>
                        <div class="text-muted small ml-3">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <h4>title</h4>
                    <p>content</p>
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

        </div>

    </div>

@endsection
