@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Thư viện video</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Thư viện video</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thư viện video</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Loại video</th>
              <th>Tiêu đề</th>
              <th>Ngày đăng</th>
              <th width="20%">Video</th>

              <th width="5%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($video as $vd)
              <tr>
                <td>{{$vd->id}}</td>
                <td>{{ $vd->loaivideo->name }}</td>
                <td>
                  {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}

                  <div class="clearfix"></div>

                  @if ($vd->noibat == '1')
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Hủy Nổi bật'
                              btn-class="btn-danger"
                              url="{{url('api/v1/noi-bat-video')}}"
                              :post-data="{{json_encode(['id' => $vd->id, 'noibat'=>'0'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn hủy nổi bật?">
                      </confirm-modal>
                    </div>

                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Làm Nổi bật'
                              btn-class="btn-warning"
                              url="{{url('api/v1/noi-bat-video')}}"
                              :post-data="{{json_encode(['id' => $vd->id, 'noibat'=>'1'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn làm nổi bật?">
                      </confirm-modal>
                    </div>

                  @endif

                  @if ($vd->daduyet == '1')
                    {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Thôi Duyệt đăng'
                              btn-class="btn-danger"
                              url="{{url('api/v1/duyet-video')}}"
                              :post-data="{{json_encode(['id' => $vd->id, 'duyetdang'=>'0'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn thôi duyệt đăng video?">
                      </confirm-modal>
                    </div>

                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Chờ duyệt đăng'
                              btn-class="btn-success"
                              url="{{url('api/v1/duyet-video')}}"
                              :post-data="{{json_encode(['id' => $vd->id, 'duyetdang'=>'1'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn duyệt đăng video?">
                      </confirm-modal>
                    </div>

                    {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                  @endif

                </td>
                <td>{{ \Carbon\Carbon::parse($vd->created_at)->format('d/m/Y H:i:s') }}</td>
                <td>
                  <div class="embed-responsive embed-responsive-16by9">
                    {!! $vd->src !!}
                  </div>
                </td>

                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                  {{--<div class="pull-left">--}}
                    {{--<a href="{{route('edit-loai-tin', [$vd->id] )}}" class="btn btn-primary btn-xs">--}}
                      {{--<i class="fa fa-edit"></i> Edit--}}
                    {{--</a>--}}
                  {{--</div>--}}

                  <div class="pull-left gap-left gap-10">
                    <confirm-modal
                            btn-text='<i class="fa fa-trash"></i> Delete'
                            btn-class="btn-danger"
                            url="{{url('api/v1/delete-video')}}"
                            :post-data="{{json_encode(['id' => $vd->id])}}"
                            :refresh="true"
                            message="Bạn chắc chắn muốn xoá video này?">
                    </confirm-modal>
                  </div>
                  {{-- @endif --}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$video->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Video</h3>
        </div>
        <form action="{{route('save-video')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nhóm video</label>
              <select class="form-control chuyenmuc" name="loaivideo_id" style="width: 100%;">
                @foreach ($loaivideo as $lv)
                  @if ($loaivideo_id == $lv->id)
                    <option value={{ $lv->id }} data-id={{ count($lv->video) }} selected>{{ $lv->name }}</option>
                  @else
                    <option value={{ $lv->id }} data-id={{ count($lv->video) }}>{{ $lv->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <!-- Date -->
            <div class="form-group">
              <label>Ngày phát</label>
              <div class='input-group date' id='datetimepicker_ngayphat'>
                <input name="ngayphat" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}"/>
                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group">
              <label for="">Mã nhúng:</label>
              <input type="text"
                     placeholder="Sao chép mã nhúng"
                     name="src"
                     value="{{old('src')}}"
                     class="form-control"
                     required >
              <div class="HelpText error">{{$errors->first('name')}}</div>
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
    $(document).ready(function () {

        $('.embed-responsive').find('iframe').addClass('embed-responsive-item').removeAttr('width').removeAttr('height');


    })

    $(function () {

        $('#datetimepicker_ngayphat').datetimepicker({
            format:'DD-MM-YYYY'
        });
    });
  </script>

@stop
