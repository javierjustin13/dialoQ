@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/suggested-card.css') }}">
@endpush

<div class="card mb-3" style="max-width: 18rem;background-color: #D9D9D9">
    <div class="card-body ">
        <div class="card mb-2" style="background-color:white" id="suggestedtext">
            <p>
                SUGGESTED FOR YOU
            </p>
        </div>
        <div class="suggestedpeople">
            {{-- <img src="image/profile-image.jpeg" alt=""> --}}
            <p>nama</p>
        </div>

    </div>
</div>
