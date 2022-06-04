<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="/" class="nav-link">Website</a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-comments"></i>
    <span class="badge badge-danger navbar-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <a href="#" class="dropdown-item">
    <!-- Message Start -->
    <div class="media">
    <img src="assets/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
    <div class="media-body">
    <h3 class="dropdown-item-title">
        Lukman
    </h3>
    <p class="text-sm">Sudah Makan Belum ?</p>
    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Jam yang Lalu</p>
    </div>
    </div>
    <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <!-- Message Start -->
    <div class="media">
    <img src="assets/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
    <div class="media-body">
    <h3 class="dropdown-item-title">
        Rizky Ramadona
    </h3>
    <p class="text-sm">Mie ayam Atau Nasi Goreng ?</p>
    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 30 Menit yang lalu</p>
    </div>
    </div>
    <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <!-- Message Start -->
    <div class="media">
    <img src="assets/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
    <div class="media-body">
    <h3 class="dropdown-item-title">
        Nani Supriyani
    </h3>
    <p class="text-sm">Pak Minta password Wifi</p>
    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 10 Menit yang lalu</p>
    </div>
    </div>
    <!-- Message End -->
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Pesan</a>
    </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-bell"></i>
    <span class="badge badge-warning navbar-badge">5</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <span class="dropdown-header">5 Notifikasi</span>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <i class="fas fa-envelope mr-2"></i> 3 Pesan Baru
    <span class="float-right text-muted text-sm">3 Menit</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <i class="fas fa-file mr-2"></i> 2 Laporan
    <span class="float-right text-muted text-sm">2 Hari</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
    <i class="fas fa-expand-arrows-alt"></i>
    </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>
        </li>
    </ul>
    </nav>