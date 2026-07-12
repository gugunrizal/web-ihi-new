<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <h6 class="logo logo-lg">INSTITUT HIJAU INDONESIA</h6>
                <!-- <img src="{{asset('img/logo-ihi.png')}}" style="background-color: black;" alt="" class="logo logo-lg" /> -->
                <img src="{{asset('img/logo-ihi.png')}}" style="background-color: black;" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Menu</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('viewDashboard')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-solid fa-house"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('viewBerita')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-solid fa-newspaper"></i></span>
                        <span class="nxl-mtext">Berita</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-solid fa-image"></i></span>
                        <span class="nxl-mtext">Foto Berita</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>