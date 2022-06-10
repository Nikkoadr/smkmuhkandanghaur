@extends('website.main')
@section('carouse_home')
<div style="margin-bottom: 20px;" class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Form PPDB SMK Muhammadiyah Kandanghaur</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Form PPDB</a>
        </div>
    </div>
</div>
@endsection
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div style="background: rgba(128, 128, 128, 0.158); border-radius: 10px;" class="row p-5">
                <div class="wow slideInUp" data-wow-delay="0.3s">
                    <form action="tambah_peserta_didik_baru_logout" method="POST">
                        @include('website.ppdb.form_tambah')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection