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
       
    @include('partials.error')
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
                <textarea  class="form-control my-editor" id="" name="content" cols="30" rows="5"> {{isset($post)? $post->content :''}}</textarea>
                
            <textarea id="my-editor" name="content" class="form-control"> {{isset($post)? $post->content :''}}</textarea>
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
                   

                </select>
            </div>
            @if($tags->count()>0)
                <div class="form-group">
                    <label for="post_tag">Tags</label>
                
                        <select name="tags[]" id="tags" class="tag_selector form-control" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}"
                                  @if (isset($post))
                                        @if ($post->hasTag($tag->id))
                                        selected  
                                        @endif
                                      
                                  @endif
                                    >
                                    
                                    {{$tag->name}}</option>                            
                            @endforeach
                        </select>

                 
                </div>
                @endif




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




@endsection



@section('script')


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


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
                enableSeconds:true,
                altFormat: "F j, Y",
                 dateFormat: "Y-m-d H:i",
                 defaultDate: "today",
            defaultHour:new Date().getHours(),
            defaultMinute:new Date().getMinutes()
            });
    
            $(document).ready(function() {
    $('.tag_selector').select2();
});
</script>
{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
  
    tinymce.init(editor_config);
</script>
 --}}


<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  
CKEDITOR.replace('my-editor', options);
</script>



@endsection








@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection


