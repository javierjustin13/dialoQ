@push('head')
    <link rel="stylesheet" href="{{ asset('css/widgets/edit-card.css') }}">
@endpush

    {{-- Modal --}}
    @include('modals.modal-delete-dialog')
    {{-- End Modal --}}



<div class="p-3 border rounded-4 mb-3 border" id="postcard">
    <div class="card-header">
        <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                    data-abc="true">{{ $dialog->user->username }}</a>
            </div>
            <div class="text-muted small ml-3 d-flex align-items-center">
                <button class="ms-1 btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DialogModal{{ $dialog->id }}"> X </button>
            </div>
        </div>
    </div>
    <div class="card-body pt-3">
        <form method="POST" action="{{ route('dialogues.update', $dialog->id) }}">
            @csrf
            @method('PUT')
            <textarea id="titlearea" name="new_title" class="form-control mb-3 border" cols="35" oninput="auto_grow(this)">{{ $dialog->title }}</textarea>
            @error('new_title')
                <span class="my-2 d-block fs-6 text-danger"> {{ $message }} </span>
            @enderror
            <textarea id="contentarea" name="new_content" class="form-control border" cols="35" oninput="auto_grow(this)">{{ $dialog->content }}</textarea>
            @error('new_content')
                <span class="my-2 d-block fs-6 text-danger"> {{ $message }} </span>
            @enderror
            <div class="card-footer align-items-center px-0 pt-0 pb-3">
                <button class="btn btn-dark mt-3 me-2" type="submit" id="updatebutton">UPDATE</button>
                <button class="btn btn-danger mt-3" type="button" onclick="window.history.back()">CANCEL</button>
            </div>
        </form>
    </div>

</div>


<script>
    function auto_grow(element) {
        element.style.height = "5px";
        element.style.height = (element.scrollHeight) + "px";
    }
</script>
