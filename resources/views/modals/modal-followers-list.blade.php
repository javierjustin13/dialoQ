<div class="modal fade" id="ModalFollowers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Followers</h5>
                <a wire:loading.remove wire:navigate wire:loading.attr="disabled" href="{{ route('users.show', $user->id) }}"
                    class="bi bi-x-lg"></a>
                <div wire:loading class="spinner-grow spinner-grow-sm" role="status"></div>
            </div>
            <div class="modal-body">
                <input type="text" id="followerSearch" class="form-control mb-3" placeholder="Search by username">
                <div class="follower-container" style="max-height: 200px; overflow-y: auto;">
                    @foreach ($user->followers as $follower)
                        <div wire:key="{{ $follower->id }}" class="percontent">
                            <a href="{{ route('users.show', $follower->id) }}" style="margin: 2%;">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $follower->getImageURL() }}" class="d-block ui-w-40 rounded-circle"
                                        style="width: 15%; height: 17%" alt="">
                                    <p class="ml-3" style="color: #050505" >{{ $follower->username }}</p>
                                </div>
                            </a>
                            @auth
                                @if (Auth::user()->id == $user->id)
                                    <livewire:follow.remove-follower-list-button :user="$follower" :key="$follower->id" />
                                @else
                                    <livewire:follow.follow-list-button :user="$follower" :key="$follower->id" />
                                @endif
                            @endauth
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

