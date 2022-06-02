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
                                <label for="kelamin"><p class="p-3">Jenis Kelamin :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="kelamin" type="text" class="form-control border-0 bg-light px-4" placeholder="Jenis Kelamin" style="height: 55px;">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="ttl"><p class="p-3">Tempat, Tanggal Lahir :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-5">
                                <input id="ttl" type="text" class="form-control border-0 bg-light px-4" placeholder="Tempat Lahir" style="height: 55px;">
                            </div>                            
                            <div class="col-4">
                                <input type="date" type="text" class="form-control border-0 bg-light px-4" placeholder="Tanggal Lahir" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="asal_sekolah"><p class="p-3">Asal Sekolah :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="asal_sekolah" type="text" class="form-control border-0 bg-light px-4" placeholder="Asal Sekolah" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_siswa/siswi"><p class="p-3">Nomor Hp Siswa/Siswi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_siswa/siswi" type="number" class="form-control border-0 bg-light px-4" placeholder="Nomor HP Siswa/Siswi Baru" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_wali"><p class="p-3">Nomor HP Wali :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_wali" type="number" class="form-control border-0 bg-light px-4" placeholder="Nomor HP Wali" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="alamat"><p class="p-3">Alamat :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <textarea id="alamat" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Alamat"></textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="program_keahlian"><p class="p-3">Program Keahlian :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="program_keahlian" type="text" class="form-control border-0 bg-light px-4" style="height: 55px;">
                                <option value="">Pilih Program Keahlian</option>
                                <option value="TPFL">TEKNIK PENGELASAN DAN FABRIKASI LOGAM ( TPFL )</option>
                                <option value="TKRO">TEKNIK KENDARAAN RINGAN OTOMOTIF( TKRO )</option>
                                <option value="TE">TEKNIK ELETRONIKA ( TE )</option>
                                <option value="TJKT">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI ( TJKT )</option>
                                <option value="TBSM">TEKNIK DAN BISNIS SEPEDA MOTOR ( TBSM )</option>
                                <option value="TF">TEKNOLOGI FARMASI ( TF )</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="referensi"><p class="p-3">Referensi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="referensi" type="text" class="form-control border-0 bg-light px-4" placeholder="Contoh : Sifulan X TKRO 6" style="height: 55px;">
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