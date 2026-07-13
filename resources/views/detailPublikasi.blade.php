@extends('layout.master')
@section('title', 'Publikasi | IHI')
@section('content')
<!-- Blog Start -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            @foreach ($data as $d)

            <div class="mb-5">
                <img class="img-fluid w-100 rounded mb-5" src="{{asset('storage/' . $d->gambar_berita)}}" alt="">
                <h1 class="mb-4">{{$d->judul}}</h1>
                <div class="d-flex mb-4">
                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{$d->penulis}}</small>
                    <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>
                        {{ \Carbon\Carbon::parse($d->tanggal_rilis)->translatedFormat('d F Y') }}
                    </small>
                    <!-- <small class="me-3"><i class="far fa-folder text-primary me-2"></i>Web Design</small> -->
                    <!-- <small class="me-3"><i class="far fa-comments text-primary me-2"></i>15 Comments</small> -->
                </div>
                <p style="text-align: justify;"><?= htmlspecialchars_decode($d->isi_berita); ?></p>

                <!-- <div class="d-flex justify-content-between bg-light rounded p-4 mt-4 mb-4">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle me-2" src="img/user.jpg" width="40" height="40" alt="">
                        <span>John Doe</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</span>
                        <span class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</span>
                    </div>
                </div> -->
            </div>

            @endforeach
            <!-- Blog Detail End -->

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">

            <!-- Recent Post Start -->
            <div class="mb-5">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Recent Post</h4>
                @foreach ($dataBerita as $d)

                <div class="d-flex rounded overflow-hidden mb-3">
                    <img class="img-fluid" src="{{ asset('storage/' . $d->gambar_berita) }}"
                        style="width: 100px; height: 100px; object-fit: cover;" alt="">
                    <a href="{{route('viewDetailPublikasi', ['slug' => $d->slug])}}" class="h6 d-flex align-items-center bg-light px-3 mb-0">
                        {{$d->judul}}
                    </a>
                </div>
                @endforeach
            </div>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
            </div>
            <!-- Image End -->

        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->
@endsection