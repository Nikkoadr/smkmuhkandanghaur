@extends('admin.layouts.admin_main')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cetak.min.css') }}">
    <style>
        ol > li{
            padding:5px 10px;
        }
    </style>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin Penerimaan Peserta Didik Baru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Admin PPDB</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Print Peserta Didik Baru</h3>
              </div>
              <div>
                <a href="admin_ppdb" type="button" class="btn btn-primary" style="float: right; margin: 15px;"><i class="fas fa-times"></i> Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    <div class="page">
        <table width="100%">
            <tr>
                <td width="100px" align="center" valign="middle">
                    <img src="{{asset('assets/admin/dist/img/dikdasmenmuh.png')}}" width="80%">
                </td>
                <td align="center" valign="middle">
                    <b style="color:#007bff;font-size:10pt !important;">MAJELIS PENDIDIKAN DASAR DAN MENENGAH</b><br>
                    <b style="color:#007bff;font-size:10pt !important;">PIMPINAN DAERAH MUHAMMADIYAH INDRAMAYU</b><br>
                    <b style="color:#007bff;font-size:14pt !important;">SMK MUHAMMADIYAH KANDANGHAUR</b><br>
                    <b style="color:#007bff;;font-size:14pt !important;">SEKOLAH PUSAT KEUNGGULAN (PK)</b><br>
                    <b>Terakreditasi "A" (Unggul)</b><br>
                    <b>Nomor : 02.00/375/BAP-SM/XI/2008</b>
                    <div style="height:20px"></div>
                </td>
                <td width="100px" align="center" valign="middle">
                    <img src="{{asset('assets/website/img/logo.png')}}" width="80%">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <small style="font-size:8pt !important;">Paket Keahlian : Teknik Otomotif, Teknik Pengelasan dan Fabrikasi Logam, Teknik Elektronika, Teknik Jaringan Komputer dan Telekomunikasi, Teknologi Farmasi</small><br>
                    <small style="font-size:8pt !important;">Jl. Raya Karanganyar No. 28/A Kec. Kandanghaur Kab. Indramayu 45254 Telp. (0234) 507239, email : smkmuhkdh@gmail.com website : smkmuhkandanghaur.sch.id</small>
                </td>
            </tr>
        </table>
        <div style="height:5px;border-bottom:solid 2px black;border-top:solid 1px black;margin:10px 0"></div>
        <div style="text-align:center; margin:40px auto 60px auto">
            <b style="font-size:14pt !important;">FORMULIR PENDAFTARAN ONLINE</b>
        </div>
        <div style="text-align:left; margin:20px auto 20px auto">
            <b style="font-size:12pt !important;">Code Pendaftaran : </b>
        </div>
        <table width="100%" class="it-grid">
            <tr style="background:#f6ff00">
                <td style="padding:10px" colspan="2" align="center"><b style="font-size:12pt !important;">IDENTITAS PESERTA DIDIK BARU</b></td>
            </tr>
            <tr>
                <td width="250px">Nama Lengkap Peserta Didik</td>
                <td></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor HP Aktif Peserta Didik</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor HP Aktif Orang Tua</td>
                <td></td>
            </tr>
            <tr>
                <td>Jurusan Yang Diminati</td>
                <td></td>
            </tr>
            <tr>
                <td>Referensi</td>
                <td></td>
            </tr>
        </table>
        <table width="100%" style="margin:20px auto">
            <tr>
                <td width="50%">
                    <div style="border:solid 1px black; width:250px; padding:10px">
                       <b>Catatan :</b> <br>
                        Harap disimpan dengan baik bukti Pendaftaran Online ini.
                        <br><br>
                       <b>Contact Person PPDB:</b> 
                        <br>
                        Rifa Hamidah, S.Pd. : 0822 9977 1110
                        <br>
                        Afandi, S.Pd. : 0812 2065 570 
                    </div>
                </td>
                <td align="center" valign="top" style=" background-position :30%; background-repeat: no-repeat; background-size: 100px 100px; background-image: url('{{asset('assets/admin/dist/img/stempel_ppdb.png')}}');">
                    Indramayu, <br>
                    &nbsp;<br>
                    <br>
                    &nbsp;<br>
                    Panitia PPDB TA.<br>
                    SMK Muhammadiyah Kandanghaur
                </td>
            </tr>
        </table>
        <div style="text-align: center">
            Jangan lupa Follow, Like and Subscribe Media Sosial Sekolah Kami yaaa...
        </div>
        <table width="100%" style="margin-top:40px">
            <tr>
                <td width="60px">
                    <img src="https://img2.pngdownload.id/20171202/5b3/facebook-picture-5a22b43e9826a5.9836884015122238066232.jpg" width="50px">
                </td>
                <td>SMK Muhammadiyah Kandanghaur</td>
            </tr>
            <tr>
                <td>
                    <img src="https://1.bp.blogspot.com/-FWcDAk4ya0o/V15WPwj-J-I/AAAAAAAAALw/CsKpzk5WuV8K8M7ARKfU-mA_gmtDyTmRACKgB/s1600/maxresdefault.png" width="50px">
                </td>
                <td>
                    Smkmuhkandanghaur
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://1.bp.blogspot.com/-W3R9CzV2AWk/YCo9Ev2CcVI/AAAAAAAAD88/qymHYkY-wUwHrClgIXxaZVL_echTZbD0ACLcBGAsYHQ/s1600/Logo%2BYoutube.png" width="50px">
                </td>
                <td>
                    SMK Muhammadiyah Kandanghaur
                </td>
            </tr>
        </table>
    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script>
    window.print();
</script>
@endsection