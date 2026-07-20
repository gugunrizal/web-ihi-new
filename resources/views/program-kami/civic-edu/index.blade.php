<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Civic Education</title>
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
    <link rel="stylesheet" href="{{asset('vendors/aos/aos.css')}}">

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
                            <a class="nav-link page-scroll {{ request()->is('/civic-education') ? 'active' : '' }}" href="{{route('viewCivicEducation')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ request()->is('/services') ? 'active' : '' }}" href="#services">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{route('viewTimCivic')}}">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{route('viewAllBeritaCivic')}}">Publikasi</a>
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
        <div class="container">
            <div class="row space-100 justify-content-center">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Civic Education</h2>
                        <p>Saatnya menjadi masyarakat yang lebih Cerdas!</p>
                        <div class="header-button">
                            <a href="https://program.instituthijauindonesia.or.id/" rel="nofollow" target="_blank" class="btn btn-border-filled-civic">Login LMS</a>
                            <a href="{{route('viewHome')}}" rel="nofollow" class="btn btn-border">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                    <div class="intro-img justify-content-center">
                        <img src="{{asset('img/logo-program/logo-civic-white.png')}}" alt="" class="img-fluid" width="60%">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <section id="services" class="section" data-aos="fade-right" data-aos-delay="100">
        <!-- Services Section Start -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="business-plan" style="font-weight: bold; text-align: center;">ABOUT US</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col business-plan business-plan-info">
                    <p>Institut Hijau Indonesia secara sungguh-sungguh ingin membangun peradaban hijau Indonesia. Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.</p>
                    <p>Program Edukasi dari Institut Hijau Indonesia untuk menumbuhkan kesadaran demokrasi, sosial, dan lingkungan. Menggunakan pendekatan inklusif dan berbasis pengalaman, Civic Education mendorong generasi muda membangun negara yang adil secara sosial dan ekologis.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Team section Start -->
    <section id="team" class="section" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-text section-header text-center">
                        <div>
                            <h2 class="section-title">Our Speakers</h2>
                            <div class="desc-text">
                                <p>Prepare Yourslef for Civic Education</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/qurnia.png')}}" class="img-fluid rounded" alt="Dr. Qurnia Indah Permata Sari">
                        <p class="text-center mt-2 mt-2">Dr. Qurnia Indah Permata Sari</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/ray.png')}}" class="img-fluid rounded" alt="Ahmad Fauzi (Ray Rangkuti)">
                        <p class="text-center mt-2">Ahmad Fauzi (Ray Rangkuti)</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/dani.png')}}" class="img-fluid rounded" alt="Dani Wahyu Munggoro">
                        <p class="text-center mt-2">Dani Wahyu Munggoro</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/zainal.png')}}" class="img-fluid rounded" alt="Zainal Arifin Mochtar, S.H., LL.M.">
                        <p class="text-center mt-2">Zainal Arifin Mochtar, S.H., LL.M.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/jimly.png')}}" class="img-fluid rounded" alt="Prof. Dr. H. Jimly Asshiddiqie, S.H., M.H.">
                        <p class="text-center mt-2">Prof. Dr. H. Jimly Asshiddiqie, S.H., M.H.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/bivitri.png')}}" class="img-fluid rounded" alt="Bivitri Susanti, S.H., LL.M.">
                        <p class="text-center mt-2">Bivitri Susanti, S.H., LL.M.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/sudirman.png')}}" class="img-fluid rounded" alt="Sudirman Said, S.Ak., MBA.">
                        <p class="text-center mt-2">Sudirman Said, S.Ak., MBA.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/bambang.png')}}" class="img-fluid rounded" alt="Prof. Dr. Bambang Shergi Laksmono, M.Sc.">
                        <p class="text-center mt-2">Prof. Dr. Bambang Shergi L, M.Sc.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/anies.png')}}" class="img-fluid rounded" alt="H. Anies Rashid Baswedan, S.E., M.PP., Ph.D.">
                        <p class="text-center mt-2">H. Anies R. Baswedan, S.E., M.PP., Ph.D.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/imam.png')}}" class="img-fluid rounded" alt="Dr. Drs. Imam Budidarmawan Prasojo, M.A., Ph.D.">
                        <p class="text-center mt-2">Dr. Drs. Imam Budidarmawan P, M.A., Ph.D.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/djo.png')}}" class="img-fluid rounded" alt="Prof. Dr. Djohermansyah Djohan, M.A.">
                        <p class="text-center mt-2">Prof. Dr. Djohermansyah Djohan, M.A.</p>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/12.png')}}" class="img-fluid rounded" alt="Eberta Kawima">
                        <p class="text-center mt-2">Eberta Kawima</p>
                    </div>
                </div> -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/titi.png')}}" class="img-fluid rounded" alt="Titi Anggraini, S.H., M.H.">
                        <p class="text-center mt-2">Titi Anggraini, S.H., M.H.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/refly.png')}}" class="img-fluid rounded" alt="Dr. Refly Harun, S.H., M.H., LL.M.">
                        <p class="text-center mt-2">Dr. Refly Harun, S.H., M.H., LL.M.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/revrisond.png')}}" class="img-fluid rounded" alt="Dr. Revrisond Baswir, M.B.A., Ak., CA">
                        <p class="text-center mt-2">Dr. Revrisond Baswir, M.B.A., Ak., CA</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/yulianto.png')}}" class="img-fluid rounded" alt="Yulianto Sudrajat, S.Sos., M.Ikom">
                        <p class="text-center mt-2">Yulianto Sudrajat, S.Sos., M.Ikom</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/haris.png')}}" class="img-fluid rounded" alt="Haris Azhar">
                        <p class="text-center mt-2">Haris Azhar</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/siti.png')}}" class="img-fluid rounded" alt="Prof. Dr. R. Siti Zuhro, MA.">
                        <p class="text-center mt-2">Prof. Dr. R. Siti Zuhro, MA.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/isnur.png')}}" class="img-fluid rounded" alt="Muhammad Isnur, S.H., M.H.">
                        <p class="text-center mt-2">Muhammad Isnur, S.H., M.H.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/ridha.png')}}" class="img-fluid rounded" alt="M. Ridha Saleh">
                        <p class="text-center mt-2">M. Ridha Saleh</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/ahmad.png')}}" class="img-fluid rounded" alt="Ahmad Arif">
                        <p class="text-center mt-2">Ahmad Arif</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/chalid.png')}}" class="img-fluid rounded" alt="Chalid Muhammad">
                        <p class="text-center mt-2">Chalid Muhammad</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/hikmat.png')}}" class="img-fluid rounded" alt="Hikmat Hardono">
                        <p class="text-center mt-2">Hikmat Hardono</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/noer.png')}}" class="img-fluid rounded" alt="Noer Fauzi Rachman">
                        <p class="text-center mt-2">Noer Fauzi Rachman</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/suwiryo.png')}}" class="img-fluid rounded" alt="Suwiryo Ismail">
                        <p class="text-center mt-2">Suwiryo Ismail</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/danang.png')}}" class="img-fluid rounded" alt="Danang Widoyoko">
                        <p class="text-center mt-2">Danang Widoyoko</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/farah.png')}}" class="img-fluid rounded" alt="Farah Sofa">
                        <p class="text-center mt-2">Farah Sofa</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <img src="{{asset('img/civic-edu/narsum/pramono.png')}}" class="img-fluid rounded" alt="Dr. Ir. Pramono Anung Wibowo, M.M.">
                        <p class="text-center mt-2">Dr. Ir. Pramono Anung Wibowo, M.M.</p>
                    </div>
                </div>

            </div>
            <!-- End Row -->
        </div>
    </section>
    <!-- Team section End -->


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
                                <li><a href="#"> - Android App</a></li>
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
                                <p>Developed by Institut Hijau Indonesia</p>
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
    <script src="{{asset('vendors/aos/aos.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi
            once: false, // animasi akan muncul setiap kali discroll
            mirror: true // animasi aktif saat scroll naik dan turun
        });
    </script>

</body>

</html>