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
                    <li class="breadcrumb-item">Berita</li>
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
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <div class="dropdown filter-dropdown">
                            <a class="btn btn-md btn-light-brand" href="{{route('viewTambahBerita')}}">
                                <i class="fas fa-plus fa-sm"></i>
                                <span>Tambah Berita</span>
                            </a>
                        </div>
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
                <!-- [Latest Leads] start -->
                <div class="col-xxl-12">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Berita Institut Hijau Indonesia</h5>
                            <div class="card-header-action">
                                <div class="card-header-btn">
                                    <!-- <div data-bs-toggle="tooltip" title="Delete">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                    </div> -->
                                    <div data-bs-toggle="tooltip" title="Refresh">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body custom-card-action p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="border-b">
                                            <th scope="row">No</th>
                                            <th>Judul Berita</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="row">No</th>
                                            <th>Judul Berita</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($berita as $b)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    {{ Str::limit($b->judul, 20) }}
                                                </div>
                                            </td>
                                            <td>{{ Str::limit($b->penulis, 20) }}</td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($b->tanggal_rilis)->translatedFormat('d F Y') }}
                                            </td>
                                            <td>{{$b->kategori}}</td>
                                            <td>{{$b->status}}</td>
                                            <td>
                                                <img src="{{asset('img/'.$b->gambar_berita)}}" alt="" width="100px">
                                            </td>
                                            <td>
                                                <a href="{{route('hapusBerita', $b->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                    <i class="fas fa-trash"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('viewEditBerita', $b->id)}}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- [Latest Leads] end -->
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Footer ] start -->
    @include('admin.layout.footer')
    <!-- [ Footer ] end -->
</main>
@endsection