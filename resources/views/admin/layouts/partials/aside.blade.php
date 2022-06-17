<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
    <img src="assets/website/img/logo.png" alt="SMK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SMK MUH KDH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="assets/admin/dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
    </div>
    </div>

    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
        </div>
        </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
    <li class="nav-item">
        <a href="dashboard" class="nav-link {{ $url === "Dashboard" ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Dashboard
        </p>
        </a>
        </li>
        <li class="nav-item">
            <a href="admin_ppdb" class="nav-link {{ $url === "Admin_ppdb" ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-user-plus"></i>
            <p>
            PPDB
            </p>
            </a>
            </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fa-solid fa-newspaper"></i>
    <p>
    Berita
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="admin_berita" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Semua Berita</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="komentar" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Komentar</p>
    </a>
    </li>
    </ul>
    </li>
    </ul>
    </nav>
    </div>
    </aside>