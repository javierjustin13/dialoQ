@auth()
    @if (Auth::user()->isNot($user))
        <div>
            @if (Auth::user()->follows($user))
                <form method="POST" action="{{ route('users.unfollow', $user->id) }}">
                    @csrf
                    <button type="submit"
                        class="btn btn-light d-flex justify-content-center align-items-center"
                        style="font-size: 14px;  background-color: #050505;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16" style="color:white;">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path
                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4" />
                        </svg>
                        <div class="follow-text ms-1" style="color: white;" >Following</div>
                    </button>
                </form>
            @else
                <form method="POST" action="{{ route('users.follow', $user->id) }}">
                    @csrf
                    <button type="submit"
                        class="btn btn-dark d-flex align-items-center align-items-center"
                        style="font-size: 14px background-color: #039FFC;" style="color:white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16" style="color:white;">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path
                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4" />
                        </svg>
                        @if ($user->follows(Auth::user()))
                            <div class="follow-text ms-1">Follow back</div>
                        @else
                            <div class="follow-text ms-1">Follow</div>
                        @endif
                    </button>
                </form>
            @endif
        </div>
    @endif
@endauth
