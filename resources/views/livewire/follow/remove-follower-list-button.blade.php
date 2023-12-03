<div class="me-3">
    <div>
        @auth
            @if (Auth::user()->id != $user->id)
                @if ($user->follows(Auth::user()))
                    <button wire:click="toggleRemove" wire:loading.attr="disabled" type="submit"
                        class="btn followingbutton d-flex justify-content-center align-items-center" style="font-size: 14px;  width: 85px; height: 35px; background-color: #4D425F; color:#FCEAFC; display: flex; justify-content: center;">
                        <div wire:loading.remove class="follow-text" style="text-align: center">Remove</div>
                        <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
                    </button>
                @else
                    <button disabled
                        class="btn followbutton d-flex align-items-center align-items-center" style="font-size: 14px;  width: 85px; height: 35px; background-color: #FCEAFC; color:#4D425F; display: flex; justify-content: center;">
                        <div wire:loading.remove class="follow-text" style="text-align: center">Removed</div>
                    </button>
                @endif
            @endif
        @endauth
    </div>
</div>
