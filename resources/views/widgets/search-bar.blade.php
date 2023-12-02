@push('head')
<link rel="stylesheet" href="{{ asset('css/widgets/search-bar.css') }}">
@endpush

<form action="" id="search">
    <div class="p-1 border rounded rounded-pill shadow-sm mb-4 ml-1" id="searchbar">
        <div class="input-group">
            <div class="input-group-prepend">
                <button id="button-addon2" type="submit" class="btn btn-link text-warning">
                    <i class="bi bi-search" id="magnifying" style="color: #FCEAFC"></i>
                </button>
            </div>
            {{-- <input type="search" placeholder="Search dialoQ" aria-describedby="button-addon2"
                class="form-control border-0 rounded-pill"> --}}
            <div class="dropdown m-0">
                <input type="search" placeholder="Search people" id="myInput" onkeyup="filterFunction()"
                    class="form-control border-0 rounded-pill" aria-describedby="button-addon2" autocomplete="off">
                <div id="myDropdown" class="dropdown-content" style="background-color: #342A45;border-top:0px">
                    @foreach ($users as $user)
                    <div class="percontent">
                        <a href="{{ route('users.show', $user->id) }}">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt="">
                                <p class="ml-2" style="color: #FCEAFC">{{ $user->username }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('js/search-bar.js') }}"></script>

