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
