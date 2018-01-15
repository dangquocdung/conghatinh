@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Doanh nghiệp hỏi - CQNN trả lời</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Doanh nghiệp hỏi - CQNN trả lời</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">

          <form action="{{ route('update-doanh-nghiep-hoi',$dnh->id) }}" method="post" id="role-save-form">
              {{csrf_field()}}

              <div class="modal-body">



                  @role('tbt')

                      <div class="form-group">
                          <label>Doanh nghiệp </label>
                          <input type="text" class="form-control" name="doanhnghiep" value="{{ $dnh->doanhnghiep }}" required>
                          @if ($errors->has('doanhnghiep'))
                              <div class="error">{{ $errors->first('doanhnghiep') }}</div>
                          @endif
                      </div>

                      <div class="form-group">
                          <label>Địa chỉ </label>
                          <input type="text" class="form-control" name="diachi" value="{{ $dnh->diachi }}" required>
                          @if ($errors->has('diachi'))
                              <div class="error">{{ $errors->first('diachi') }}</div>
                          @endif
                      </div>

                      <div class="form-group">
                          <label>Câu hỏi </label>
                          <textarea class="form-control textarea" name="cauhoi" id="cauhoi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                              {{ $dnh->cauhoi }}
                          </textarea>
                          @if ($errors->has('cauhoi'))
                              <div class="error">{{ $errors->first('cauhoi') }}</div>
                          @endif
                      </div>

                  @endrole

                  <div class="form-group">
                      <label>Cơ quan trả lời  </label>
                      <input type="text" class="form-control" name="coquantraloi" value="{{ $dnh->coquantraloi }}" required>
                      @if ($errors->has('coquantraloi'))
                          <div class="error">{{ $errors->first('coquantraloi') }}</div>
                      @endif
                  </div>

                  <div class="form-group">
                      <label>Câu trả lời </label>
                      <textarea class="form-control textarea" name="cautraloi" id="cautraloi" placeholder="Nhập câu trả lời ở đây" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
                          {{ $dnh->cautraloi }}
                      </textarea>
                      @if ($errors->has('cautraloi'))
                          <div class="error">{{ $errors->first('cautraloi') }}</div>
                      @endif
                  </div>


              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
      </div>
    </div>

@endsection


@section('js')

    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            $('.textarea').wysihtml5()
        })
    </script>
@stop
