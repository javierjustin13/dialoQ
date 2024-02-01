@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-form.css') }}"> {{-- ini buat nyambungin home.css ke home blade nya --}}
@endpush

<div class="p-3 border rounded-3" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
    <h4>Share your dialog...</h4>
    <form>
        <input wire:model="title" class="form-control" name = "title" type="text" placeholder="Dialog Title">
        @error('title')
            <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
        @enderror
        <div class="form-group pt-2">
            <textarea wire:model="content" class="form-control" name = "content" id="exampleFormControlTextarea1" rows="3"
                placeholder="Dialog Content"></textarea>
            @error('content')
                <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
            @enderror
        </div>
        @auth
            <button wire.loading.attr="disabled " wire:click.prevent="storeDialog" wire:loading.delay.remove class="btn btn-dark my-2 px-4 border-0"
                type="submit" style="background-color: #039FFC">Share</button>
            <div wire:loading.delay class="ms-3 spinner-grow spinner-grow-sm text-white" role="status"></div>
        @endauth
        @guest
            <a wire:navigate href="{{ route('login') }}" class="btn my-2 px-4" type="submit"
                style="background-color: #039FFC; color: white;">Share</a>
        @endguest
    </form>
</div>
