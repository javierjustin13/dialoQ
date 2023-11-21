@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/users/show.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

@section('content')
    <div class="container">

        @include('users.widgets.user-card')

        <div class="dialogs">
            <div class="col">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 0)
                        <div class="p-3 border rounded-4 mb-3" id="postcard">
                            <div class="card-header">
                                <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                                        class="d-block ui-w-40 rounded-circle" style="border-radius: 50%; height:35px; width:35px" alt="">
                                    <div class="media-body ml-3"> <a href="{{ route('users.show', $user->id) }}"
                                            data-abc="true">{{ $user->username }}</a>
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

            <div class="col" id="coloumn">
                @foreach ($dialogues as $dialog)
                    @if ($loop->index % 2 == 1)
                        <div class="p-3 border rounded-4 mb-3" id="postcard">
                            <div class="card-header">
                                <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $user->getImageURL() }}"
                                        class="d-block ui-w-40 rounded-circle" style="border-radius: 50%; height:35px; width:35px" alt="">
                                    <div class="media-body ml-3"> <a href="{{ route('users.show', $user->id) }}"
                                            data-abc="true">{{ $user->username }}</a>
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
