@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Lịch làm việc</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Lịch làm việc</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lịch làm việc</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Nội dung</th>
              <th>Ngày bắt đầu</th>
              <th>Ngày kết thúc</th>
              <th>Ngày tạo</th>
              <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach($events as $ev)
              <tr>
                <td>{{ $ev->id }}</td>
                <td>{{ $ev->title }}</td>
                <td>{{ $ev->start_date }}</td>
                <td>{{ $ev->end_date }}</td>
                <td>{{ $ev->created_at }}</td>
                <td>

                  <div class="pull-left gap-left gap-10">
                    <confirm-modal
                            btn-text='<i class="fa fa-trash"></i> Delete'
                            btn-class="btn-danger"
                            url="{{ route ('delete-lich-lam-viec')}}"
                            :post-data="{{json_encode(['id' => $ev->id])}}"
                            :refresh="true"
                            message="Bạn chắc chắn muốn xoá mục này?">
                    </confirm-modal>
                  </div>

                </td>

              </tr>



              @endforeach



            </tbody>
          </table>

          {{$events->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">

      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Lịch làm việc</h3>
        </div>
        <form action="{{route('save-lich-lam-viec')}}" method="post" id="role-save-form">
          {{csrf_field()}}
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}

            <div class="form-group">
              <label for="">Nội dung:</label>
              <input type="text"
                     placeholder="Nội dung làm việc"
                     name="title"
                     value="{{old('title')}}"
                     class="form-control"
                     required >
              <div class="HelpText error">{{$errors->first('title')}}</div>
            </div>


            <!-- Date -->
            <div class="form-group">
              <label>Ngày bắt đầu</label>
              <div class='input-group date datetimepicker'>
                <input name="start_date" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}"/>
                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
              </div>
              <!-- /.input group -->
            </div>

            <!-- Date -->
            <div class="form-group">
              <label>Ngày bắt đầu</label>
              <div class='input-group date datetimepicker'>
                <input name="end_date" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}"/>
                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
              </div>
              <!-- /.input group -->
            </div>




          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-success">Gửi thông tin</button>
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



  <script>

      $(function () {

          $('.datetimepicker').datetimepicker({
              format:'DD-MM-YYYY'
          });
      });
  </script>

@stop
