<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $url }} | SMK Muhammadiyah Kandanghaur</title>
<!-- Favicon -->
<link href="{{ asset('assets/website/img/favicon.ico') }}" rel="icon">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min.css">
@yield('head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{ asset('assets/website/img/about.png') }}" alt="AdminLTELogo" height="60" width="60">
</div>
@include('admin.layouts.partials.navbar')
@include('admin.layouts.partials.aside')
@yield('content')
@include('admin.layouts.partials.footer')
</div>
<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>
@yield('script')
</body>
</html>