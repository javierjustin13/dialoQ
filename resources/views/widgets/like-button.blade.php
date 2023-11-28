<span>
    @auth()
        @if (Auth::user()->hasLiked($dialog))
            <form action="{{ route('dialogues.unlike', $dialog->id) }}" method="POST">
                @csrf
                <button type="submit"><i class="bi bi-heart-fill"></i></button>
                <span>{{ $dialog->likes_count }}</span>
            </form>
        @else
            <form action="{{ route('dialogues.like', $dialog->id) }}" method="POST">
                @csrf
                <button type="submit"><i class="bi bi-heart"></i></button>
                <span>{{ $dialog->likes_count }}</span>
            </form>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}"><i class="bi bi-heart"></i></a>
            <span>{{ $dialog->likes_count }}</span>
    @endguest
</span>
