@extends('layouts.app')
@section('title')

Create Post    
@endsection

@section('content')


<div class="card card-default">
    <div class="card-header">
    
      {{isset($post)?'Update post':'Create post'}}  {{--dynamically viewing the  update /create category title--}}

    </div>
    <div class="card-body">
       
       {{-- validation error massage  --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
            
        @endif


        <form action="{{isset($post) ? route('posts.update',$post->id):route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($post))
            @method('PUT')
                
            @endif
            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value=" {{isset($post)? $post->title :''}}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea  class="form-control" id="description" name="description" cols="30" rows="5"> {{isset($post)? $post->description :''}}</textarea>
            </div> 
            
            <div class="form-group "  >
                <textarea  class="form-control" id="editor" name="content" cols="30" rows="5"> {{isset($post)? $post->content :''}}</textarea>

             </div> 
            @if (isset($post))
            <div class="form-group">
                <img src="{{asset('/storage/'.$post->image)}}" alt="" height="60px" width="60px">
            </div>
                
            @endif
            
            <div class="form-group">
                <label for="Image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" value=" {{isset($post)? $post->image :''}}">
            </div>
            <div class='form-group'>
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                            @if (isset($post))
                            @if ($category->id=$post->category_id)
                            selected
                         @endif
                                
                            @endif  >
                            {{$category->name}}
                        </option>
                    @endforeach
                    <option value=""></option>

                </select>
            </div>
            
              <div class="form-group">
                <label for="Published_at">Published At:</label>
                <input type="text"  id="published_at" name="published_at" value=" {{isset($post)? $post->published_at :''}}">
            </div>
        
            <div class="form-group">
               <button class="btn btn-success"> {{isset($post)?'Update post':'Create post'}}</button>
            </div>
        </form>

    </div>
</div>
{{-- 
<form action="{{isset($post) ? route('posts.update',$post->id):route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @if (isset($post))
    @method('PUT')
        
    @endif

    <div class="form-group">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value=" {{isset($post)? $post->title :''}}">
    </div>
    <div class="form-group">
        <label for="Content">Content:</label>
        <textarea  class="form-control" id="content" name="content" cols="30" rows="5"> {{isset($post)? $post->content :''}}</textarea>
    </div> 
    
    
    <div class="form-group">
        <label for="Content">Content:</label>
        <textarea  class="form-control" id="content" name="content" cols="30" rows="5"> {{isset($post)? $post->content :''}}</textarea>
    </div> 
    
    <div class="form-group">
        <label for="Image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" value=" {{isset($post)? $post->image :''}}">
  
  
    </div>  <div class="form-group">
        <label for="Published_at">Published At:</label>
        <input type="date" class="form-control" id="published_at" name="published_at" value=" {{isset($post)? $post->published_at :''}}">
    </div>
 --}}




@endsection



@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
    
            flatpickr('#published_at',{
                enableTime: true,
                altFormat: "F j, Y",
                 dateFormat: "Y-m-d H:i",
                 defaultDate: "today",
            defaultHour:new Date().getHours(),
            defaultMinute:new Date().getMinutes()
            });
</script>
@endsection

@section('css')
<link href='https://cdn.jsdelivr.net/npm/froala-editor@3.2.0/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection


