<div>
    @auth()
        @if (Auth::user()->hasLiked($dialog))
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart-fill" style="color: #67696D;"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm text" style="color: #67696D" role="status"></div>
            <span style="color: #67696D;">{{ $count }}</span>
        @else
            <button wire:loading.attr="disabled" wire:click="toggleLike()" type="submit">
                <i wire:loading.delay.remove class="bi bi-heart" style="color: #67696D;"></i>
            </button>
            <div wire:loading.delay class="spinner-grow spinner-grow-sm" style="color: #67696D" role="status"></div>
            <span style="color: #050505">{{ $count }}</span>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}"><i class="bi bi-heart"></i></a>
        <span style="color: #050505">{{ $count }}</span>
    @endguest
</div>
