@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Góp ý dự thảo văn bản</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Góp ý dự thảo văn bản</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8">
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
                @foreach ($duthao as $dt)
                    <tr>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->name }}</td>
                        <td style="text-align: center"><a href="{{ $dt->path_file }}"><i class="fa fa-file-archive-o" aria-hidden="true"></i></a></td>
                        <td>{{ \Carbon\Carbon::parse($dt->thoihan)->format('d-m-Y') }}</td>
                        <td>
                            <button class="btn btn-info btn-xs" >Xóa</button>
                        </td>

                    </tr>
                @endforeach

                </tbody>

            </table>
          <div class="text-center">
            {{$duthao->render()}}
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  <div class="col-md-4">

      {{--Box--}}
      <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Thêm Văn bản dự thảo</h3>
          </div>
          <form action="{{route('them-du-thao-van-ban')}}" method="post" enctype="multipart/form-data" id="role-save-form">
              <!-- /.box-header -->
              <div class="box-body">
                  {{csrf_field()}}

                  <div class="form-group">
                      <label for="">Tên:</label>
                      <input type="text"
                             placeholder="Nhập tên văn bản dự thảo"
                             name="name"
                             value="{{old('name')}}"
                             class="form-control">
                      <div class="HelpText error">{{$errors->first('name')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="">Tệp đính kèm:</label>
                      <input type="file"
                             name="file"
                             class="form-control">
                      <div class="HelpText error">{{$errors->first('path_file')}}</div>
                  </div>
                  <div class="form-group">
                      <label for="">Ngày hết hạn:</label>
                      <div class='input-group date' id='ngayhethan'>
                          <input name="thoihan" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}"/>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <button type="submit" class="btn btn-success">Gửi đăng</button>
              </div>
          </form>
      </div>
      {{--End box--}}

  </div>

  </div>

@endsection


@section('js')

    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>





    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>




    <script>

        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });


        });




        $(function () {

            $('#ngayhethan').datetimepicker({
                format:'DD-MM-YYYY'
            });
        });


    </script>
@stop