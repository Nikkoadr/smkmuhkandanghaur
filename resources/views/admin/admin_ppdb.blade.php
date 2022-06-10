@extends('admin.layouts.admin_main')
@section('head')
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                <h3 class="card-title">Data Peserta Didik Baru</h3>
              </div>
              <div>
                <button type="button" class="btn btn-primary" style="float: right; margin: 15px;" data-toggle="modal" data-target="#tambah" control-id="ControlID-3"> <i class="fas fa-plus"></i> Tambah</button>
              
                  <!-- /.tambah peserta didik baru -->
                    <div class="modal fade" id="tambah">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Tambah Peserta Didik Baru</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                          <form action="tambah_peserta_didik_baru_login" method="POST">
                              @include('website.ppdb.form_tambah')
                          </form>
                          </div>
                        </div>
                                    <!-- /.modal-content -->
                      </div>
                                <!-- /.modal-dialog -->
                    </div>
                  <!-- /.modal -->

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table_ppdb" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                    <th>No</th>
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>TTL</th>
                    <th>Asal Sekolah</th>
                    <th>Kontak</th>
                    <th>Program Keahlian</th>
                    <th>Referensi</th>
                    <th>Menu</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  
                  @foreach ($data_peserta_didik_baru as $data )
                  <tr>
                    <td><?= $no++ ?></td>
                    <td>{{ $data -> code }}</td>
                    <td>{{ $data -> nama }}</td>
                    <td>{{ $data-> jenis_kelamin }}</td>
                    <td>{{ $data-> tempat_lahir }}, {{ \Carbon\Carbon::parse($data -> tanggal_lahir)->translatedFormat('d F Y')}}</td>
                    <td>{{ $data -> asal_sekolah }}</td>
                    <td>
                      <b>Alamat: </b>{{ $data -> alamat }} <br>
                      <b>Siswa: </b>{{ $data -> no_hp_siswa }}
                        <br>
                        <b>Wali: </b>{{ $data -> no_hp_wali }}
                    </td>
                    <td>{{ $data -> program_keahlian }}</td>
                    <td>{{ $data -> referensi }}</td>
                    <td style="text-align: center">
                        <div style="display: inline;">
                            <button style="margin-right: 2px" class="btn btn-primary"><i class="fa-solid fa-pen-to-square" data-toggle="modal" data-target="#edit-{{ $data->id }}"></i></button> 
                            <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>

                    <!-- /.edit peserta didik baru -->
                    <div class="modal fade" id="edit-{{ $data->id }}">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Peserta Didik Baru</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                          <form action="edit_peserta_didik_baru/{{ $data->id }}" method="POST">
                          <div class="row g-3">
                            @method('put')
                          @csrf
                            <div class="col-md-3">
                                <label for="nama"><p class="p-3">Nama Lengkap :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nama" id="nama" class="form-control border-0 bg-light px-4" value="{{ $data->nama }}" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="kelamin"><p class="p-3">Jenis Kelamin :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="kelamin" type="text" name="jenis_kelamin" class="form-control border-0 bg-light px-4" style="height: 55px;">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki"@if ($data->jenis_kelamin == "Laki - Laki") selected @endif>Laki - Laki</option>
                                    <option value="Perempuan"@if ($data->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="ttl"><p class="p-3">Tempat, Tanggal Lahir :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-5">
                                <input id="ttl" type="text" name="tempat_lahir" class="form-control border-0 bg-light px-4" value="{{ $data->tempat_lahir }}" style="height: 55px;">
                            </div>                            
                            <div class="col-4">
                                <input type="date" type="text" name="tanggal_lahir" class="form-control border-0 bg-light px-4" value="{{ $data->tanggal_lahir }}" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="asal_sekolah"><p class="p-3">Asal Sekolah :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control border-0 bg-light px-4" value="{{ $data->asal_sekolah }}" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_siswa/siswi"><p class="p-3">Nomor Hp Siswa/Siswi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_siswa/siswi" type="number" name="no_hp_siswa" class="form-control border-0 bg-light px-4" value="{{ $data->no_hp_siswa }}" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="no_hp_wali"><p class="p-3">Nomor HP Wali :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="no_hp_wali" type="number" name="no_hp_wali" class="form-control border-0 bg-light px-4" value="{{ $data->no_hp_wali }}" style="height: 55px;">
                            </div>
                            <div class="col-md-3">
                                <label for="alamat"><p class="p-3">Alamat :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <textarea id="alamat" name="alamat" class="form-control border-0 bg-light px-4 py-3" rows="4" >{{ $data->alamat }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="program_keahlian"><p class="p-3">Program Keahlian :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <select id="program_keahlian" type="text" name="program_keahlian" class="form-control border-0 bg-light px-4" style="height: 55px;" value="{{ $data->alamat }}">
                                <option value="">Pilih Program Keahlian</option>
                                <option value="TPFL"@if ($data->program_keahlian == "TPFL") selected @endif>TEKNIK PENGELASAN DAN FABRIKASI LOGAM ( TPFL )</option>
                                <option value="TKRO"@if ($data->program_keahlian == "TKRO") selected @endif>TEKNIK KENDARAAN RINGAN OTOMOTIF( TKRO )</option>
                                <option value="TE"@if ($data->program_keahlian == "TE") selected @endif>TEKNIK ELETRONIKA ( TE )</option>
                                <option value="TJKT"@if ($data->program_keahlian == "TJKT") selected @endif>TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI ( TJKT )</option>
                                <option value="TBSM"@if ($data->program_keahlian == "TBSM") selected @endif>TEKNIK DAN BISNIS SEPEDA MOTOR ( TBSM )</option>
                                <option value="TF"@if ($data->program_keahlian == "TF") selected @endif>TEKNOLOGI FARMASI ( TF )</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="referensi"><p class="p-3">Referensi :<span style="color: red">*</span></p></label>
                            </div>
                            <div class="col-9">
                                <input id="referensi" type="text" name="referensi" class="form-control border-0 bg-light px-4" value="{{ $data->referensi }}" style="height: 55px;">
                            </div>
                            <input type="hidden" value="2022" name="tapel">
                            <div class="col-md-3">
                                <label for="daftar"><p class="p-3">Bertanda (<span style="color: red">*</span>) Wajib diisi</p></label>
                            </div>
                            <div class="col-9">
                                <button class="btn btn-primary w-100 py-3" type="submit">Tambah</button>
                            </div>
                        </div>

                          </form>
                          </div>
                        </div>
                                    <!-- /.modal-content -->
                      </div>
                                <!-- /.modal-dialog -->
                    </div>
                  <!-- /.modal -->

                        </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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
<!-- DataTables  & Plugins -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
    <script>
  $(function () {
    $("#table_ppdb").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table_ppdb_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection