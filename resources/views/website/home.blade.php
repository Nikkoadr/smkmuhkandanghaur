@extends('website.main')
@section('carouse_home')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('assets/website/img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sekolah Pusat Keunggulan</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">SMK Muhammadiyah Kandanghaur</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('assets/website/img/carousel-2.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sekolah Pusat Keunggulan</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">SMK Muhammadiyah Kandanghaur</h1>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
@section('content')
<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Semua Peserta Didik</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">1948</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Konsentrasi Keahlian</h5>
                        <h1 class="mb-0" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Tenaga Pendidik dan Kependidikan</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">103</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="tentang">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Tentang</h5>
                    <h1 class="mb-0">SMK Muhammadiyah Kandanghaur</h1>
                </div>
                <p style="font-weight: bold;">Visi</p>
                <p class="mb-4">Bergerak Maju Menjadi Yang Terdepan</p>
                <p style="font-weight: bold;">Misi</p>
                <p>Mengembangkan ilmu pengetahuan dan penguasaan teknologi berdasarkan minat, bakat serta potensi peserta didik di lingkungan sekolah dan masyarakat.</p>
                <p>meningkatkan mutu lulusan untuk bekerja, berwirausaha dan melanjutkan pendidikan yang lebih tinggi.</p>
                <p>Mengamalkan nilai-nilai keagamaan dalam kehidupan sehari-hari di sekolah, keluarga dan masyarakat.</p>
                <p>Meningkatkan kesadaran warga sekolah dalam upaya melestarikan lingkungan hidup.</p>
                <p>Meningkatkan kompetensi peserta didik dalam penguasaan/peningkatan ilmu pengetahuan serta teknologi yang berwawasan regional, nasional dan global serta peduli dan berbudaya lingkungan.</p>
                <p>Menjalankan pelayanan yang terbaik.</p>
                <p>menumbuhkan serta mewujudkan jiwa patriotis dan nasionalis.</p>

                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pusat Keunggulan</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Guru Profesional</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>10 Jam Kegiatan Belajar</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Biaya Masuk Terjangkau</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Hubungi Kami</h5>
                        <h4 class="text-primary mb-0">(0234) 507239</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/website/img/about.png') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End --> 

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Kenapa Pilih SMK Muhammadiyah Kandanghaur ?</h5>
            <h2 class="mb-0">Memberikan pendidikan menengah kejuruan secara profesional untuk membentuk tamatan yang berkependidikan</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Pusat Keunggulan </h4>
                        <p class="mb-0">SMK dengan kompetensi keahlian tertentu dalam peningkatan kualitas dan kinerja, 
                            yang diperkuat melalui kemitraan dan penyelarasan dengan dunia usaha, dunia industri, dunia kerja, 
                            yang akhirnya menjadi SMK rujukan yang dapat berfungsi sebagai sekolah penggerak dan pusat peningkatan kualitas dan kinerja SMK lainnya.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Biaya Masuk Terjangkau</h4>
                        <p class="mb-0">Biaya Masuk di SMK Muhammadiyah Kandanghaur Sangat Terjangkau dan juga bisa di angsur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets/website/img/fasilitas.JPG') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Guru Profesional</h4>
                        <p class="mb-0">Guru yang mengajar di SMK Muhammadiyah Kandanghaur sangat profesional dibidangnya seperti kemampuan guru untuk melakukan tugas pokoknya sebagai pendidik dan pengajar meliputi kemampuan merencanakan, melakukan, dan melaksanakan evaluasi pembelajaran.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-clock text-white"></i>
                        </div>
                        <h4>10/5 Jam Kegiatan Belajar</h4>
                        <p class="mb-0">Kegiatan Belajar mengajar di SMK Muhammadiyah Kandanghaur selama 10 Jam 5 Hari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->

<!-- Program Keahlian -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="program">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Konsentrasi Keahlian</h5>
            <h1 class="mb-0">Konsentrasi Keahlian yang ada di SMK Muhammadiyah Kandanghaur </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tpfl.JPG') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">TPFL (TPL)</h4>
                        <p class="text-uppercase m-0">TEKNIK PENGELASAN DAN FABRIKASI LOGAM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tkro.JPG')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">TKRO (TKR)</h4>
                        <p class="text-uppercase m-0">TEKNIK KENDARAAN RINGAN OTOMOTIF</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/lihat.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary"><a href="{{ route('program') }}">KLIK DISINI</a></h4>
                        <p class="text-uppercase m-0">untuk melihat lebih banyak program keahlian</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Program Keahlian -->

<!-- Fasilitas -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="fasilitas">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Fasilitas</h5>
            <h1 class="mb-0">Semua Fasilitas Yang ada di SMK Muhammadiyah Kandanghaur</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i style="font-size: 40px;" class="fas fa-mosque text-white"></i>
                    </div>
                    <h4 class="mb-3">Masjid</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i style="font-size: 40px;" class="fa fa-book-open text-white"></i>
                    </div>
                    <h4 class="mb-3">Perpustakaan</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3"> <a style="color: #FFFFFF;" href="{{ route('fasilitas') }}"> KLIK DISINI</a></h3>
                    <p class="text-white mb-3">UNTUK MELIHAT SEMUA FASILITAS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fasilitas -->

<!-- EKSTRAKURIKULER -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="ekstrakurikuler">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">EKSTRAKURIKULER</h5>
            <h1 class="mb-0">Ekstrakurikuler yang ada di SMK Muhammadiyah Kandanghaur </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/sispala.jpg') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">SISPALA</h4>
                        <p class="text-uppercase m-0">SISWA PECINTA ALAM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/hizbulwathan.jpg') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Hizbul Wathan</h4>
                        <p class="text-uppercase m-0">Hizbul Wathan</p>
                    </div>
                </div>
            </div>                
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/website/img/lihat.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary"><a href="{{ route('ekstrakurikuler') }}">KLIK DISINI</a></h4>
                        <p class="text-uppercase m-0">untuk melihat lebih banyak Ekstrakurikuler</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EKSTRAKURIKULER -->

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="berita">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Berita Terakhir</h5>
            <h1 class="mb-0">Baca Berita Terakhir SMK Muhammadiyah Kandanghaur</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/website/img/berita/jobfair.jpg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">BKK</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>Ali Imron</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>15 Agustus, 2023</small>
                        </div>
                        <h4 class="mb-3">Job Fair</h4>
                        <p>Acara Job Fair yang di selenggarakan oleh BKK SMK Muhammadiyah Kandanghaur</p>
                        {{-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/website/img/berita/mpls.jpg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">SMK PK</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>Rudi Jaya Sakti</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>17 Juli, 2023</small>
                        </div>
                        <h4 class="mb-3">Acara MPLS</h4>
                        <p>MPLS SMK muhammadiyah Kandanghaur yang diselenggarakan oleh tim Kesiswaan</p>
                        {{-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/website/img/berita/upacara.jpg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">EKSTRAKURIKULER</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>Rizky Ramadona</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>17 Agustus, 2023</small>
                        </div>
                        <h4 class="mb-3">Upacara Bendera Hut RI ke 78</h4>
                        <p>Upacara memperingati hari kemerdekaan indonesia yang ke 78</p>
                        {{-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Start -->
@endsection