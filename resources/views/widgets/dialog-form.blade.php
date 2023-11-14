@push('head')
<link rel="stylesheet" href="{{ asset('css/widgets/dialog-form.css') }}"> {{--ini buat nyambungin home.css ke home blade nya --}}
@endpush

<div class="p-3 rounded-3">
    <h4>Share your dialog...</h4>
    <input class="form-control" type="text" placeholder="Your Concern">
    <p></p>
    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell use more :D"></textarea>
    </div>
    <button class="btn btn-dark mt-2">Send</button>
</div>
