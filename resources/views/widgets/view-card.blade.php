@push('head')
    <link rel="stylesheet" href="{{ asset('css/dialogues/show.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}"> --}}
@endpush

    {{-- Modal --}}

    @include('modals.modal-delete-dialog')

    {{-- End Modal --}}


<div class="p-3 border rounded-4" id="midpane">
    <div class="p-3 border rounded-4 mb-3" id="postcard">
        <div class="card-header">
            <div class="media w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                    class="d-block ui-w-40 rounded-circle" alt="">
                <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                        data-abc="true">{{ $dialog->user->username }}</a>
                </div>
                @include('widgets.follow-button')
                <div class="text-muted small ml-3 d-flex align-items-center">
                    @auth()
                        @can('update', $dialog)
                            <a class="mx-2" href="{{ route('dialogues.edit', $dialog->id) }}"> Edit </a>
                            <button class="ms-1 btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DialogModal{{ $dialog->id }}"> X </button>
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
                    <livewire:shared.like-button :dialog="$dialog" :key="$dialog->id"/>
                    <span class="ms-3">
                        <a class="bi bi-chat-dots" href="{{ route('dialogues.show', $dialog->id) }}"></a>
                        <span class="count-comment">{{ $dialog->comments->count() }}</span>
                    </span>
                </div>
                <span class="text-muted">
                    <i class="bi bi-clock me-1" style="color:#050505"></i>
                    <span class="duration">
                        {{ $dialog->created_at->diffForHumans() }}
                    </span>
                </span>
            </div>
            <br>
            @include('widgets.comment-form')
            <hr style="color: #FCEAFC;border-width:2px">
            @include('widgets.comment')

        </div>
    </div>


</div>
