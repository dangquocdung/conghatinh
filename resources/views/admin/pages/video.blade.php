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
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Loại video</th>
              <th>title</th>
              <th>original_name</th>
              <th>disk</th>
              <th>path</th>
            </tr>
            </thead>
            <tbody>
            @foreach($video as $vd)
              <tr>
                <td>{{ $vd->loaivideo->name }}</td>
                <td>{{$vd->title}}</td>
                <td>{{$vd->original_name}}</td>
                <td>{{$vd->disk}}</td>
                <td>{{$vd->path}}</td>
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


        <form action="{{route('video.store')}}" method="post" id="role-save-form" enctype="multipart/form-data">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nhóm video</label>
              <select class="form-control chuyenmuc" name="loaivideo_id" style="width: 100%;">
                @foreach ($loaivideo as $lv)
                    <option value={{ $lv->id }} data-id={{ count($lv->video) }}>{{ $lv->name }}</option>
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="">Tiêu đề:</label>
              <input type="text"
                     placeholder="Tiêu đề video"
                     name="title"
                     value="{{old('title')}}"
                     class="form-control"
                     required >
              <div class="HelpText error">{{$errors->first('title')}}</div>
            </div>

            <div class="form-group">
              <label for="">Tiêu đề:</label>
              <input type="file"
                     placeholder="Tiêu đề video"
                     name="video"
                     value="{{old('video')}}"
                     class="form-control"
                     required >
              <div class="HelpText error">{{$errors->first('video')}}</div>
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
