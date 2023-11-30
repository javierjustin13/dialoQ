<div>
    @auth()
        @if (Auth::user()->hasLiked($dialog))
            <button wire:click="toggleLike()" type="submit"><i class="bi bi-heart-fill"></i></button>
            <span>{{ $count }}</span>
        @else
            <button wire:click="toggleLike()" type="submit"><i class="bi bi-heart"></i></button>
            <span>{{ $count }}</span>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}"><i class="bi bi-heart"></i></a>
        <span>{{ $count }}</span>
    @endguest
</div>
