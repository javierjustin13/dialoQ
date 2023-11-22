@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
@endpush

<div class="card mb-3" style="max-width: 18rem;background-color: #D9D9D9">
    <div class="card-body ">
        <div class="card mb-3" style="background-color:white" id="suggestedtext">
            <p>
                SUGGESTED FOR YOU
            </p>
        </div>
        <div class="suggestedpeople pb-3">
            <div class="suggestedname">
                <img src="../image/profile-image.jpeg" alt="">
                <p class="pl-2">Javier Justin</p>
            </div>
            <img src="../image/add-user.png" alt="">
        </div>
        <div class="suggestedpeople">
            <div class="suggestedname">
                <img src="../image/profile-image.jpeg" alt="">
                <p class="pl-2">Kezia revalina</p>
            </div>
            <img src="../image/add-user.png" alt="">
        </div>

    </div>
</div>
