@extends('layouts.app')

@section('title')
Category

@endsection


@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Categories list
    </div>
    <div class="card-body">
        @if ($categories->count()>0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Post Count</th>
                    <th>edit</th>
                    <th>delete</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        {{$category->posts_count}}
                    </td>
                    <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Update</a></td>
                    <td><button onclick="handleDelete({{$category->id}})" class="btn btn-danger" data-toggle="modal"
                            data-target="#deleteModal">Delete </button> </td>

                </tr>
                @endforeach


            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="POST"
                    id="deleteCategoryForm">
                    @csrf
                    @method('DELETE')



                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="deleteModalLabel">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            Are you sure you want to delete this category
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- end of delte modal --}}
        @else
        <h3 class="text-center">No Category Available</h3>

        @endif
    </div>
</div>


@endsection

@section('scripts')
<script>
    function handleDelete(id){
      
        var form=documement.getElementById('deleteCategoryForm')
        form.action='/categories/'+id
        $('#deleteModal').modal('show')
    }

</script>

@endsection