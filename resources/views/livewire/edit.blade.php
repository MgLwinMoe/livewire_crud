<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editstudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form>
            <input type="hidden" name="id" wire:model="ids">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" wire:model="firstname" id="firstname">
                @error('firstname')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" wire:model="lastname" id="lastname">
                @error('lastname')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Email</label>
                <input type="email" class="form-control" wire:model="email" id="email">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" wire:model="phone" id="email">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Update</button>
    </div>
        </form>
    </div>
    </div>
</div>
</div>
