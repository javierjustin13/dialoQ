<div class="stats">
    <div class="details-stats">
        <span class="stats-style">Dialogs</span>
        <span class="stats-style">{{ $user->dialogues->count() }}</span>
    </div>

    <a href="" data-toggle="modal" data-target="#ModalFollowers" class="details-stats">
        <span class="stats-style">Followers</span>
        <span class="stats-style">{{ $user->followers->count() }}</span>
    </a>

    <a href="" data-toggle="modal" data-target="#ModalFollowings" class="details-stats">
        <span class="stats-style">Followings</span>
        <span class="stats-style">{{ $user->followings->count() }}</span>
    </a>

</div>

{{-- Modal Alert --}}

{{-- Modal Followers --}}
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

{{-- Modal Following --}}
<div class="modal fade" id="ModalFollowings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                <input type="text" id="followingSearch" class="form-control mb-3" placeholder="Search by username">
                <div class="follower-container" style="max-height: 200px; overflow-y: auto;">
                    @foreach ($user->followings as $following)
                    <div class="percontent">
                        <a href="{{ route('users.show', $following->id) }}" style="margin: 2%;">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img src="{{ $following->getImageURL() }}" class="d-block ui-w-40 rounded-circle"
                                    style="width: 15%; height: 17%" alt="">
                                <p class="ml-3">{{ $following->username }}</p>
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

{{-- Script Followers --}}
<script>
    $(document).ready(function () {
        var maxInitialDisplay = 10; // Set the maximum number of items to display initially
        var maxDisplay = 10; // Set the maximum number of items to display when the input is empty

        $('.percontent').hide();

        $('.percontent:lt(' + maxInitialDisplay + ')').show();

        $('#followerSearch').on('input', function () {
            var searchQuery = $(this).val().toLowerCase();

            if (searchQuery === '') {
                $('.percontent:lt(' + maxDisplay + ')').show();
                $('.percontent:gt(' + (maxDisplay - 1) + ')').hide();
            } else {
                $('.percontent').hide();

                $('.percontent').filter(function () {
                    return $(this).text().toLowerCase().indexOf(searchQuery) > -1;
                }).show();
            }
        });
    });
</script>

{{-- Script Following --}}
<script>
    $(document).ready(function () {
        var maxInitialDisplay = 10; // Set the maximum number of items to display initially
        var maxDisplay = 10; // Set the maximum number of items to display when the input is empty

        $('.percontent').hide();

        $('.percontent:lt(' + maxInitialDisplay + ')').show();

        $('#followingSearch').on('input', function () {
            var searchQuery = $(this).val().toLowerCase();

            if (searchQuery === '') {
                $('.percontent:lt(' + maxDisplay + ')').show();
                $('.percontent:gt(' + (maxDisplay - 1) + ')').hide();
            } else {
                $('.percontent').hide();

                $('.percontent').filter(function () {
                    return $(this).text().toLowerCase().indexOf(searchQuery) > -1;
                }).show();
            }
        });
    });
</script>