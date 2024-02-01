<div class="me-3">
    <div>
        @auth
            @if (Auth::user()->id != $user->id)
                @if (Auth::user()->follows($user))
                    <button wire:click="toggleFollow()" wire:loading.attr="disabled" type="submit"
                        class="btn followingbutton d-flex justify-content-center align-items-center"
                        style="font-size: 10px; width: 70px; height: 25px; background-color: #050505; color: white; display: flex; justify-content: center;">
                        <div wire:loading.remove class="follow-text" style="text-align: center">Following</div>
                        <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" role="status"></div>
                    </button>
                @else
                    <button wire:click="toggleFollow()" wire:loading.attr="disabled" type="submit"
                        class="btn followbutton d-flex align-items-center align-items-center" style="font-size: 10px;  width: 70px; height: 25px; background-color: #039FFC; color:#FFFFF; display: flex; justify-content: center;">
                        <div wire:loading.remove class="follow-text" style="text-align: center;color: white">Follow</div>
                        <div wire:loading.delay class="spinner-grow spinner-grow-sm text-white" style="background-color: white" role="status"></div>
                    </button>
                @endif
            @endif
        @endauth
    </div>
</div>
