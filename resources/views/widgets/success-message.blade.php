@if (session('success'))
    <div class="alert alert-dismissible fade show" style="background-color: white; color: #050505;box-shadow: 0px 0px 6px 0px rgba(222,224,227,1);
    " role="alert"  >
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- alert-success --}}
