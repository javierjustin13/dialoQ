@push('head')
    <link rel="stylesheet" href="{{ asset('css/dialogues/show.css') }}">
@endpush


<div class="p-3 border rounded-4" id="midpane">
    <div class="p-3 border rounded-4 mb-3" id="postcard">
        <div class="card-header">
            <div class="media w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                    class="d-block ui-w-40 rounded-circle" alt="">
                <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                        data-abc="true">{{ $dialog->user->username }}</a>
                </div>
                <div class="text-muted small ml-3 d-flex align-items-center">
                @auth()
                    @can('update', $dialog)
                        <a class="mx-2" href="{{ route('dialogues.edit', $dialog->id) }}"> Edit </a>
                        <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                            @csrf
                            @method('delete')
                            <button class="ms-1 btn btn-danger btn-sm"> X </button>
                        </form>
                    @endcan
                @endauth
            </div>
            </div>
        </div>
        <div class="card-body pt-3">
            <h4>{{ $dialog->title }}</h4>
            <p>{{ $dialog->content }}</p>
        </div>
        <br>
        <div class="card-footer align-items-center px-0 pt-0 pb-3">
            <div class="d-flex justify-content-between">
                <div class="text-muted d-flex">
                    @include('widgets.like-button')
                    <span class="ms-3">
                        <a class="bi bi-chat-dots" href="{{ route('dialogues.show', $dialog->id) }}"></a>
                        <span>{{ $dialog->comments->count() }}</span>
                    </span>
                </div>
                <span class="text-muted">
                    <i class="bi bi-clock me-1"></i>
                    <span>
                        @php
                            $diff = date_diff(new DateTime($dialog->created_at), new DateTime());
                        @endphp
                        @if ($diff->format('%s') <= 5 && $diff->format('%i') == 0 && $diff->format('%h') == 0 && $diff->format('%d') == 0)
                            Just now
                        @elseif ($diff->format('%d') == 0 && $diff->format('%h') == 0 && $diff->format('%i') == 0)
                            {{ $diff->format('%s second(s) ago') }}
                        @elseif ($diff->format('%d') == 0 && $diff->format('%h') == 0)
                            {{ $diff->format('%i minute(s) ago') }}
                        @elseif ($diff->format('%d') == 0)
                            {{ $diff->format('%h hour(s) ago') }}
                        @elseif ($diff->format('%d') > 0)
                            {{ $diff->format('%d day(s) ago') }}
                        @elseif ($diff->format('%d') > 30)
                            {{ $diff->format('%m month(s) ago') }}
                        @elseif ($diff->format('%d') > 365)
                            {{ $diff->format('%y year(s) ago') }}
                        @endif
                    </span>
                </span>
            </div>
            <br>
            @include('widgets.comment-form')
            <hr>
            @include('widgets.comment')
            
        </div>
    </div>


</div>
