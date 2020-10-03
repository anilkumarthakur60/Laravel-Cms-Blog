<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  
  
    @yield('css')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.edit-profile') }}" > <i class="fa fa-user" aria-hidden="true"></i>
                                        Profile
                                   </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-power-off" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
              @auth
             
                    <div class="container-fluid">
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                            
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{session()->get('error')}}
                        </div>
                            
                        @endif
                            <div class="row">
                                <div class="col-md-2">
                                    <ul class="list-group">
                                       <li class="list-group-item">
                                           <a href="{{route('home')}}">Dashboard</a>

                                       </li>
                                       
                                        @if (auth()->user()->isAdmin())
                                            <li class="list-group-item">
                                                <a href="{{route('users.index')}}">
                                                    Users
                                                </a>
                                            </li>
                                        @endif
                                       
                                        <li class="list-group-item">
                                            <a href="{{route('posts.index')}}">Post</a>
                                        </li>
                                       
                                        <li class="list-group-item">
                                            <a href="{{route('categories.index')}}">Category</a>
                                        </li>
                                    </ul>
                                    <ul class="list-group mt-1">
                                        {{-- @if (auth()->user()->isAdmin()) --}}
                                        <li class="list-group-item">
                                            <a href="{{route('trashed-posts.index')}}">Trash Post</a>
                                        </li>
                                       
                                        
                                    </ul>
                                    <li class="list-group-item">
                                        <a href="{{route('tags.index')}}">Tags</a>
                                    </li>

                                </div>
                                <div class="col-md-10">
                                
                                    @yield('content')

                                </div>
                            </div>
                     </div>
                        @else
                        @yield('content')
          
                  @endauth
           
           
        </main>
    </div>
    
    <script src="{{ asset('js/app.js') }}" ></script>
     
@yield('script')


</body>
</html>









