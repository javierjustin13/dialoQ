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

{{-- Modal Followers --}}
@include('modals.modal-followers-list')

{{-- Modal Following --}}
@include('modals.modal-following-list')

{{-- Script Followers --}}
<script src="{{ asset('js/followers-list.js') }}"></script>

{{-- Script Following --}}
<script src="{{ asset('js/following-list.js') }}"></script>
