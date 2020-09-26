@extends('layouts.app')

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
                        {{$tag->posts->count()}}
                    </td>
                   <td><a href="{{route('tags.edit',$tag->id)}}" class="btn btn-info" >Update</a></td>
                 <td><button onclick="handleDelete({{$tag->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete </button> </td> 
               
                </tr>
                @endforeach
            
           
        </tbody>
    </table>
         
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="{{route('tags.destroy',['tag'=>$tag->id])}}" method="POST" id="deleteCategoryForm">
       @csrf
        @method('DELETE')

        
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="deleteModalLabel" >Delete tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body text-center">
                Are you sure you want to delete this tag
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
     <h3 class="text-center">No tag Available</h3>
         
     @endif
    </div>
</div>
    

@endsection

@section('scripts')
<script>
    function handleDelete(id){
      
        var form=documement.getElementById('deleteCategoryForm')
        form.action='/tags/'+id
        $('#deleteModal').modal('show')
    }

</script>
    
@endsection


