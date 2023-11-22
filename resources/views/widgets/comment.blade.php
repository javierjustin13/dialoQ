@forelse ($dialog->comments as $comment)
    <div class="card-header">
        <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $comment->user->getImageURL() }}"
                class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3"> <a href="">{{ $comment->user->username }}</a>
            </div>
            <div class="text-muted small ml-3" id="timing">
                <i class="bi bi-clock me-1"></i>
                <span>
                    @php
                        $diff = date_diff(new DateTime($comment->created_at), new DateTime());
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
            </div>
        </div>
        <p class=" mt-2 ml-5 pl-2" id="textcomment">{{ $comment->content }}</p>
    </div>
@empty
    <p class="text-center mt-4">No Comments Found.</p>
@endforelse
