<div>
    <table class="table table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <th>Id No</th>
                <th>Brand Name</th>
                <th>Color</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($clothing as $cloth)
                <tr>
                    <th>{{$cloth->id}}</th>
                    <th>{{$cloth->name}}</th>
                    <th>{{$cloth->color}}</th>
                    <th>{{$cloth->description}}</th>
                    <td >
                        <a href="{{url('edit', ['clothing' => $cloth->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{url('delete', ['clothing' => $cloth->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
