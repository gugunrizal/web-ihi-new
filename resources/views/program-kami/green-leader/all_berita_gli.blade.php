<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Berita | Green Leadership Indonesia</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @foreach ($berita as $b)
    <meta property="og:title" content="{{$b->judul}}">
    <meta property="og:image" content="{{asset('img/gambar_berita/'.$b->gambar_berita)}}">
    @endforeach

    <!-- Favicons -->
    <link href="{{asset('img/logo-program/Logo-GLI.png')}}" rel="icon">
    <link href="{{asset('img/logo-program/Logo-GLI.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('css/main2.css')}}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #088a08;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{route('tampilGreenLeader')}}" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Green Leadership Indonesia</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('tampilGreenLeader')}}" class="active">Home</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#about">About</a></li>
                    <li><a href="{{route('tampilTimGLI')}}">Team</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#speaker">Speaker</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#recent-blog-postst">Blog</a></li>
                    <li><a href="{{route('tampilGreenLeader')}}#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{route('home')}}">Kembali</a>

        </div>
    </header>

    <main class="main">

        <!-- Recent Blog Postst Section -->
        <section id="recent-blog-postst" class="recent-blog-postst section light-background" style="padding-top: 140px;">

            <div class=" container section-title" data-aos="fade-up">
                <h2>Berita Green Leadership Indonesia</h2>
            </div>

            <div class="container">

                <div class="row gy-5 justify-content-center">

                    @foreach ($berita as $b)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">


                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{asset('/storage/'.$b->gambar_berita) }}" class="img-fluid" alt="">
                                <span class="post-date">{{$b->tanggal_rilis}}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{$b->judul}}</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">{{$b->penulis}}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">{{$b->kategori}}</span>
                                    </div>
                                </div>

                                <hr>
                                <a href="{{route('tampilBeritaGLI', $b->slug)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section>
        <!-- /Recent Blog Postst Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Project Officer Green Leadership Indonesia</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Jl. Palapa XVII No.3 11, RT.11/RW.5, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 852-4260-0884 (Fachruddin Dokumalamo)</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>instituthijauindonesiaIHI@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="info-wrap justify-content-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.812277513979!2d106.83611977591471!3d-6.288388361552235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3007740e4d7%3A0x33d807ebd395bc7d!2sInstitut%20Hijau%20Indonesia!5e0!3m2!1sid!2sid!4v1755396628271!5m2!1sid!2sid" width="690" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-6 footer-about">
                    <a href="{{route('tampilCivic')}}" class="d-flex align-items-center">
                        <span class="sitename" style="color: #088a08;">Green Leadership Indonesia</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Palapa XVII No.3 11, RT.11/RW.5, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 852-4260-0884 (Fachruddin Dokumalamo)</span></p>
                        <p><strong>Email:</strong> <span>instituthijauindonesiaIHI@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Follow us for more information</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <a href="{{route('home')}}" class="px-1 sitename"><strong>Institut Hijau Indonesia</strong></a> <span>All Rights Reserved</span></p>
            <div class="credits">
                Green Leadership Indonesia
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>