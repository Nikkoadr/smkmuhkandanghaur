@extends('website.main')
@section('carouse_home')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Konsentrasi Keahlian</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Konsentrasi Keahlian</a>
        </div>
    </div>
</div>
@endsection
@section('content')
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
                                <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tkro.JPG') }}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">TKRO (TKR)</h4>
                                <p class="text-uppercase m-0">TEKNIK KENDARAAN RINGAN OTOMOTIF</p>
                            </div>
                        </div>
                    </div>                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/te.JPG') }}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">TE (TEI)</h4>
                                <p class="text-uppercase m-0">TEKNIK ELETRONIKA</p>
                            </div>
                        </div>
                    </div>                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tjkt.JPG') }}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">TJKT (TKJ)</h4>
                                <p class="text-uppercase m-0">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</p>
                            </div>
                        </div>
                    </div>                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tbsm.JPG') }}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">TBSM (TSM)</h4>
                                <p class="text-uppercase m-0">TEKNIK DAN BISNIS SEPEDA MOTOR</p>
                            </div>
                        </div>
                    </div>                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/website/img/program/tf.JPG') }}" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">TF (FKK)</h4>
                                <p class="text-uppercase m-0">TEKNOLOGI FARMASI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Program Keahlian -->
@endsection