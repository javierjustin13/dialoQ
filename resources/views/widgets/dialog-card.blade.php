@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/dialog-card.css') }}">
@endpush

<div class="p-3 border rounded-4 mb-3" id="postcard">
    @include('widgets.dialog-card-header')

    @include('widgets.dialog-card-body')

    <hr>

    @include('widgets.dialog-card-footer')
</div>
