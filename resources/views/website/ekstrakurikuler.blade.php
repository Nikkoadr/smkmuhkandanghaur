@extends('website.main')
@section('carouse_home')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Ekstrakurikuler Sekolah</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Ekstrakurikuler</a>
        </div>
    </div>
</div>
@endsection
@section('content')
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
                            <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/voli.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Voli</h4>
                            <p class="text-uppercase m-0">Voli</p>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/paskibra.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Paskibraka</h4>
                            <p class="text-uppercase m-0">Pasukan Pengibar Bendera Pusaka</p>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/tapaksuci.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Tapak Suci</h4>
                            <p class="text-uppercase m-0">Tapak Suci</p>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/website/img/eskul/tari.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Seni Tari</h4>
                            <p class="text-uppercase m-0">Seni Tari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EKSTRAKURIKULER -->
@endsection