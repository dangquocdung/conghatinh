@extends('admin.html')

@section('title')
    <title>Tạo mới tin, bài</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Tạo Tin Tức</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li><a href="javascript:void(0);">Tin tức</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
      <div class="col-md-9">
          {{--Box--}}
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tạo mới</h3>
            </div>
            <!-- /.box-header -->
            <form action="{{ route('doi-thoai-truc-tuyen.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="avatar" id="avatar">

                <div class="box-body">
                    <div class="form-group">
                        <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="http://placehold.it/500x300" width="500px" style="margin: 0 auto;" />
                        <p><span id="imageerror" style="font-weight: bold; color: red"></span></p>
                    </div>

                    <div class="form-group">
                        <input name="name" class="form-control" type="text" placeholder="Tiêu đề" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <input name="video" class="form-control" type="text" placeholder="embed code"  value="{{ old('video') }}" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Giới thiệu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Gởi chờ duyệt</button>
                    <button type="reset" class="btn btn-danger pull-left">Nhập lại </button>
                </div>

            </form>
            <!-- /.box-body -->
          </div>
      </div>

      <div class="col-md-3">
          {{--Box--}}
          <div class="box box-primary" id="thu-vien-hinh-anh">
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


    function drop(evt)
    {
        evt.stopPropagation();
        evt.preventDefault(); 
        var imageUrl = evt.dataTransfer.getData('text/html');
      
        var rex = /src="?([^"\s]+)"?\s*/;
        var url, res;

        url = rex.exec(imageUrl);
        // alert(url[1]);

        document.getElementById('dropbox').src=url[1];

        document.getElementById('avatar').value = url[1];
    }
        



    $(document).ready(function() {

        $('.select2').select2({
          width: '100%'
        });
    });

    $(document).ready(function () {

        $('#thu-vien-hinh-anh').scrollToFixed({
            marginTop: 10,
            removeOffsets: true,
            zIndex: 999
        });
    });

</script>
@stop