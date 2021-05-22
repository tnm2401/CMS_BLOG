@extends('BE.layout.main')
@section('pagetitle', 'sửa nhóm tin tức')
@section('linkcss')
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('BE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('BE')}}/dist/css/adminlte.min.css">
@endsection

@section('maincontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉn sửa nhóm tin tức</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
              <li class="breadcrumb-item active">Chỉnh sửa nhóm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Chỉn sửa nhóm tin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="" id="form_validation" method="POST" action="{{route('nhom-tin.update',$row->id)}}" enctype="multipart/form-data" >
                @csrf
              @method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label class="text-uppercase">Tên nhóm</label>
                    <input type="text" class="form-control" name="group_name" value="{{$row->group_name}}" placeholder="Nhập tên nhóm">
                  </div>
                  <div class="form-group">
                    <label class="text-uppercase">Số thứ tự</label>
                    <input type="text" class="form-control" name="group_serial" value="{{$row->group_serial}}" placeholder="Nhập tên nhóm">
                  </div>
                  <div class="form-group"> 
                      <div><label for="group_display">Trạng Thái</label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="group_display" id="hd" class="with-gap" value="1" @if ($row->group_display == 1) checked @endif >
                          <label class="form-check-label" for="hd">Hiện</label>
                      </div>                                
                      <div class="form-check form-check-inline">
                          <input type="radio" name="group_display" id="dis" class="with-gap" value="0" @if ($row->group_display== 0) checked @endif >
                          <label class="form-check-label" for="dis">Ẩn</label>
                      </div>
                  </div>
                  <div class="form-group"> 
                      <div><label for="group_display">Nổi Bật</label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="group_special" id="hd" class="with-gap" value="1" @if ($row->group_special == 1) checked @endif >
                          <label class="form-check-label" for="hd">True</label>
                      </div>                                
                      <div class="form-check form-check-inline">
                          <input type="radio" name="group_special" id="dis" class="with-gap" value="0" @if ($row->group_special== 0) checked @endif >
                          <label class="form-check-label" for="dis">False</label>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('linkjs')
    
    <!-- jQuery -->
    <script src="{{asset('BE')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('BE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('BE')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('BE')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('BE')}}/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
    bsCustomFileInput.init();
    });
    </script>
@endsection