@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush

<div class="p-3 border rounded-4" id="midpane">
    @forelse ($dialogues as $dialog)
        <div class="p-3 border rounded-4 mb-3" id="postcard">
            <div class="card-header">
                <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                        class="d-block ui-w-40 rounded-circle" alt="">
                    <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                            data-abc="true">{{ $dialog->user->username }}</a>
                    </div>
                    <div class="text-muted small ml-3">
                        <a href="{{ route('dialogues.show', $dialog->id) }}">View</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-3">
                <h4>{{ $dialog->title }}</h4>
                <p>{{ $dialog->content }}</p>
            </div>
            <hr>
            <div class="card-footer align-items-center px-0 pt-0 pb-3">
                <div class="d-flex justify-content-between">
                    <div class="text-muted">
                        <span>
                            <i class="bi bi-heart"></i>
                            <span>{{ $dialog->likes }}</span>
                        </span>
                        <span class="ms-3">
                            <i class="bi bi-chat-dots"></i>
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
            </div>
        </div>
    @empty
        <h1>There is no discussion.</h1>
    @endforelse

</div>
