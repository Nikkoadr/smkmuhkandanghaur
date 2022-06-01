<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <div class="grup">
        <a href="index.html" class="navbar-brand p-0">
            <img style="width: 13%;" src="{{ asset('assets/website/img/logo.png') }}" alt="">
        </a>
        <button style="float: right; margin-top:2%;"  class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav ms-auto py-0">
            <li class="nav-item">
                <a class="nav-link {{ $url === "home" ? 'active' : '' }}" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "program" ? 'active' : '' }}" href="program">PROGRAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "fasilitas" ? 'active' : '' }}" href="fasilitas">FASILITAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "ekstrakurikuler" ? 'active' : '' }}" href="ekstrakurikuler">EKSTRAKURIKULER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "berita" ? 'active' : '' }}" href="berita">BERITA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "kontak" ? 'active' : '' }}" href="kontak">KONTAK</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PPDB</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">FORM PPDB</a>
                    <a href="#" class="dropdown-item">CEK DATA PPDB</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MANAGE</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">MASUK</a>
                    <a href="#" class="dropdown-item">E-RAPOR</a>
                </div>
            </li>
        </ul>
    </div>
</nav>