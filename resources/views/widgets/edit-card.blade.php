@push('head')
<link rel="stylesheet" href="{{ asset('css/widgets/edit-card.css') }}">
@endpush

<div class="p-3 border rounded-4 mb-3" id="postcard">
    <div class="card-header">
        <div class="media flex-wrap w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
                class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}" data-abc="true">{{
                    $dialog->user->username }}</a>
            </div>
            <div class="text-muted small ml-3 d-flex align-items-center">
                <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                    @csrf
                    @method('delete')
                    <button class="ms-1 btn btn-danger btn-sm"> X </button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body pt-3">
        <form action="">
            <textarea id="mytextarea" cols="35">{{ $dialog->title }}</textarea>

            <div class="card-footer align-items-center px-0 pt-0 pb-3">
                <button class="btn btn-success mt-3" type="submit">UPDATE</button>
                <button class="btn btn-danger mt-3" type="submit">CANCEL</button>
            </div>
        </form>

        <h4>{{ $dialog->title }}</h4>
        <p>{{ $dialog->content }}</p>
    </div>

</div>