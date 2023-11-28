<div class="modal fade" id="ModalFollowers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Followers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="followerSearch" class="form-control mb-3" placeholder="Search by username">
                <div class="follower-container" style="max-height: 200px; overflow-y: auto;">
                    @foreach ($user->followers as $follower)
                    <div class="percontent">
                        <a href="{{ route('users.show', $follower->id) }}" style="margin: 2%;">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img src="{{ $follower->getImageURL() }}" class="d-block ui-w-40 rounded-circle"
                                    style="width: 15%; height: 17%" alt="">
                                <p class="ml-3">{{ $follower->username }}</p>
                            </div>
                        </a>
                        <button type="button" class="btn btn-primary" style="margin: 4%;font-size: 80%">Remove</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
