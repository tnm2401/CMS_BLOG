@extends('BE.Auth.mainauth')

@section('pagetitle', 'Đăng nhập')

@section('linkcss')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('BE') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('BE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('BE') }}/dist/css/adminlte.min.css">
@endsection

@section('maincontent')
<div class="login-box">
  <div class="login-logo">
    <a href="admin"><img src="{{asset('BE')}}/dist/img/6.gif" alt=""></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
            <div class="icheck-primary pb-2">
              <input type="checkbox" id="remember">
              <label for="remember">
                Nhớ mật khẩu
              </label>
            </div>
          <!-- /.col -->
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          <!-- /.col -->
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- Hoặc -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Đăng nhập với Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Đăng nhập với Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Quân mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="dang-ky" class="text-center">Đăng ký tài khoản mới</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

@section('linkjs')
    <!-- jQuery -->
    <script src="{{ asset('BE') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('BE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('BE') }}/dist/js/adminlte.min.js"></script>
@endsection