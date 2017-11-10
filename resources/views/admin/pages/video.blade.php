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
              <th>Giới thiệu</th>
              <th>Nguồn youtube</th>

              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($video as $vd)
              <tr>
                <td>{{$vd->id}}</td>
                <td>{{ $vd->loaivideo->name }}</td>
                <td>{{($vd->name)}}</td>
                <td>{{ $vd->gioithieu }}</td>
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

                  {{--<div class="pull-left gap-left gap-10">--}}
                    {{--<confirm-modal--}}
                            {{--btn-text='<i class="fa fa-trash"></i> Delete'--}}
                            {{--btn-class="btn-danger"--}}
                            {{--url="{{url('api/v1/delete-loai-tin')}}"--}}
                            {{--:post-data="{{json_encode(['id' => $vd->id])}}"--}}
                            {{--:refresh="true"--}}
                            {{--message="Bạn chắc chắn muốn xoá loại tin {{$lt->name}}?">--}}
                    {{--</confirm-modal>--}}
                  {{--</div>--}}
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
              <label>Nhóm</label>
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

            <div class="form-group">
              <label for="">Tiêu đề:</label>
              <input type="text"
                     placeholder="Nhập tiêu đề video"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control"
                     required >
              @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
              @endif
            </div>

            <div class="form-group">
              <label for="">Giới thiệu:</label>
              <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Giới thiệu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>
            @if ($errors->has('gioithieu'))
              <div class="error">{{ $errors->first('gioithieu') }}</div>
            @endif

            <div class="form-group">
              <label for="">Nguồn youtube:</label>
              <input type="text"
                     placeholder="Nhập tiêu đề video"
                     name="src"
                     value="{{old('src')}}"
                     class="form-control"
                     required >
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>
            {{--<div class="form-group">--}}
              {{--<iframe src="" frameborder="0"></iframe>--}}
            {{--</div>--}}

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

  <script>
    $(document).ready(function () {

        $('.embed-responsive').find('iframe').addClass('embed-responsive-item').removeAttr('width').removeAttr('height');


    })
  </script>

@stop
