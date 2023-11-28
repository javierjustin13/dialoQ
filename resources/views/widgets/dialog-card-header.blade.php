<div class="card-header">
    <div class="media w-100 align-items-center"> <img src="{{ $dialog->user->getImageURL() }}"
            class="d-block ui-w-40 rounded-circle" alt="Profile Picture">
        <div class="media-body ml-3"> <a href="{{ route('users.show', $dialog->user->id) }}"
                data-abc="true">{{ $dialog->user->username }}</a>
        </div>
        @include('widgets.follow-button')
        <div class="text-muted small ml-3 d-flex align-items-center">
            <a href="{{ route('dialogues.show', $dialog->id) }}">View</a>
            @auth()
                @can('update', $dialog)
                    <a class="mx-2" href="{{ route('dialogues.edit', $dialog->id) }}"> Edit </a>
                    <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                        @csrf
                        @method('delete')
                        @can('delete', $dialog)
                            <button class="ms-1 btn btn-danger btn-sm"> X </button>
                        @endcan
                    </form>
                @endcan
            @endauth
        </div>
    </div>
</div>
