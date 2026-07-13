@extends('layout.master')
@section('title', 'Beranda | IHI')
@section('body-class', 'home-page')
@section('content')
<!-- Hero Start -->
<section class="hero">
    @foreach ($data as $berita)
    <div class="slide {{ $loop->first ? 'active' : '' }}">
        <img src="{{asset('storage/' . $berita->gambar_berita)}}" class="hero-bg">
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

@endsection