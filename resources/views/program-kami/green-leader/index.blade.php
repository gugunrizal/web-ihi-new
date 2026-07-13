<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <title>Green Leadership Indonesia</title>
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="{{asset('img/logo-program/Logo-GLI.png')}}" type="image/png">
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
  <header id="home" class="hero-area-gli">
    <div class="overlay">
      <span></span>
      <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar menu-bg-gli">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="{{asset('img/logo-program/Logo-GLI.png')}}" alt="" class="img-fluid" width="10%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link page-scroll {{ request()->is('/green-leadership') ? 'active' : '' }}" href="{{route('viewGreenLeadership')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll {{ request()->is('/services') ? 'active' : '' }}" href="#services">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{route('viewTimGLI')}}">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{route('viewAllBeritaGLI')}}">Publikasi</a>
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
            <h2 class="head-title">Green Leadership Indonesia</h2>
            <p>Memfasilitasi Tumbuhnya Pemimpin dengan Perspektif Keadilan Sosial dan Ekologis</p>
            <div class="header-button">
              <a href="https://program.instituthijauindonesia.or.id/" rel="nofollow" target="_blank" class="btn btn-border-filled-gli">Login LMS</a>
              <a href="{{route('viewHome')}}" rel="nofollow" class="btn btn-border">Kembali</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 p-0">
          <div class="intro-img justify-content-center">
            <img src="{{asset('img/logo-program/Logo-GLI.png')}}" alt="" class="img-fluid" width="60%">
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->


  <section id="services" class="section" data-aos="fade-left">
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
          <p>Green Leadership Indonesia (GLI) adalah program pendidikan informal hijau yang dirancang untuk mengembangkan pemimpin yang berfokus pada isu-isu lingkungan dan keberlanjutan. Program ini diinisiasi oleh Institut Hijau Indonesia (IHI) bekerja sama dengan WALHI (Wahana Lingkungan Hidup Indonesia), KNTI (Kesatuan Nelayan Tradisional Indonesia), dan HuMa (Perkumpulan untuk Pembaruan Hukum Berbasis Masyarakat dan Ekologis). GLI diadakan bertujuan untuk membangun pemimpin dari berbagai latar belakang yang memiliki keberpihakan terhadap keadilan sosial dan ekologis, sekaligus melahirkan inisiatif keberlanjutan di tingkat lokal, nasional, maupun internasional.</p>
          <p>Sejak pertama kali dilaksanakan pada tahun 2021, GLI telah dirancang secara sistematis untuk memfasilitasi tumbuhnya pemimpin muda Indonesia yang kritis dan berorientasi pada perubahan. Dengan visi "Menciptakan pemimpin hijau yang mampu menginspirasi perubahan, membawa dampak positif bagi lingkungan, masyarakat, dan generasi mendatang, serta memiliki perspektif keadilan sosial dan ekologis", GLI memfokuskan diri pada pengembangan kapasitas pemimpin. Misi utamanya meliputi membekali peserta dengan pengetahuan mendalam tentang isu keberlanjutan, mengasah keterampilan kepemimpinan berbasis solusi, membangun jejaring kolaborasi lintas sektor, dan mendorong aksi nyata yang berfokus pada keadilan ekologis dan sosial.
          </p>
          <p>Melalui tagline "Memfasilitasi Tumbuhnya Pemimpin dengan Perspektif Keadilan Sosial dan Ekologis", GLI menciptakan ruang untuk mengasah diri, berkolaborasi, dan memberikan dampak nyata. Pada tahun keempat GLI telah menumbuhkan 395 pemimpin baru yang tersebar di berbagai wilayah Indonesia dan terbagi menjadi 9 regional. Para pemimpin ini lahir dari kekhawatiran bersama terhadap krisis ekologi, bencana lingkungan, serta ancaman perubahan iklim yang terus meningkat. Dengan keberanian bertindak dan kemampuan kolaborasi lintas sektor, mereka kini menjadi garda terdepan dalam mendorong agenda penyelamatan lingkungan hidup melalui inisiatif-inisiatif yang berdampak nyata di masyarakat.</p>
        </div>
        <!-- Start Col -->
        <!-- <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item text-center">
            <div class="icon">
              <i class="lni-cog"></i>
            </div>
            <h4>Bootstrap 4</h4>
            <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
          </div>
        </div> -->
        <!-- End Col -->
        <!-- Start Col -->
        <!-- <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item text-center">
            <div class="icon">
              <i class="lni-brush"></i>
            </div>
            <h4>Slick Design</h4>
            <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
          </div>
        </div> -->
        <!-- End Col -->
        <!-- Start Col -->
        <!-- <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item text-center">
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <h4>Crafted with Love</h4>
            <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
          </div>
        </div> -->
        <!-- End Col -->

      </div>
    </div>
  </section>
  <!-- Services Section End -->


  <!-- Team section Start -->
  <section id="team" class="section" data-aos="fade-up">
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="team-text section-header text-center">
            <div>
              <h2 class="section-title">Our Speakers</h2>
              <div class="desc-text">
                <p>Prepare Yourslef for Green Leadership Indonesia</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row justify-content-center">
        <!-- Start Col -->
        @foreach ($speaker as $sp)
        <div class="col-lg-3 col-md-6 col-xs-12 mt-4" data-aos="fade-up" data-aos-delay="100">
          <div class="single-team">
            <div class="team-thumb">
              <img src="{{asset('img/speaker/' . $sp->foto)}}" class="img-fluid" alt="">
            </div>

            <div class="team-details">
              <div class="team-inner text-center">
                <h5 class="team-title">{{ Str::limit($sp->nama, 50) }}</h5>
                <p>{{ Str::limit($sp->materi, 100) }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Start Col -->

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