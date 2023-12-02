@auth()
    <form action="{{ route('dialogues.comments.store', $dialog->id) }}" method="POST">
        @csrf
        <div class="form-group" id="commentbox">
            <input name="comment" type="text" class="form-control border" id="formGroupExampleInput" placeholder="Your Comment...">
        </div>
        @error('comment')
            <span class="d-block fs-6 text-danger my-2">{{ $message }}</span>
        @enderror
        <button class="btn btn-dark px-4" type="submit" id="share-btn">SHARE</button>
    </form>
@endauth
