<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('pagetitle')</title>
  {{-- này là css dộng --}}
  @yield('linkcss')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('BE')}}/dist/img/6.gif" alt="loading" height="256" width="256">
  </div>
  @include('sweetalert::alert')

  @include('BE.layout.header')

  @include('BE.layout.menu')

  @yield('maincontent')

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    {{-- link js động  --}}
    @yield('linkjs')

    {{-- Phần này để link js cứng --}}
    {{-- <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script> --}}

</body>
</html>
