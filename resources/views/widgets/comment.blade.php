@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/comment.css') }}">
@endpush



@forelse ($dialog->comments as $comment)
    {{-- Modal --}}

    @include('modals.modal-delete-comment')

    {{-- End Modal --}}

    <div class="card-header mb-3 comment-item ">
        <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $comment->user->getImageURL() }}"
                class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3"> <a
                    href="{{ route('users.show', $comment->user->id) }}">{{ $comment->user->username }}</a>
            </div>
            @auth()
                @can('delete', $comment)
                    <button class="ms-1 btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#CommentModal{{ $comment->id }}"> X </button>
                @endcan
            @endauth
        </div>
        <div class="commentfooter">
            <p class=" ms-5 pl-2" id="textcomment">{{ $comment->content }}</p>
            <div class="time-box" id="timing">
                <i class="bi bi-clock" style="color: #050505"></i>
                <span class="time-text" style="color: #050505">
                    {{ $comment->created_at->diffForHumans() }}
                </span>
            </div>
        </div>
    </div>
    <hr style="color: #545454">
@empty
    <p class="text-center mt-4" style="color:#050505 ">No Comments Found.</p>
@endforelse
