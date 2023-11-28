@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush

<div class="p-3 border rounded-4 mb-3" id="postcard">
    <div class="card-header">
        <div class="media w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                class="d-block ui-w-40 rounded-circle" alt="Profile Picture">
            <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                    data-abc="true">{{ $dialog->user->username }}</a>
            </div>
                @include('widgets.follow-button')
            <div class="text-muted small ml-3 d-flex align-items-center">
                <a href="{{ route('dialogues.show', $dialog->id) }}">View</a>
                @auth()
                    @can('update', $dialog)
                        <a class="mx-2" href="{{ route('dialogues.edit', $dialog->id) }}"> Edit </a>
                        <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                            @csrf
                            @method('delete')
                            @can('delete', $dialog)
                                <button class="ms-1 btn btn-danger btn-sm"> X </button>
                            @endcan
                        </form>
                    @endcan
                @endauth
            </div>
        </div>
    </div>
    <div class="card-body pt-3">
        <h4>{{ $dialog->title }}</h4>
        @php
            $content = $dialog->content;
            $contentLength = Str::length($content);
        @endphp
        @if ($contentLength > 80)
            @php
                $content1 = Str::substr($content, 0, 80);
                $content2 = Str::substr($content, 80, $contentLength);
            @endphp
            <p>{{ $content1 }}<span class="dots">...</span>
            <span class="more">{{ $content2 }}</span></p>
            <button onclick="readMore(this)" class="read-more-button">Read more</button>
        @else
            <p>{{ $dialog->content }}</p>
        @endif
    </div>

    <hr>
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
                    {{ $dialog->created_at->diffForHumans() }}
                </span>
            </span>
        </div>
    </div>
</div>
