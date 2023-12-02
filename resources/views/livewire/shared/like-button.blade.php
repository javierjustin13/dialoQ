<div>
    @auth()
        @if (Auth::user()->hasLiked($dialog))
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart-fill" style="color: #FCEAFC"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
            <span style="color: #FCEAFC">{{ $count }}</span>
        @else
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart" style="color: #FCEAFC"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
            <span style="color: #FCEAFC">{{ $count }}</span>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}"><i class="bi bi-heart"></i></a>
        <span style="color: #FCEAFC">{{ $count }}</span>
    @endguest
</div>
