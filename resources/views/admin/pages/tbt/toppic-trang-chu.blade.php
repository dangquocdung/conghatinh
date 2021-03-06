@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Banner Trang chủ<small>Các banner hiện có</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Banner trang chủ</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Banner trang chủ</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Banner</th>
              <th>Thứ tự</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($banner as $bn)
              <tr>
                <td>{{$bn->id}}</td>
                <td>{{($bn->name)}}</td>
                <td><img src="{{$bn->banner}}" alt="{{$bn->name}}" width="120"></td>
                <td>{{$bn->thutu}}</td>
                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-banner-trang-chu', $bn->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-banner-trang-chu')}}"
                        :post-data="{{json_encode(['id' => $bn->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá banner {{$bn->name}}?">
                      </confirm-modal>
                    </div>
                  {{-- @endif --}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$banner->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Liên kết</h3>
        </div>
        <form action="{{route('save-banner-trang-chu')}}" method="post" id="role-save-form">

          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}


            <div class="form-group">
              <label for="">Tên Banner:</label>
              <input type="text"
                     placeholder="Nhập tên banner"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Kéo thả Banner:</label>

              <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="http://placehold.it/200x120" width="500px" style="margin: 0 auto;" />
              <input type="hidden" name="banner" id="banner">
            </div>


            <div class="form-group">
                <label for="">Liên kết:</label>
                <input type="text"
                       placeholder="Nhập đường dẫn liên kết http"
                       name="lienket"
                       value="{{old('lienket')}}"
                       class="form-control">
                <div class="HelpText error">{{$errors->first('lienket')}}</div>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($banner); $i++)
                  <option value={{ $i }}>{{ $i }}</option>
                @endfor
                  <option value={{ $i }} selected>{{ $i }}</option>
              </select>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-success">Gửi thông tin</button>
          </div>
        </form>
      </div>
      {{--End box--}}

      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thư viện Hình ảnh</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <media-manager></media-manager>


        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>
  </div>

@endsection

@section('js')

<script>

    //Drag & drop

    var dropbox = document.getElementById('dropbox');
    dropbox.addEventListener('drop', drop, false);


    function drop(evt) {
        evt.stopPropagation();
        evt.preventDefault();
        var imageUrl = evt.dataTransfer.getData('text/html');

        var rex = /src="?([^"\s]+)"?\s*/;
        var url, res;

        url = rex.exec(imageUrl);
        // alert(url[1]);

        document.getElementById('dropbox').src=url[1];

        document.getElementById('banner').value = url[1];
      }
</script>

@stop
