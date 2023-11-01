<!DOCTYPE html>
<html lang="en">
    @extends('layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('assets/dist/img/one-house-logo.jpg')}}" alt="logo" height="60" width="60">
  </div>

  <!-- Navbar -->
    @include('layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@include('layouts.script')
</body>
</html>
