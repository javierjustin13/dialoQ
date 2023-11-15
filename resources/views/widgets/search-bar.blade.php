@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/search-bar.css') }}"> {{-- ini buat nyambungin home.css ke home blade
nya --}}
@endpush

{{-- <div class="card border-light mb-3" id="card">
    <div class="card-header pb-0 rounded-3">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action="/action_page.php" method="GET">
            <input value="{{ request('search','') }}" name="search" placeholder="Search dialoQ"
                class="form-control w-100" type="text">
            <button class="btn btn-dark mt-2"> Search</button>
        </form>
    </div>
</div> --}}

<form action="">
    <div class="p-1 rounded rounded-pill shadow-sm mb-4 ml-1" id="searchbar">
        <div class="input-group">
            <div class="input-group-prepend">
                <button id="button-addon2" type="submit" class="btn btn-link text-warning">
                    <i class="bi bi-search" id="magnifying"></i>
                </button>
            </div>
            <input type="search" placeholder="Search dialoQ" aria-describedby="button-addon2"
                class="form-control border-0 rounded-pill">
        </div>
    </div>
</form>
