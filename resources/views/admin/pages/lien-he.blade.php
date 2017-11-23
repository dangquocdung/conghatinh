@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Liên hệ công tác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Liên hệ công tác</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Liên hệ công tác</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>TT</th>
              <th>Ngày gởi</th>
              <th>Họ và Tên</th>
              <th>Điện thoại</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Nội dung</th>
              <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach($lienhe as $lh)
              <tr>
                <td>{{ $lh->id }}</td>
                <td>{{ \Carbon\Carbon::parse($lh->created_at)->format('d-m-Y H:i:s') }}</td>
                <td>{{ $lh->hoten }}</td>
                <td>{{ $lh->sodt }}</td>
                <td>{{ $lh->email }}</td>
                <td>{{ $lh->diachi }}</td>
                <td>{!! $lh->noidung !!}</td>

                <td>



                </td>

              </tr>



              @endforeach



            </tbody>
          </table>

          {{$lienhe->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    <!-- Modal Edit Album-->
      <div class="modal modal-default fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content" style="padding: 0">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="padding-bottom: 0">Chỉnh sửa</h4>
            </div>
            <form action="{{ route('update-lich-lam-viec') }}" method="post" id="role-save-form">
              {{csrf_field()}}
              <div class="modal-body">

                <input type="hidden" name="id" id="llv-id">

                <div class="form-group">
                  <label for="">Nội dung:</label>
                  <input type="text"
                         placeholder="Nội dung làm việc"
                         id="title"
                         name="title"
                         class="form-control"
                         required >
                  <div class="HelpText error">{{$errors->first('title')}}</div>
                </div>


                <!-- Date -->
                <div class="form-group">
                  <label>Ngày bắt đầu</label>
                  <div class='input-group date datetimepicker'>
                    <input id="start_date" name="start_date" type='text' class="form-control"/>
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                  </div>
                  <!-- /.input group -->
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Ngày kết thúc</label>
                  <div class='input-group date datetimepicker'>
                    <input id="end_date" name="end_date" type='text' class="form-control"/>
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                  </div>
                  <!-- /.input group -->
                </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>

  </div>

@endsection

