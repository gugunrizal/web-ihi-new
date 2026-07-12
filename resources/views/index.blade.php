@extends('layout.master')
@section('title', 'Beranda | IHI')
@section('body-class', 'home-page')
@section('content')
<!-- Hero Start -->
<section class="hero">
    @foreach ($data as $berita)
    <div class="slide {{ $loop->first ? 'active' : '' }}">
        <img src="{{asset('img/' . $berita->gambar_berita)}}" class="hero-bg">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>{{ $berita->judul }}</h1>
            <a href="{{route('viewDetailPublikasi', $berita->slug)}}" class="btn-berita">
                Baca Lebih Lanjut
            </a>
        </div>
    </div>
    @endforeach
</section>

<!-- <div class="slide">
        <img src="{{asset('img/gambar_berita/13.jpg')}}" class="hero-bg">
        <div class="hero-content">
            <div class="overlay"></div>
            <h1>Judul Slide 2</h1>
            <a href="#" class="btn">
                Baca Lebih Lanjut
            </a>
        </div>
    </div>

    <div class="slide">
        <img src="{{asset('img/gambar_berita/14.jpg')}}" class="hero-bg">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Judul Slide 3</h1>
            <a href="#" class="btn">
                Baca Lebih Lanjut
            </a>
        </div>
    </div> -->

<!-- <img src="{{asset('img/bg.JPG')}}" alt="Hero Image" class="hero-bg">
    <img src="{{asset('img/black-logo-ihi.png')}}" alt="Hero Image" class="hero-bg">
    <div class="overlay"></div>

    <div class="hero-content">
        <h1>
            Bagaimana Indonesia Bisa Mendorong Transisi
            Energi Di Tengah Perubahan Politik Global?
        </h1>

        <a href="#" class="btn">
            Baca Lebih Lanjut
        </a>
    </div> -->
<!-- </section> -->

<!-- <div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5"
                    style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Institut Hijau Indonesia</h5>
                <h2 class="display-1 text-white mb-md-4"><b>Social and Ecological Justice</b></h2>
                <div class="pt-2">
                    <a href="#!" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                    <a href="#!" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Hero End -->


<!-- About Start -->
<section class="tentang-kami" id="tentang-kami">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 about-images" data-aos="fade-right">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="{{asset('img/portfolio/ihi1.JPG')}}" class="img-fluid rounded" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-lg-12">
                                    <img src="{{asset('img/portfolio/ihi2.JPG')}}" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{asset('img/portfolio/ihi3.JPG')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tentang Kami</h5>
                        <h1 class="display-4"><b>Institut Hijau Indonesia</b></h1>
                    </div>
                    <p>Institut hijau Indonesia didirikan pada tahun 2008, lembaga ini sengaja dihadirkan untuk menguatkan narasi-narasi tentang keadilan sosial dan keadilan lingkungan hidup. Kemudian, memfasilitasi lahirnya atau tumbuhnya pemimpin-pemimpin yang memiliki keadilan sosial dan ekologi di beragam wilayah dan sektor, serta, mengembangkan strategi kampanye popular agar bisa menjangkau publik luas yang punya perhatian terhadap isu lingkungan hidup
                        Institut Hijau Indonesia secara sungguh-sungguh ingin membangun peradaban hijau Indonesia. Di bawah Yayasan Peradaban Hijau Indonesia, Institut Hijau Indonesia menjadi wadah untuk menuju peradaban Hijau Indonesia yang lebih adil dan lestari.</p>
                    <a href="#" class="btn btn-success"> Selengkapnya </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About End -->


<!-- Program Kami Start -->
<section class="program-kami" id="program-kami" data-aos="fade-left" style="background-color: #fdfdfd;">
    <div class="container-fluid py-5" data-aos="fade-left">
        <div class="container" data-aos="fade-right">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Program Kami</h5>
                <h1 class="display-6"><b>Kegiatan Institut Hijau Indonesia</b></h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-GLI.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Green Leadership Indonesia</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{route('viewGreenLeadership')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-GYM.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Green Youth Movement</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-Greenpil.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Green Public Interest Lawyer</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-Ekososlab.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Laboratorium Keadilan Sosial dan Ekologis</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-JPH.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Jurnal Peradaban Hijau</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-Civic.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">Civic Education</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="{{route('viewCivicEducation')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center shadow">
                        <div class="service-icon mb-4">
                            <img src="{{asset('img/logo-program/Logo-You Rings.png')}}" class="img-fluid img-program" alt="">
                        </div>
                        <h4 class="mb-3">YOU-RINGS</h4>
                        <a class="btn btn-lg btn-success rounded-pill" href="#!">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Program Kami End -->


<!-- Galeri Kegiatan Start -->
<section class="galeri-kegiatan" id="galeri-kegiatan" data-aos="fade-right">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Galeri Kegiatan</h5>
                <h1 class="display-6"><b>Galeri Kegiatan Institut Hijau Indonesia</b></h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('img/portfolio/gli1.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-5">
                        <p>Green Leadership Indonesia</p>
                        <!-- <a href="#!" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Galeri Kegiatan End -->


<!-- Team Start -->
<!-- <div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tim IHI</h5>
            <h1 class="display-6">Pimpinan Institut Hijau Indonesia</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative">
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{asset('img/tim-ihi/chalid.jpg')}}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Chalid Muhammad</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Ketua</h6>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#!"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{asset('img/tim-ihi/selamet.jpg')}}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Selamet Daroini</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Direktur</h6>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#!"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{asset('img/tim-ihi/akhmad.jpg')}}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Akhmad Supiani</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Manager Finance</h6>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#!"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{asset('img/tim-ihi/zen.jpg')}}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Zen Smith</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Safe Guard</h6>
                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#!"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#!"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->

@endsection