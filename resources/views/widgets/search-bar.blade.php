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
            <div class="dropdown">
                <input type="search" placeholder="Search dialoQ" id="myInput" onkeyup="filterFunction()"
                    class="form-control ml-3 border-0 rounded-pill" aria-describedby="button-addon2">
                <div id="myDropdown" class="dropdown-content">
                    <div class="percontent">
                        <a href="">
                            <div class="media flex-wrap w-100 align-items-center">
                                <img src="../image/profile-image.jpeg" class="d-block ui-w-40 rounded-circle" alt="">
                                <p class="ml-2">About</p>
                            </div>
                        </a>
                    </div>
                    <div class="percontent">
                      <a href="">
                          <div class="media flex-wrap w-100 align-items-center">
                              <img src="../image/profile-image.jpeg" class="d-block ui-w-40 rounded-circle" alt="">
                              <p class="ml-2">Base</p>
                          </div>
                      </a>
                  </div>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Contact</a>
                    <a href="#custom">Custom</a>
                    <a href="#support">Support</a>
                    <a href="#tools">Tools</a>
                    <a href="#support">Delvin</a>
                    <a href="#tools">kezia</a>
                    <a href="#support">Justin</a>
                    <a href="#tools">Ferren</a>
                    <a href="#tools">gladys</a>
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
      var input, filter, ul, li, a, i;
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
    }

    // make the dropdown menu disappear when the input is clicked outside
    window.onclick = function(event) {
      if (!event.target.matches('.form-control')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
            openDropdown.classList.remove('show');
        }
      }
    }

    document.getElementById("myInput").addEventListener("input", myFunction);

    // make the dropdown menu appear when the input is have value

        





    
</script>