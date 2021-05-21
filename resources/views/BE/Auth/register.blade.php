@extends('BE.layout.mainauth')

@section('pagetitle', 'Đăng kí')

@section('linkcss')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('BE') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('BE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('BE') }}/dist/css/adminlte.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('maincontent')
<div class="register-box">
  <div class="register-logo">
    <a href="admin"><img src="{{asset('BE')}}/dist/img/6.gif" alt=""></a>
  </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">ĐĂNG KÝ</p>
  
        <form id="register_form" action="{{ route('auth.create') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tên" name="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
        </div>
        @error('name'){{ $message }}@enderror
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
        </div>
        @error('email'){{ $message }}@enderror
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
        </div>
        @error('password'){{ $message }}@enderror
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
        </div>
        @error('re_password'){{ $message }}@enderror
              <div class="icheck-primary pb-2">
                <input type="checkbox" id="agreeTerms" name="checkbox_policy">
                <label for="agreeTerms">
                 Đồng ý với các <a href="#">điểu khoản</a>
                </label>
              </div>
                @error('checkbox_policy'){{ $message }}@enderror
            <!-- /.col -->
              <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
            <!-- /.col -->
          
        </form>
  
        <div class="social-auth-links text-center">
          <p>- Hoặc -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Đăng nhập với Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Đăng nhập với Google+
          </a>
        </div>
  
        Đã có tài khoản <a href="dang-nhap" class="text-center">Đăng nhập</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection

@section('linkjs')
    <!-- jQuery -->
    <script src="{{ asset('BE') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('BE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('BE') }}/dist/js/adminlte.min.js"></script>
    <script>
        // this is the id of the form
        $("#register_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                if (data == 1) {
                    Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                    )
                    window.location.href = "{{ route('admin.dasboard')}}";
                } else {
                    Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'error'
                    )
                }
            }
            });


        });
    </script>
@endsection