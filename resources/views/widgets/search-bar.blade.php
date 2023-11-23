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

<form action="" id="search">
    <div class="p-1 rounded rounded-pill shadow-sm mb-4 ml-1" id="searchbar">
        <div class="input-group">
            <div class="input-group-prepend">
                <button id="button-addon2" type="submit" class="btn btn-link text-warning">
                    <i class="bi bi-search" id="magnifying"></i>
                </button>
            </div>
            {{-- <input type="search" placeholder="Search dialoQ" aria-describedby="button-addon2"
                class="form-control border-0 rounded-pill"> --}}
            <div class="dropdown m-0">
                <input type="search" placeholder="Search people" id="myInput" onkeyup="filterFunction()"
                    class="form-control border-0 rounded-pill" aria-describedby="button-addon2" autocomplete="off">
                <div id="myDropdown" class="dropdown-content">
                    @foreach ($users as $user)
                    <div class="percontent">
                        <a href="{{ route('users.show', $user->id) }}">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img src="{{ $user->getImageURL() }}" class="d-block ui-w-40 rounded-circle" alt="">
                                <p class="ml-2">{{ $user->username }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
      event.preventDefault();
    }

    function filterFunction() {
      var input, filter, div, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }

      // Show/hide the dropdown based on whether there is text input
      div.style.display = filter.length > 0 ? "block" : "none";
    }

    window.onclick = function(event) {
      if (!event.target.matches('.form-control')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
            openDropdown.style.display = 'none';
        }
      }
    }

    document.getElementById("myInput").addEventListener("input", filterFunction);
</script>