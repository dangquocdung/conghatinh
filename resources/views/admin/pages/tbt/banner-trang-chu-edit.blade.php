@extends('admin.html')

@section('title')
    <title>Edit Banner trang chủ</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Banner Trang chủ<small>Các banner hiện có</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Banner dọc (phải)</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Chỉnh sửa banner</h3>
        </div>
        <form action="{{route('update-banner-trang-chu')}}" method="post" id="role-save-form">
            <input type="hidden" name="id" value="{{ $bn->id }}">



          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}

              <div class="form-group">
                  <label>Loại</label>
                  <select class="form-control" name="vitri" style="width: 100%;">
                      @foreach($loaibn as $lbn)
                          <option value="{{$lbn->id}}"
                          @if ($bn->vitri == $lbn->id)
                            selected
                          @endif
                          >{{$lbn->name}}</option>
                      @endforeach
                  </select>
              </div>

            <div class="form-group">
              <label for="">Tên Banner:</label>
              <input type="text"
                     placeholder="Nhập tên banner"
                     name="name"
                     id="name"
                     value="{{ $bn->name }}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>



            <div class="form-group">
                <label for="">Liên kết:</label>
                <input type="text"
                       placeholder="Nhập đường dẫn liên kết http"
                       name="lienket"
                       id="lienket"
                       value="{{$bn->lienket}}"
                       class="form-control">
                <div class="HelpText error">{{$errors->first('lienket')}}</div>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($banner); $i++)
                    @if ($i == $bn->thutu)
                        <option value={{ $i }} selected>{{ $i }}</option>
                      @else
                          <option value={{ $i }}>{{ $i }}</option>
                      @endif

                @endfor
              </select>
            </div>

              <div class="form-group">
                  <label for="">Banner:</label>

                  <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="{{ $bn->banner }}" width="500px" style="margin: 0 auto;" />
                  <input type="hidden" name="banner" id="banner" value="{{ $bn->banner }}">
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

    function to_slug(str)
    {
        // Chuyển hết sang chữ thường
        str = str.toLowerCase();

        // xóa dấu
        str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
        str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
        str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
        str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
        str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
        str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
        str = str.replace(/(đ)/g, 'd');

        // Xóa ký tự đặc biệt
        str = str.replace(/([^0-9a-z-\s])/g, '');

        // Xóa khoảng trắng thay bằng ký tự -
        str = str.replace(/(\s+)/g, '-');

        // xóa phần dự - ở đầu
        str = str.replace(/^-+/g, '');

        // xóa phần dư - ở cuối
        str = str.replace(/-+$/g, '');

        // return
        return str;
    }

    $(document).ready(function(){
        $("#lienket").focus (function () {

            var str = "/vi/chuyen-trang/"+to_slug($("#name").val());
            $(this).val(str);
        })
    })
</script>

@stop
