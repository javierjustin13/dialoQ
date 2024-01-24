@if (session('success'))
    <div class="alert alert-dismissible fade show" style="background-color: #FFC7FF; color: #4D425F;" role="alert"  >
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- alert-success --}}
