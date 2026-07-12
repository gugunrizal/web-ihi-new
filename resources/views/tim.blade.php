@extends('layout.master')
@section('title', 'Tim Kami | IHI')
@section('content')
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container mt-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;" data-aos="fade-left" data-aos-delay="100">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tim Kami</h5>
            <h1 class="display-4">Pimpinan Institut Hijau Indonesia</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="{{asset('img/tim-ihi/chalid.jpg')}}" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Chalid Muhammad</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Ketua Institut Hijau Indonesia</h6>
                            <!-- <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> -->
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
                            <h3>Selamet Daroyni</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Direktur Eksekutif</h6>
                            <!-- <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> -->
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
                            <!-- <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> -->
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
                            <!-- <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> -->
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

        <div class="text-center mx-auto mb-5 mt-5" style="max-width: 500px;" data-aos="fade-up" data-aos-delay="300">
            <h1 class="display-6">Tim Penggerak Institut Hijau Indonesia</h1>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/2.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Muhammad Ichlassul Amal</h6>
                                <h6 class="fw-normal fst-italic">Alumni Green Leadership Indonesia Batch 1</h6>
                                <h6 class="fw-normal fst-italic">Project Officer Penggerak Indonesia dan Dunia 2050</h6>
                                <h6 class="fw-normal fst-italic">Project Officer (Organizing Committee) Civic Education</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/3.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Irva Wike Aprisa</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Youth Movement Angkatan 1 & 2
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/4.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Romadhini Putri Wulandari</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Storyteller & Artist (Organizing Committee) Green Leadership Indonesia Batch 2
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Officer Komunikasi Media Outreach Institut Hijau Indonesia
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/5.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Azi Gunawan A. Putra</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Laboratorium Keadilan Sosial dan Ekologi
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Staff Komunikasi Media Outreach Institut Hijau Indonesia
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/6.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Dr. Qurnia Indah Permata Sari, S.IP, M, M.Sos</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Editor in Chief Jurnal Peradaban Hijau
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/7.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Dr. Musthafa Haidar Shahab, S.Kom, S.Pd, M.Pd</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Youth Movement Angkatan 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Editor In Board Jurnal Peradaban Hijau
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400  ">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/8.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Muhammad Ghazali Rizky Pratama</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Weavers (Organizing Committee) Green Leadership Indonesia Batch 2
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Public Interest Lawyer
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Youth Movement Angkatan 2
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/9.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Fathul Bari, M.Pd</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 2
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Selection Editor Jurnal Peradaban Hijau
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400  ">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/10.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Tiara Dwici Pusponingrum</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Office Administrator Institut Hijau Indonesia
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/11.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Syekhoh Sultonah</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Green Youth Movement Angkatan 1
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Officer (Organizing Committee) Green Youth Movement Angkatan 2
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee You-Ring
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/12.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Muhammad Ridho Fauzan</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Storyteller & Artist (Organizing Committee) Green Leadership Indonesia Batch 4
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Staff Komunikasi Media Outreach Institut Hijau Indonesia
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/13.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Jauharotul Maftuchah</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Officer (Organizing Committee) You-Ring
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/14.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Muhammad Akmal Ramadhan</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Officer Laboratorium Keadilan Sosial dan Ekologi
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/15.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Faza Fatiyurrobbany</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Civic Education
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/16.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>M. Alif Akbar</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 3
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Civic Education
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/17.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Alya Nabila</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 4
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee Laboratorium Keadilan Sosial dan Ekologi
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/18.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Fachruddin Dokumalamo</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 4
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Project Officer (Organizing Committee) Green Leadership Indonesia Angkatan 5
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/19.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Ulfatur Roziana A.H</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 4
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Weavers (Organizing Committee) Green Leadership Indonesia Angkatan 5
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/20.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Zepanya Sihombing</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 4
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Builders (Organizing Committee) Green Leadership Indonesia Angkatan 5
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Organizing Committee You-Ring
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6 mt-3 shadow" data-aos="fade-up" data-aos-delay="400">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-6 h-100">
                            <img class="img-fluid h-100" src="{{asset('img/penggerak/21.png')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-6 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4 text-center">
                                <h6>Nabila Utbah .M</h6>
                                <h6 class="fw-normal fst-italic">
                                    Alumni Green Leadership Indonesia Batch 5
                                </h6>
                                <h6 class="fw-normal fst-italic">
                                    Staff Finance Institut Hijau Indonesia
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection