

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="firstname">
            First Name
            </label>
            <input type="text" class="form-control" name="firstname" wire:model="firstname" />
            @error('firstname')<div class="text-danger"><small>{{$message}}</small></div>
            @enderror

            <label for="lastname">
            Last Name
            </label>
            <input type="text" class="form-control" name="lastname" wire:model="lastname" />

            @error('lastname')<div class="text-danger"><small> {{$message}}</small></div>
            @enderror

            <label for="email">
            Email
            </label>
            <input type="email" class="form-control" name="email" wire:model="email" />
            @error('email')<div class="text-danger"><small>{{$message}}</small></div>
            @enderror

            <label for="phone">
            Phone
            </label>
            <input type="text" class="form-control" name="phone"  wire:model="phone"/>
            @error('phone')<div class="text-danger"><small>{{$message}}</small></div>
            @enderror
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  wire:click="store()" type="button" class="btn btn-primary">Add Student</button>
      </div>
    </div>
  </div>
</div>