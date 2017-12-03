@extends('admin.html')

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
    <div class="col-md-8">
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
              <th>Ngày tạo</th>
              <th>
                <a class="btn btn-info btn-xs chinh-sua" data-toggle="modal" data-target="#modal-create">Tạo mới</a>

              </th>
            </tr>
            </thead>
            <tbody>

            @foreach($lichct as $lct)
              <tr>
                <td>{{ $lct->id }}</td>
                <td>{{ $lct->user->name }}</td>
                <td>{{ $lct->thang }}</td>
                <td><a href="">Lịch công tác</a></td>
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

    <!-- Modal Create-->
      <div class="modal modal-default fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content" style="padding: 0">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="padding-bottom: 0">Tạo mới</h4>
            </div>
            <form action="{{ route('lich-cong-tac.store') }}" method="post" id="role-save-form">
              {{csrf_field()}}
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Th.:</label>
                  {{--<input type="month" name="tuan" id="tuan" class="form-control" required>--}}
                  <input id="thang" name="thang" class="form-control select2" type="text" />
                </div>

                <div class="form-group">
                  <label for="">Nội dung:</label>
                  <textarea id="noi-dung" name="noidung" required></textarea>
                  <div class="HelpText error">{{$errors->first('noidung')}}</div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </div>

    <div class="col-md-4">

      {{--Box--}}
      <div class="box box-primary">

        <!-- /.box-header -->
        <div class="box-body">
          <file-manager></file-manager>


        </div>
        <!-- /.box-body -->

      {{--End box--}}
    </div>
    </div>

@endsection

    @section('js')

      <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>


      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


      <script>
          // CKEDITOR.replace( 'gioi-thieu' );
          CKEDITOR.replace( 'noi-dung' );

          // $("input:file, input:checkbox").uniform();

//          $(document).ready(function() {
//
//              $('.select2').select2({
//                  width: '100%'
//              });
//
//              $('#tuan').val(moment().format('W'));
//          });

          $(document).ready(function() {
              // Default functionality.
              $('#thang').MonthPicker({
                  i18n: {
                      year: 'năm',
                      months: ['Th. 1','Th. 2','Th. 3','Th. 4','Th. 5','Th. 6','Th. 7','Th. 8','Th. 9','Th. 10','Th. 11','Th. 12']
                  }
              });
          })


      </script>
@stop

