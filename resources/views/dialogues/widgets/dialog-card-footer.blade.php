<div class="card-footer align-items-center px-0 pt-0 pb-3">
    <div class="d-flex justify-content-between">
        <div class="text-muted d-flex">
            <livewire:shared.like-button :key="$dialog->id" :dialog="$dialog" />
            <span class="ms-3">
                @auth
                    <a class="bi bi-chat-dots" href="{{ route('dialogues.show', $dialog->id) }}"></a>
                @endauth
                @guest
                    <a class="bi bi-chat-dots" href="{{ route('login') }}"></a>
                @endguest
                <span>{{ $dialog->comments->count() }}</span>
            </span>
        </div>
        <span>
            <i class="bi bi-clock me-1" style="color: #050505"></i>
            <span>
                {{ $dialog->created_at->diffForHumans() }}
            </span>
        </span>
    </div>
</div>

{{-- if(auth()->guest())
{
    return $this->redirect(route('login', true));
} --}}
