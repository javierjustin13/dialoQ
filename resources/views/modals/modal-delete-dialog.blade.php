<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
                <h3 class="modal-title mb-2" id="staticBackdropLabel">Delete Dialog</h3>
                <p class="modal-title font-weight-bold"> Are you sure want to delete your dialog ? </p>
            </div>
            <div class="modal-body" style="padding:5%">
                <div class="warning-body" style="background-color: #FFE9D9;padding:2%">
                    <div class="warning-icon d-flex">
                        <i class="bi bi-exclamation-triangle-fill mr-2" style="color: #771505"></i>
                        <p class="font-weight-bold" style="color: #771505">Warning</p>
                    </div>
                    <div class="warning-text" style="color: #BC4C2E">
                        <p>Deleting dialog will permanently delete the dialog and all of its comment.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="margin-left: 2%;margin-right: 2%">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="background-color: black;color: white;">No, Cancel</button>
                <form method="POST" action="{{ route('dialogues.destroy', $dialog->id) }}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary" data-bs-dismiss="modal" style="border-color: black">Yes, Delete</button>
                </form>
                </button>
            </div>
        </div>
    </div>
</div>
