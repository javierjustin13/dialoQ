<!-- Modal -->
<div class="modal fade" id="DialogModal{{ $dialog->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
                <h3 class="modal-title mb-2" id="staticBackdropLabel">Delete Dialog</h3>
                <p class="modal-title font-weight-bold"> Are you sure want to delete your dialog ? </p>
            </div>
            <div class="modal-body" style="padding:5%">
                <div class="warning-body" style="background-color: #F8D7DA;padding:2%">
                    <div class="warning-icon d-flex">
                        <i class="bi bi-exclamation-triangle-fill mr-2" style="color: #721F27"></i>
                        <p class="font-weight-bold" style="color: #721F27">Warning</p>
                    </div>
                    <div class="warning-text" style="color: #721F27">
                        <p>Deleting dialog will permanently delete the dialog and all of its comment.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="margin-left: 2%;margin-right: 2%">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="background-color: #039FFC; color: white; border: 1px solid black">No, Cancel</button>
                <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                    @csrf
                    @method('delete')
                    @can('delete', $dialog)
                        <button class="btn btn-secondary px-3" data-bs-dismiss="modal" style="border-color: black;background-color: red; color: white">Yes, Delete</button>
                    @endcan
                </form>
                </button>
            </div>
        </div>
    </div>
</div>
