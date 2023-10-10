@extends('website.main')
@section('head')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datepicker/dist/datepicker.css')}}">
  <link rel="stylesheet" href="assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<style>
  div.dt-buttons {
    float: left;
}
</style>
  @endsection
@section('carouse_home')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Absensi</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Absensi</a>
        </div>
    </div>
</div>
@endsection
@section('content')
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Absensi</h3>
                  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <h4>Filter Data Absensi</h4>
                </div>
              <div class="row mb-2">
                <div class="col-md-3">
                  <label class="ml-1 col-form-label" for="filter-grup">Grup : </label>
                  <select class="form-control filter" name="grup" id="grup">
                    <option value="">Pilih Grup</option>
                    @foreach ($grup as $item)
                      <option value="{{ $item->grup }}">{{ $item->grup }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                    <label class="ml-1 col-form-label" for="filter-tahun">Tanggal : </label>
                    <input class="datepicker form-control" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                </div>
                <div class="col-md-3">
                    <a style="margin-top: 38px" class="btn btn-info" href="{{ asset('assets/download/Laporan_25_okt_24_nov_2022_siswa.xlsx') }}"> Laporan Bulanan</a>
                </div>
              </div>
                <table id="table_absen" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                    <th data-orderable= false>No</th>
                    <th>Tanggal</th>
                    <th>Id User</th>
                    <th>Nama</th>
                    <th>Grup</th>
                    <th>Masuk</th>
                    <th>Pulang</th>
                  </tr>
                  </thead>
                  <tbody>
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
@endsection
@section('script')
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datepicker/dist/datepicker.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>
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
<script src="assets/admin/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Page specific script -->
<script>
    $('.datepicker').datepicker({
        autoHide : true, language : 'id-ID', format : 'yyyy-mm-dd', endDate : new Date()
    }).on('pick.datepicker', (e)=>{
        createDT(moment(e.date).format('yyyy-MM-DD'));
    });
      $('#grup').on('change', ()=>{
      createDT(null);
    });
    function createDT(tanggal = null) {
        if (tanggal === null) tanggal = '{{\Carbon\Carbon::now()->format('Y-m-d')}}';
        $('#table_absen').DataTable({
            "columnDefs": [
                {"className": "dt-center", "targets": "_all"}
            ],
          "lengthMenu": [
                [50, 100, 200 ],
                ['50', '100', '200']
            ],
            "dom": 'Bfrtip',
            "buttons": ['copy', 'excel', 'pdf', 'colvis'],
            
            destroy : true,
            searching: true,
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('absen') }}",
                data : {
                    tanggal : tanggal,
                    grup : $('#grup').val(),
                }
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {data: 'tanggal', name: 'tanggal'},
                {data: 'id_user', name: 'id_user'},
                {data: 'nama', name: 'nama'},
                {data: 'grup', name: 'grup'},
                {data: 'masuk', name: 'masuk'},
                {data: 'keluar', name: 'keluar'},
            ],
        });
    }
$(document).ready(function () {
    createDT()

  });
</script>
<script>
  $('.konfirmasi').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
Swal.fire({
  text: "Anda yakin ingin menghapus data ini ? ",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = url;
  }
})
});
</script>
<script>
  @if (session()->has('success'))
    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
      Toast.fire({
        icon: 'success',
        title: '{{ session('success') }}'
      })
  });
  @endif
</script>
@endsection
