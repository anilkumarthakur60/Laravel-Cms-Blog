
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/ogw/ADGmqu9SCKYU0ttrkBjw7z5nWDCK9Eew-A6UE1n-GG19=s83-c-mo" type="image/x-icon">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="{{route('welcome')}}">
            <img class="logo-dark " src="https://scontent.fktm4-1.fna.fbcdn.net/v/t1.0-9/120185730_790566771782586_4446148852909576343_n.png?_nc_cat=101&_nc_sid=8024bb&_nc_ohc=6kiuVvq2pU4AX843AdK&_nc_ht=scontent.fktm4-1.fna&oh=f642e1072054545680edca592f62b97b&oe=5F96F41C" alt="">
            <img class="logo-light " src="https://scontent.fktm4-1.fna.fbcdn.net/v/t1.0-9/120185730_790566771782586_4446148852909576343_n.png?_nc_cat=101&_nc_sid=8024bb&_nc_ohc=6kiuVvq2pU4AX843AdK&_nc_ht=scontent.fktm4-1.fna&oh=f642e1072054545680edca592f62b97b&oe=5F96F41C" alt="">
        </a>
        </div>

         @if (Route::has('login'))
            <div class="top-right pull-right links">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-info" style="border-radius: 28px" >Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-success" style="border-radius: 28px">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=" btn btn-primary" style="border-radius: 28px">Register</a>
                    @endif
                @endauth
            </div>
         @endif

      </div>
    </nav><!-- /.navbar -->


    @yield('header')

    <!-- Main Content -->
   @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row   " style="width: 35%;margin: auto">

        

             @include('partials.social')
         
         

        </div>
      </div>
    </footer><!-- /.footer -->



    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a9752c177ba969c"></script>



  </body>
</html>


