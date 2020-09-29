
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Laravel Blog</title>

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
          <a class="navbar-brand" href="">
            <img class="logo-dark " src="https://scontent.fktm4-1.fna.fbcdn.net/v/t1.0-9/120185730_790566771782586_4446148852909576343_n.png?_nc_cat=101&_nc_sid=8024bb&_nc_ohc=6kiuVvq2pU4AX843AdK&_nc_ht=scontent.fktm4-1.fna&oh=f642e1072054545680edca592f62b97b&oe=5F96F41C" alt="">
            <img class="logo-light " src="https://scontent.fktm4-1.fna.fbcdn.net/v/t1.0-9/120185730_790566771782586_4446148852909576343_n.png?_nc_cat=101&_nc_sid=8024bb&_nc_ohc=6kiuVvq2pU4AX843AdK&_nc_ht=scontent.fktm4-1.fna&oh=f642e1072054545680edca592f62b97b&oe=5F96F41C" alt="">
        </a>
        </div>

        {{-- <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="#">SaaS <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/saas-1.html">SaaS 1</a>
                    <a class="nav-link" href="../demo/saas-2.html">SaaS 2</a>
                    <a class="nav-link" href="../demo/saas-3.html">SaaS 3</a>
                    <a class="nav-link" href="../demo/saas-4.html">SaaS 4</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Software <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/software-1.html">Software 1</a>
                    <a class="nav-link" href="../demo/software-2.html">Software 2</a>
                    <a class="nav-link" href="../demo/software-3.html">Software 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Marketing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/marketing-1.html">Marketing 1</a>
                    <a class="nav-link" href="../demo/marketing-2.html">Marketing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Listing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/listing-1.html">Listing 1</a>
                    <a class="nav-link" href="../demo/listing-2.html">Listing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../demo/finance-1.html">Finance</a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="../page/how-it-works.html">How it works</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../page/pricing.html">Pricing</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/portfolio.html">Potfolio listing</a>
                    <a class="nav-link" href="../page/portfolio-single.html">Potfolio single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Careers <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/career.html">Careers listing</a>
                    <a class="nav-link" href="../page/career-single.html">Careers single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Service <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/service-1.html">Service 1</a>
                    <a class="nav-link" href="../page/service-2.html">Service 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">About <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/about-1.html">About 1</a>
                    <a class="nav-link" href="../page/about-2.html">About 2</a>
                    <a class="nav-link" href="../page/about-3.html">About 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Contact <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/contact-1.html">Contact 1</a>
                    <a class="nav-link" href="../page/contact-2.html">Contact 2</a>
                    <a class="nav-link" href="../page/contact-3.html">Contact 3</a>
                  </nav>
                </li>

                <li class="nav-divider"></li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Extra <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/demo.html">Request demo</a>
                    <a class="nav-link" href="../page/coming-soon.html">Coming soon</a>
                    <a class="nav-link" href="../page/terms.html">Terms</a>
                    <a class="nav-link" href="../page/error-404.html">Error 404</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">User <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/user-login.html">Login</a>
                    <a class="nav-link" href="../page/user-register.html">Register</a>
                    <a class="nav-link" href="../page/user-recover.html">Recover</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Docs <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../docs/index.html">Support center</a>
                    <a class="nav-link" href="../docs/articles.html">Articles</a>
                    <a class="nav-link" href="../docs/faq.html">FAQ</a>
                  </nav>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
              <nav class="nav">
                <a class="nav-link" href="../blog/classic.html">Classic</a>
                <a class="nav-link" href="../blog/grid.html">Grid</a>
                <a class="nav-link" href="../blog/list.html">List</a>
                <a class="nav-link active" href="../blog/sidebar.html">Sidebar</a>
                <div class="nav-divider"></div>
                <a class="nav-link" href="../blog/post-1.html">Post 1</a>
                <a class="nav-link" href="../blog/post-2.html">Post 2</a>
              </nav>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Shop <span class="arrow"></span></a>
              <nav class="nav">
                <a class="nav-link" href="../shop/list.html">List</a>
                <a class="nav-link" href="../shop/item.html">Item</a>
                <a class="nav-link" href="../shop/cart.html">Cart</a>
                <a class="nav-link" href="../shop/checkout.html">Checkout</a>
              </nav>
            </li>

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/blog.html">Blog</a>
                        <a class="nav-link" href="../block/career.html">Career</a>
                        <a class="nav-link" href="../block/contact.html">Contact</a>
                        <a class="nav-link" href="../block/content.html">Content</a>
                        <a class="nav-link" href="../block/counter.html">Counter</a>
                        <a class="nav-link" href="../block/cover.html">Cover</a>
                        <a class="nav-link" href="../block/cta.html">Call to action</a>
                        <a class="nav-link" href="../block/download.html">Download</a>
                        <a class="nav-link" href="../block/explore.html">Explore</a>
                        <a class="nav-link" href="../block/faq.html">FAQ</a>
                      </nav>
                    </div>

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/feature-text.html">Feature textual</a>
                        <a class="nav-link" href="../block/feature.html">Feature</a>
                        <a class="nav-link" href="../block/footer.html">Footer</a>
                        <a class="nav-link" href="../block/gallery.html">Gallery</a>
                        <a class="nav-link" href="../block/header.html">Header</a>
                        <a class="nav-link" href="../block/map.html">Map</a>
                        <a class="nav-link" href="../block/modal.html">Modal</a>
                        <a class="nav-link" href="../block/offcanvas.html">Offcanvas</a>
                        <a class="nav-link" href="../block/partner.html">Partner</a>
                        <a class="nav-link" href="../block/popup.html">Popup</a>
                      </nav>
                    </div>

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/portfolio.html">Portfolio</a>
                        <a class="nav-link" href="../block/pricing.html">Pricing</a>
                        <a class="nav-link" href="../block/process.html">Process</a>
                        <a class="nav-link" href="../block/service.html">Service</a>
                        <a class="nav-link" href="../block/shop.html">Shop</a>
                        <a class="nav-link" href="../block/signup.html">Signup</a>
                        <a class="nav-link" href="../block/subscribe.html">Subscribe</a>
                        <a class="nav-link" href="../block/team.html">Team</a>
                        <a class="nav-link" href="../block/testimonial.html">Testimonial</a>
                        <a class="nav-link" href="../block/video.html">Video</a>
                      </nav>
                    </div>

                  </div>
                </div>
              </nav>
            </li>

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/accordion.html">Accordion</a>
                        <a class="nav-link" href="../uikit/alert.html">Alert</a>
                        <a class="nav-link" href="../uikit/badge.html">Badge</a>
                        <a class="nav-link" href="../uikit/button.html">Button</a>
                        <a class="nav-link" href="../uikit/card.html">Card</a>
                        <a class="nav-link" href="../uikit/color.html">Colors</a>
                        <a class="nav-link" href="../uikit/constellation.html">Constellation</a>
                        <a class="nav-link" href="../uikit/content.html">Content</a>
                        <a class="nav-link" href="../uikit/countdown.html">Count down</a>
                        <a class="nav-link" href="../uikit/countup.html">Count up</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/dropdown.html">Dropdown</a>
                        <a class="nav-link" href="../uikit/form.html">Form</a>
                        <a class="nav-link" href="../uikit/gallery.html">Gallery</a>
                        <a class="nav-link" href="../uikit/granim.html">Granim</a>
                        <a class="nav-link" href="../uikit/icon.html">Icon</a>
                        <a class="nav-link" href="../uikit/image.html">Image</a>
                        <a class="nav-link" href="../uikit/lightbox.html">Lightbox</a>
                        <a class="nav-link" href="../uikit/map.html">Map</a>
                        <a class="nav-link" href="../uikit/misc.html">Miscellaneous</a>
                        <a class="nav-link" href="../uikit/modal.html">Modal</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/nav.html">Nav</a>
                        <a class="nav-link" href="../uikit/navbar.html">Navbar</a>
                        <a class="nav-link" href="../uikit/offcanvas.html">Offcanvas</a>
                        <a class="nav-link" href="../uikit/overlay.html">Overlay</a>
                        <a class="nav-link" href="../uikit/popup.html">Popup</a>
                        <a class="nav-link" href="../uikit/pricing.html">Pricing</a>
                        <a class="nav-link" href="../uikit/process.html">Process</a>
                        <a class="nav-link" href="../uikit/progress.html">Progress</a>
                        <a class="nav-link" href="../uikit/scroll.html">Scroll</a>
                        <a class="nav-link" href="../uikit/section.html">Section</a>
                      </nav>
                    </div>

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/shuffle.html">Shuffle</a>
                        <a class="nav-link" href="../uikit/slider.html">Slider</a>
                        <a class="nav-link" href="../uikit/social.html">Social</a>
                        <a class="nav-link" href="../uikit/tab.html">Tab</a>
                        <a class="nav-link" href="../uikit/table.html">Table</a>
                        <a class="nav-link" href="../uikit/topbar.html">Topbar</a>
                        <a class="nav-link" href="../uikit/typing.html">Typing</a>
                        <a class="nav-link" href="../uikit/typography.html">Typography</a>
                        <a class="nav-link" href="../uikit/utility.html">Utility</a>
                        <a class="nav-link" href="../uikit/video.html">Video</a>
                      </nav>
                    </div>

                  </div>
                </div>
              </nav>
            </li>

          </ul>
        </section> --}}
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


    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>Latest Blog Posts</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

                @foreach ($posts as $post)
                <div class="col-md-6">
                    <div class="card border hover-shadow-6 mb-6 d-block">
                      <a href="#"><img class="" src="{{asset('/storage/'.$post->image)}}" height="200px"  style="max-width: 100%" alt="Card image cap"></a>
                      <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->category->name}}</a></p>
                        <h5 class="mb-0"><a class="text-dark" href="#">{{$post->title}}</a></h5>
                      </div>
                    </div>
                  </div>
                    
                @endforeach

               


               

              

              </div>


              <nav class="flexbox mt-30">
                <a class="btn btn-white "><i class="fa fa-arrow-left" aria-hidden="true"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </nav>
            </div>



            <div class="col-md-4 col-xl-3">
              <div class="sidebar px-4 py-md-0">

                <h6 class="sidebar-title">Search</h6>
                <form class="input-group" target="#" method="GET">
                  <input type="text" class="form-control" name="s" placeholder="Search">
                  <div class="input-group-addon">
                    <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                  </div>
                </form>

                <hr>

                <h6 class="sidebar-title">Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                 @foreach ($categories as $category)
                 <div class="col-6"><a href="#">{{$category->name}}</a></div>
                 @endforeach
                   
                 
                </div>

                <hr>

                <h6 class="sidebar-title">Top posts</h6>
                @foreach ($posts as $post)
                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                    <img class=" mr-4" src="{{asset('/storage/'.$post->image)}}" height="50px" width="100px">
                    <p class="media-body small-2 lh-4 mb-0">{{$post->title}}</p>
                  </a>
                @endforeach

               

               

                <hr>

                <h6 class="sidebar-title">Tags</h6>
                <div class="gap-multiline-items-1">
                 @foreach ($tags as $tag)
                 <a class="badge badge-secondary" href="#">{{$tag->name}}</a>
                 @endforeach
                   
                 
                </div>

                <hr>

                

              </div>
            </div>

          </div>
        </div>
      </div>
    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-4">
            <a href="/">
                <img height="100px" width="100px" src="{{asset('img/logo.png')}}" alt=""></a>
          </div>

          <div class="col-6 col-lg-6 ">
            <div class="">
             @include('partials.social')
            </div>
          </div>

         

        </div>
      </div>
    </footer><!-- /.footer -->



    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

  </body>
</html>


