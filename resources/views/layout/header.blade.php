<div class="container-fluid sticky-top shadow-sm" style='background-color: green;'>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0">
            <a href="{{route('viewHome')}}" class="navbar-brand">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <img src="{{asset('img/logo-ihi.png')}}" alt="" style="max-width: 80px;">
                    <!-- <span class="brand-text">
                        <h3 class="m-0 text-uppercase text-white">INSTITUT HIJAU INDONESIA</h3>
                    </span> -->
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('viewHome')}}" class="nav-item nav-link {{ request()->routeIs('viewHome') ? 'active' : '' }} text-white">Beranda</a>
                    <a href="#tentang-kami" class="nav-item nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }} text-white">Tentang Kami</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Program Kami</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('viewGreenLeadership')}}" class="dropdown-item">Green Leadership Indonesia</a>
                            <a href="{{route('viewGreenYouthMovement')}}" class="dropdown-item">Green Youth Movement</a>
                            <a href="{{route('viewGreenPublicInterestLawyer')}}" class="dropdown-item">Green Public Interest Lawyer</a>
                            <a href="{{route('viewLaboratoriumKeadilanSosialDanEkologis')}}" class="dropdown-item">Laboratorium Keadilan Sosial dan Ekologis</a>
                            <a href="{{route('viewJurnalPeradabanHijau')}}" class="dropdown-item">Jurnal Peradaban Hijau</a>
                            <a href="{{route('viewCivicEducation')}}" class="dropdown-item">Civic Education</a>
                            <a href="{{route('viewYouRings')}}" class="dropdown-item">You-Rings</a>
                        </div>
                    </div>
                    <a href="{{route('viewTim')}}" class="nav-item nav-link {{ request()->routeIs('viewTim') ? 'active' : '' }} text-white">Tim</a>
                    <a href="{{route('viewHome')}}/#galeri-kegiatan" class="nav-item nav-link {{ request()->routeIs('galeri') ? 'active' : '' }} text-white">Galeri</a>
                    <a href="{{route('viewPublikasi')}}" class="nav-item nav-link {{ request()->routeIs('viewPublikasi') ? 'active' : '' }} text-white">Publikasi</a>
                    <a href="{{route('viewKontakKami')}}" class="nav-item nav-link {{ request()->routeIs('viewKontakKami') ? 'active' : '' }} text-white">Kontak Kami</a>
                </div>
            </div>
        </nav>
    </div>
</div>