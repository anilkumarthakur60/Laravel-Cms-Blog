<hr>
<h6 class="sidebar-title">Categories</h6>
<div class="row link-color-default fs-14 lh-24">
    @foreach ($categories as $category)
    <div class="col-6"><a href="{{ route('blog.category',$category->slug) }}">{{$category->name}}</a></div>
    @endforeach
</div>
<hr>
<h6 class="sidebar-title">Tags</h6>
<div class="gap-multiline-items-1">
    @foreach ($tags as $tag)
    <a class="badge badge-secondary" href="{{ route('blog.tag',$tag->slug) }}">{{$tag->name}}</a>
    @endforeach
</div>