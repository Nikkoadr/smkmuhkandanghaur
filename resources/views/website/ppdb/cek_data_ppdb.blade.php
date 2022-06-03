@extends('website.main')
@section('carouse_home')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Cek Data PPDB SMK Muhammadiyah Kandanghaur</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Cek Data PPDB</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row">
            <div class="wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="nama"><p class="p-3">Nama Lengkap :<span style="color: red">*</span></p></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="nama" class="form-control border-0 bg-light px-4" placeholder="Nama Lengkap" style="height: 55px;">
                        </div>                          
                        <div class="col-md-3">
                            <label for="ttl"><p class="p-3">Tanggal Lahir Peserta Didik Baru :<span style="color: red">*</span></p></label>
                        </div>                      
                        <div class="col-9">
                            <input type="date" type="text" class="form-control border-0 bg-light px-4" placeholder="Tanggal Lahir" style="height: 55px;">
                        </div>
                        <div class="col-md-3">
                            <label for="daftar"><p class="p-3">Bertanda (<span style="color: red">*</span>) Wajib diisi</p></label>
                        </div>
                        <div class="col-9">
                            <button class="btn btn-primary w-100 py-3" type="submit">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection