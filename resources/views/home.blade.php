@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row gx-4">
        <div class="col-3 " id="leftpane">
            <div class="p-3 rounded-3">
                <h4>Share your dialog...</h4>
                <input class="form-control" type="text" placeholder="Your Concern">
                <p></p>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Tell use more :D"></textarea>
                </div>
            <button class="btn btn-dark mt-2">Send</button>
            </div>
        </div>
        <div class="col-6">
            <h2>LOGIN TO START YOUR DIALOG</h2>
            <div class="p-3 border rounded-4" id="midpane">
                <div class="p-3 border rounded-4" id="postcard">
                    Custom column padding
                </div>
            </div>
        </div>
        <div class="col-3">
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
        </div>
    </div>
</div>

@endsection