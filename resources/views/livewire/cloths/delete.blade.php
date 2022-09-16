<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header bg-dark text-light text-center">
                <h3>Delete Apparel</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th> Brand Name</th>
                        <td>{{$this->clothing->name}}</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>{{$this->clothing->color}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$this->clothing->description}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deleteClothing()">
                        delete
                    </button>
                    <button class="btn btn-success btn-sm mx-2" wire:click="back()" >
                        back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
