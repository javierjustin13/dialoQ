<div class="details d-flex justify-content-between rounded text-BLACK stats">
    <div class="d-flex flex-column align-items-center">
        <span class="articles">Dialogs</span>
        <span class="number1">{{ $user->dialogues->count() }}</span>
    </div>

    <div class="d-flex flex-column align-items-center">
        <span class="followers">Followers</span>
        <span class="number2">{{ $user->followers->count() }}</span>
    </div>

    <div class="d-flex flex-column align-items-center">
        <span class="rating">Following</span>
        <span class="number3">{{ $user->followings->count() }}</span>
    </div>
</div>
