@extends('layouts.app')

@section('title')
Tag

@endsection

@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{route('tags.create')}}" class="btn btn-primary">Add Tag</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Tag list
    </div>
    <div class="card-body">
        @if ($tags->count()>0)
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
                @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                        {{$tag->posts_count}}
                    </td>
                    <td><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-info">Update</a></td>
                    <td>
                        <form action="{{ route('tags.destroy',$tag->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        @else
        <h3 class="text-center">No tag Available</h3>

        @endif
    </div>
</div>


@endsection

@section('scripts')
<script>
    // function handleDelete(id){
      
    //     var form=documement.getElementById('deleteCategoryForm')
    //     form.action='/tags/'+id
    //     $('#deleteModal').modal('show')
    // }

</script>

@endsection