@extends('admin.layout.master')
@section('content')

<main class="nxl-container">
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('viewDashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('viewBerita')}}">Berita</a></li>
                    <li class="breadcrumb-item">Tambah</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Tambah Berita Baru</span>
                                        </h5>
                                    </div>
                                    <form action="{{ route('updateBerita', $berita->id) }}" method="PUT" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label class="fw-semibold">Kategori Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <select class="form-control" data-select2-selector="status" name="kategori" id="kategori">
                                                    <option value="GLI" data-bg="bg-success">GLI</option>
                                                    <option value="Civic" data-bg="bg-success">Civic</option>
                                                    <option value="GROW" data-bg="bg-success">GROW</option>
                                                    <option value="SUAR" data-bg="bg-success">SUAR</option>
                                                    <option value="Kotak Suara Lingkunan" data-bg="bg-success">Kotak Suara Lingkungan</option>
                                                    <option value="Ekososlab" data-bg="bg-success">Ekososlab</option>
                                                    <option value="Blog" data-bg="bg-success">Blog</option>
                                                    <option value="After Class Report" data-bg="bg-success">After Class Report</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label for="judul" class="fw-semibold">Judul Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-group form-sm">
                                                    <div class="input-group-text"><i class="fa-solid fa-address-book"></i></div>
                                                    <input type="text" name="judul" id="judul" class="form-control" id="judul" value="{{$berita->judul}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label for="penulis" class="fw-semibold">Penulis: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-user"></i></i></div>
                                                    <input type="text" name="penulis" id="penulis" class="form-control" id="penulis" value="{{$berita->penulis}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label for="tanggal" class="fw-semibold">Tanggal Rilis: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-calendar"></i></div>
                                                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{$berita->tanggal_rilis}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label for="ringkasan" class="fw-semibold">Ringkasan Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-clipboard-list"></i></div>
                                                    <input type="text" name="ringkasan" id="ringkasan" class="form-control" id="ringkasan" value="{{$berita->ringkasan_berita}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label for="editor" class="fw-semibold">Konten Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <textarea id="editor" name="editor" class="form-control">{{$berita->isi_berita}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label class="fw-semibold" for="gambar">Thumbnail Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="mb-4 mb-md-0 d-flex gap-4 your-brand">
                                                    <input class="file-upload form-control" type="file" name="thumbnail" id="thumbnail">
                                                </div>

                                                <div class="d-flex flex-column gap-1">
                                                    <p class="fs-11 text-gray-500"># Upload Thumbnail Berita # Max upload size 2mb # Allowed file types: png, jpg, jpeg</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                                <label class="fw-semibold" for="status">Status Berita: </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <select class="form-control" data-select2-selector="status" name="status" id="status">
                                                    <option value="publish" data-bg="bg-success" {{ $berita->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                                    <option value="draft" data-bg="bg-warning" {{ $berita->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                    <option value="archive" data-bg="bg-danger" {{ $berita->status == 'archive' ? 'selected' : '' }}>Archive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-2">
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="{{route('viewBerita')}}" class="btn btn-danger">Kembali</a>
                                            </div>
                                            <div class="col-lg-2">
                                                <button class="btn btn-primary" type="submit">Tambah</button>
                                                <!-- <a href="#" class="btn btn-primary">Tambah</a> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Footer ] start -->
    @include('admin.layout.footer')
    <!-- [ Footer ] end -->
</main>

@endsection