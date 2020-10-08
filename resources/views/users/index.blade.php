@extends('layouts.app')

@section('title')
    Post
@endsection

@section('content')

<div class="card card-default">
    <div class="card-header">
        User's list
    </div>
    <div class="card-body">
        @if ($users->count()>0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    
                  
                </tr>
            </thead>
            <tbody>
                 
                  
                    @foreach ($users as $user)
                    <tr>  
                        <td>{{$user->id}}</td>
                        <td>
                          <img src="{{ Gravatar::get($user->email)}}" width="40px" height="40px" style="border-radius: 50%" alt="image">
                        </td>


                    <td>{{$user->name}} <small> @if ($user->isAdmin())
                        [{{$user->role}}] 
                    @endif   </small></td>
                        <td>{{$user->email}}</td>
                        {{-- <td> <img src="{{asset('/storage/'.$post->image)}}" alt="" height="60px" width="60px"></td> --}}

                     @if (!$user->isAdmin())
                     <td>
                    <form action="{{route('users.make-admin',$user->id)}}" method="POST">
                        @csrf
                        <button type="submit" class=" btn btn-success btn-sm">MAke Admin</button>
             
                    
                    
                    </form>
                </td>
                         
                     @endif
                      
                     
                    </tr>
                    @endforeach
                
               
            </tbody>
        </table>
                                                    {{-- <!-- Modal -->
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
                </div> --}}
                {{-- end of delete modal --}}
            @else
            <h3 class="text-center">No Users Availabe</h3>
        @endif

    </div>
</div>



@endsection

@section('scripts')
{{-- <script>
    function handleDelete(id){
      
        var form=documement.getElementById('deleteCategoryForm')
        form.action='/posts/'+id
        $('#deleteModal').modal('show')
    }

</script> --}}





@endsection

