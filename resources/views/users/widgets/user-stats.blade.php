<div class="stats">
    <div class="details-stats">
        <span class="stats-style">Dialogs</span>
        <span class="stats-style">{{ $user->dialogues->count() }}</span>
    </div>

    <div class="details-stats">
        <span class="stats-style">Followers</span>
        <span class="stats-style">{{ $user->followers->count() }}</span>
    </div>

    <div class="details-stats">
        <span class="stats-style">Following</span>
        <span class="stats-style">{{ $user->followings->count() }}</span>
    </div>
</div>


