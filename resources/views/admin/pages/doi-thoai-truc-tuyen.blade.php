@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Đối thoại trực tuyến</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Đối thoại trực tuyến</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Đối thoại trực tuyến</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>TT</th>
              <th>Họ Tên</th>
              <th>Số ĐT</th>
              <th>Câu hỏi</th>
              <th>Câu Trả lời</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
          </table>


        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>

@endsection