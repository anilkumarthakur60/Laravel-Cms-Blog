@extends('layouts.blog')


@section('title')
{{ $category->name }}
@endsection

@section('header')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1> {{ $category->name }}</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header><!-- /.header -->    

@endsection

@section('content')
    <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

               

                @forelse ($posts as $post)
                <div class="col-md-6">
                  <div class="card border hover-shadow-6 mb-6 d-block">
                    <a href="{{route('blog.show',$post->id)}}"><img class="" src="{{asset('/storage/'.$post->image)}}" height="200px"  style="max-width: 100%" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                      <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->category->name}}</a></p>
                      <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show',$post->id)}}">{{$post->title}}</a></h5>
                    </div>
                  </div>
               </div>
                    
                @empty
                  
                  <p class="text-center"> No Result Found !!! <strong>{{ request()->query('search') }}</strong></p>  
                @endforelse


              </div>


              {{ $posts->appends(['search'=>request()->query('search')])->links() }}


              {{-- <nav class="flexbox mt-30">
                <a class="btn btn-white "><i class="fa fa-arrow-left" aria-hidden="true"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </nav> --}}


            </div>


            
@include('partials.sidebar')

          </div>
        </div>
      </div>
    </main>

    
@endsection



