@auth
    <form action="{{ route('dialogues.comments.store', $dialog->id) }}" method="POST">
        @csrf
        <div class="form-group" id="commentbox">
            <input name="content" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Comments...">
        </div>
        <button class="btn btn-secondary" type="submit">SHARE</button>
    </form>
@endauth
