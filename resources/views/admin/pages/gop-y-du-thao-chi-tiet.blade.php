@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Góp ý dự thảo văn bản</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị </a></li>
      <li><a href="javascript:void(0);">Chuyên trang </a></li>
      <li class="active">Góp ý dự thảo văn bản</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Góp ý dự thảo văn bản</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>TT</th>
                    <th>Dự thảo văn bản</th>
                    <th>Tệp văn bản</th>
                    <th>Hạn góp ý</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
          <div class="text-center">
            {{$gopy->render()}}
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

  </div>

@endsection
