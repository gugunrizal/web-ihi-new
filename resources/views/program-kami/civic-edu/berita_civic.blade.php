<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Civic Education | Publikasi</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('img/logo-program/logo-civic-white.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/LineIcons.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>

<body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area-civic">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar menu-bg-civic">
            <div class="container">
                <a href="{{route('viewCivicEducation')}}" class="navbar-brand">
                    <img src="{{asset('img/logo-program/logo-civic-white.png')}}" alt="" class="img-fluid" width="10%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{route('viewCivicEducation')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{route('viewTimCivic')}}">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll active" href="{{route('viewAllBeritaCivic')}}">Publikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="mx-3 btn btn-light text-dark" href="#">Login</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section End -->

    <!-- Blog Section -->
    <section id="blog" class="section" style="padding-top: 180px;">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-text section-header text-center">
                        <div>
                            <h2 class="section-title">Publikasi</h2>
                            <div class="desc-text">
                                <p>Publikasi terkini tentang Civic Education</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row justify-content-center">
                <!-- Start Col -->
                @foreach ($berita as $br)

                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="{{asset('storage/' . $br->gambar_berita )}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="single-post.html">
                                    {{Str::limit($br->judul, 50)}}
                                </a>
                            </h3>
                            <p>{{ Str::limit($br->ringkasan_berita, 100) }}</p>
                            <!-- <a href="" class=" read-more">5 Min read</a> -->
                        </div>
                        <div class="author">
                            <span class="name"><i class="lni-user"></i><a href="#">Posted by {{ $br->penulis }}</a></span>
                            <span class="date float-right"><i class="lni-calendar"></i><a href="#">{{ $br->tanggal_rilis }}</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                @endforeach
                <!-- End Col -->

            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- blog Section End -->

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section id="footer-Content">
            <div class="container">
                <!-- Start Row -->
                <div class="row">

                    <!-- Start Col -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">

                        <div class="footer-logo">
                            <img src="img/footer-logo.png" alt="">
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Company</h3>
                            <ul class="menu">
                                <li><a href="#"> - About Us</a></li>
                                <li><a href="#">- Career</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="#">- Press</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Product</h3>
                            <ul class="menu">
                                <li><a href="#"> - Customer Service</a></li>
                                <li><a href="#">- Enterprise</a></li>
                                <li><a href="#">- Price</a></li>
                                <li><a href="#">- Scurity</a></li>
                                <li><a href="#">- Why SLICK?</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Download App</h3>
                            <ul class="menu">
                                <li><a href="#">- Android App</a></li>
                                <li><a href="#">- IOS App</a></li>
                                <li><a href="#">- Windows App</a></li>
                                <li><a href="#">- Play Store</a></li>
                                <li><a href="#">- IOS Store</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Col -->
                    <!-- Start Col -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Subscribe Now</h3>
                            <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                            <div class="subscribe-area">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <span><i class="lni-chevron-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- Copyright Start  -->

            <div class="copyright">
                <div class="container">
                    <!-- Star Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-info text-center">
                                <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div>

                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- Copyright End -->
        </section>
        <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <!-- <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div> -->
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{asset('js/jquery-min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.nav.js')}}"></script>
    <script src="{{asset('js/scrolling-nav.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>