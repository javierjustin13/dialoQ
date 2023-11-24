@auth()
    <form action="{{ route('dialogues.comments.store', $dialog->id) }}" method="POST">
        @csrf
        <div class="form-group" id="commentbox">
            <input name="comment" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Comments...">
        </div>
        @error('comment')
            <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
        @enderror
        <button class="btn btn-secondary" type="submit">SHARE</button>
    </form>
@endauth
