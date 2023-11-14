<div class="card border-light mb-3" id="card">
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
</div>
