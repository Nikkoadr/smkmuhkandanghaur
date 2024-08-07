<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <div class="grup">
        <a href="/" class="navbar-brand p-0">
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
                <a class="nav-link {{ $url === "program" ? 'active' : '' }}" href="program">KONSENTRASI KEAHLIAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "fasilitas" ? 'active' : '' }}" href="fasilitas">FASILITAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $url === "ekstrakurikuler" ? 'active' : '' }}" href="ekstrakurikuler">EKSTRAKURIKULER</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ $url === "berita" ? 'active' : '' }}" href="berita">BERITA</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ $url === "kontak" ? 'active' : '' }}" href="kontak">KONTAK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://ppdb.smkmuhkandanghaur.sch.id/">PPDB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://tracerstudy.kemdikbud.go.id/">TRACERSTUDY</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MANAGE</a>
                <div class="dropdown-menu m-0">
                    @if (Route::has('login'))
                    @auth
                    <a class="dropdown-item" href="{{ url('dashboard') }}">Admin</a>
                    @else
                    <a class="dropdown-item" href="{{ route('login') }}">Masuk</a>
                    @endauth
                    @endif
                    <a class="dropdown-item" href="https://erapor.smkmuhkandanghaur.sch.id">E-Rapor</a>
                    <a class="dropdown-item" href="https://elearning.smkmuhkandanghaur.sch.id">E-Learning</a>
                </div>
            </li>
        </ul>
    </div>
</nav>