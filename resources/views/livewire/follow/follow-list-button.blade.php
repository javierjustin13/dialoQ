<div class="me-3">
    <div>
        @if (Auth::user()->id != $user->id)
            @if (Auth::user()->follows($user))
                <button wire:click="toggleFollow()" wire:loading.attr="disabled" type="submit"
                    class="btn followingbutton d-flex justify-content-center align-items-center" style="font-size: 14px">
                    <div wire:loading.remove class="follow-text" style="text-align: center">Following</div>
                    <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
                </button>
            @else
                <button wire:click="toggleFollow()" wire:loading.attr="disabled" type="submit"
                    class="btn followbutton d-flex align-items-center align-items-center" style="font-size: 14px">
                    <div wire:loading.remove class="follow-text" style="text-align: center">Follow</div>
                    <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
                </button>
            @endif
        @endif
    </div>
</div>
