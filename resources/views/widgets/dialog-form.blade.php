@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-form.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

<div class="p-3 rounded-3">
    <h4>Share your dialog...</h4>
    <form action="{{ route('dialogues.store') }}" method="POST">
        @csrf
        <input class="form-control" name = "title" type="text" placeholder="Dialog Title">
        @error('title')
            <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
        @enderror
        <div class="form-group pt-2">
            <textarea class="form-control" name = "content" id="exampleFormControlTextarea1" rows="3"
                placeholder="Dialog Content"></textarea>
            @error('content')
                <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-dark my-2" type="submit">Share</button>
    </form>
</div>
