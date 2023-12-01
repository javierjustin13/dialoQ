<div>
    @auth()
        @if (Auth::user()->hasLiked($dialog))
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart-fill"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm text-danger" role="status"></div>
            <span>{{ $count }}</span>
        @else
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm text-danger" role="status"></div>
            <span>{{ $count }}</span>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}"><i class="bi bi-heart"></i></a>
        <span>{{ $count }}</span>
    @endguest
</div>
