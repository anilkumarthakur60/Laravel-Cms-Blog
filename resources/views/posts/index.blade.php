@extends('layouts.app')

@section('title')
    Post
@endsection

@section('content')

<div class="d-flex justify-content-end mb-2"> 
    <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Posts list
    </div>
    <div class="card-body">
        @if ($posts->count()>0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>published Date</th>
                    <th>Update</th>
                  
                    <th>Delete</th>
                    
                  
                </tr>
            </thead>
            <tbody>
                 
                  
                    @foreach ($posts as $post)
                    <tr>  
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>

                        <td> <a href="{{route('categories.edit',$post->category->id)}}">{{$post->category->name}} </a>
                        </td> {{-- category is the funtion post model--}}




                        <td>{{$post->description}}</td>
                        <td> <img src="{{asset('/storage/'.$post->image)}}" alt="" height="60px" width="60px"></td>
                        <td>{{$post->published_at}}</td>
                        
                                @if ($post->trashed())
                                
                               <td>
                                    <form action="{{route('restore-posts',$post->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button  type="submit" class="btn btn-info" > Restore  </button> 
                                    </form>

                               </td>
                                @else
                                <td> <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info" > Update  </a> </td>

                                @endif

                            
                            
                        
                        {{-- <td><button onclick="handleDelete({{$post->id}})" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Trash </button> </td> 
                       --}}
                        <td> 
                        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="handleDelete({{$post->id}})" data-toggle="modal" data-target="#deleteModal">
                                {{$post->trashed()? 'Delete':'trash' }}    
                            </button>      
                            
                           
                            


                        </form>
                        </td>
                      
                     
                    </tr>
                    @endforeach
                
               
            </tbody>
        </table>
                                                    <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST" id="deleteCategoryForm">
                    @csrf
                        @method('DELETE')

                        
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="deleteModalLabel" >Delete Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body text-center">
                                Are you sure you want to delete this Post
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                {{-- end of delete modal --}}
            @else
            <h3 class="text-center">No Post Availabe</h3>
        @endif

    </div>
</div>



@endsection

@section('scripts')
<script>
    function handleDelete(id){
      
        var form=documement.getElementById('deleteCategoryForm')
        form.action='/posts/'+id
        $('#deleteModal').modal('show')
    }

</script>





@endsection

