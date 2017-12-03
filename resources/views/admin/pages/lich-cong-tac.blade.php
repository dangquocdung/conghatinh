@extends('admin.html')

@section('title')
  <title>Lịch công tác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Lịch công tác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Lịch công tác</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lịch công tác</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Người tạo</th>
              <th>Tháng/Năm</th>
              <th>Nội dung</th>
              <th>Tệp đính kèm</th>
              <th>Ngày tạo</th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>

            @foreach($lichct as $lct)
              <tr>
                <td>{{ $lct->id }}</td>
                <td>{{ $lct->user->name }}</td>
                <td>{{ $lct->thang }}</td>
                <td><a data-toggle="modal" data-target="#lct">Lịch công tác tháng {{ $lct->thang }}</a></td>
                <td>
                  @if (!empty($lct->tepdinhkem))
                    <a href="{{ $lct->tepdinhkem }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                  @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($lct->created_date)->format('d-m-Y H:i:s') }}</td>
                <td>

                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>
  </div>
@stop
