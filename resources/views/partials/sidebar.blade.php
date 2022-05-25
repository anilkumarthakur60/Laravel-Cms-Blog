<div class="col-md-4 col-xl-3">
  <div class="sidebar px-4 py-md-0">

    <h6 class="sidebar-title">Search</h6>


    <form class="input-group" action="" method="GET">
      <input type="text" name="search" id="search" value="{{ request()->query('search') }}">
      <button type="submit" class="fa fa-search"></button>
    </form>

    <h6 class="sidebar-title"> posts</h6>
    @foreach ($posts as $post)
    <a class="media text-default align-items-center mb-5" href="{{route('blog.show',$post->slug)}}">
      <img class=" mr-4" src="{{asset('/storage/'.$post->image)}}" height="50px" width="100px">
      <p class="media-body small-2 lh-4 mb-0">{{$post->title}}</p>
    </a>
    @endforeach
    <x-sidebar-component></x-sidebar-component>
  </div>
</div>