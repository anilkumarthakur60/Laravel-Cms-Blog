@extends('layouts.blog')

@section('title')
{{ $post->title }}
@endsection
@section('header')
<header class="header text-white h-fullscreen pb-80"
    style="background-image: url({{ asset('/storage/' . $post->image) }});" data-overlay="9">
    <div class="container text-center">

        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">

                <p class="opacity-70 text-uppercase small ls-1"> {{ $post->category->name }}</p>
                <h1 class="display-4 mt-7 mb-8">{{ $post->title }}</h1>
                <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">
                        {{ $post->user->name }}</a>
                </p>
                <p><img class="avatar avatar-sm" src="{{ Gravatar::get($post->user->email) }}" alt="..."></p>
            </div>
            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>

        </div>

    </div>
</header>
@endsection
@section('content')
<main class="main-content">
    <div class="container-fluid">
        <div class="card" style="background-color: #cfc5c5">
            <div class="card-body">
                <div class="section " id="section-content">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            @auth
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary pull-right"> Edit This
                                Post
                            </a>
                            @endauth
                            <div class="addthis_inline_share_toolbox"></div>
                            {!! $post->content !!}
                            <div class="gap-xy-2 mt-2">
                                @foreach ($post->tags as $tag)

                                <a class="badge badge-pill badge-secondary"
                                    href="{{ route('blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @comments(['model' => $post])
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('js/app.js') }}"></script>
@endsection