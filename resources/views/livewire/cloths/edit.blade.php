<div>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-header bg-dark text-light text-center">
                <h3>Edit Apparel</h3>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name"> Brand Name</label>
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="color">
                    <label for="address">Color</label>
                    @error('color')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="description">
                    <label for="description">Description</label>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit" wire:click="editClothing()">
                        Edit
                    </button>
                    <button class="btn btn-success btn-sm mx-2" wire:click="back()" >
                        back
                    </button>
                </div>
                </div>
            </div>
        </div>
       </div>
</div>
