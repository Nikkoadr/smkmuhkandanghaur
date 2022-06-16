<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Pendaftaran PPDB</title>
    <link rel="stylesheet" href="{{ asset('css/cetak.min.css') }}">
    <style>
        *{
            font-size: 10pt !important;
            font-family: 'Times New Roman', Times, serif !important;
        }
        ol > li{
            padding:5px 10px;
        }
    </style>
</head>
<body>
@forelse($participants as $participant)
    <div class="page">
        <table width="100%">
            <tr>
                <td width="100px" align="center" valign="middle">
                    <img src="{{asset('assets/welcome/img/dikdasmenmuh.png')}}" width="80%">
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
                    <img src="{{asset('assets/welcome/img/logo.png')}}" width="80%">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <small style="font-size:8pt !important;">Program Keahlian : Teknik Otomotif, Teknik Pengelasan dan Fabrikasi Logam, Teknik Elektronika, Teknik Jaringan Komputer dan Telekomunikasi, Teknologi Farmasi</small><br>
                    <small style="font-size:8pt !important;">Jl. Raya Karanganyar No. 28/A Kec. Kandanghaur Kab. Indramayu 45254 Telp. (0234) 507239, email : smkmuhkdh@gmail.com website : smkmuhkandanghaur.sch.id</small>
                </td>
            </tr>
        </table>
        <div style="height:5px;border-bottom:solid 2px black;border-top:solid 1px black;margin:10px 0"></div>
        <div style="text-align:center; margin:40px auto 60px auto">
            <b style="font-size:14pt !important;">FORMULIR PENDAFTARAN ONLINE</b>
        </div>
        <div style="text-align:left; margin:20px auto 20px auto">
            <b style="font-size:12pt !important;">Code Pendaftaran : {{$participant['meta']['nomor_pendaftaran']}}</b>
        </div>
        <table width="100%" class="it-grid">
            <tr style="background:#f6ff00">
                <td style="padding:10px" colspan="2" align="center"><b style="font-size:12pt !important;">IDENTITAS PESERTA DIDIK BARU</b></td>
            </tr>
            <tr>
                <td width="250px">Nama Lengkap Peserta Didik</td>
                <td>{{$participant['label']}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{$participant['meta']['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>{{$participant['meta']['kelahiran']['tempat']}}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>{{\Carbon\Carbon::parse($participant['meta']['kelahiran']['tanggal'])->translatedFormat('d F Y')}}</td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>{{$participant['meta']['sekolah']}}</td>
            </tr>
            <tr>
                <td>Nomor HP Aktif Peserta Didik</td>
                <td>{{$participant['meta']['nomor_telepon']['sendiri']}}</td>
            </tr>
            <tr>
                <td>Nomor HP Aktif Orang Tua</td>
                <td>{{$participant['meta']['nomor_telepon']['orang_tua']}}</td>
            </tr>
            <tr>
                <td>Jurusan Yang Diminati</td>
                <td>{{jurusanToLong($participant['meta']['jurusan'])}}</td>
            </tr>
            <tr>
                <td>Referensi</td>
                <td>{{($participant['meta']['referensi'])}}</td>
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
                    Indramayu, {{\Carbon\Carbon::parse($participant['meta']['created'])->translatedFormat('d F Y')}}<br>
                    &nbsp;<br>
                    <br>
                    &nbsp;<br>
                    Panitia PPDB TA. {{$participant['meta']['tahun_pelajaran']}}/{{$participant['meta']['tahun_pelajaran'] + 1}}<br>
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
@empty
@endforelse
<script>
    window.print();
</script>
</body>
</html>