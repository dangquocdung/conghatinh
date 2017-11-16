@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Thư viện Album hình ảnh</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Thư viện Album hình ảnh</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thư viện Album hình ảnh</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Tiêu đề</th>
              <th>Ảnh bìa</th>
              <th>Ngày đăng</th>
              <th>Hình ảnh</th>
              <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($albums as $ab)
              <tr class="album-item">
                <td>{{$ab->id}}</td>
                <td class="name">
                  <a href="{{ route('album-manager',['slug'=> $ab->slug]) }}">

                  {{ $ab->name }}

                  </a>
                </td>
                <td>
                  <a class="cover-image" href="{{ $ab->cover_image }}">
                    <img src="{{ $ab->cover_image }}" alt="" width="64px">
                  </a>
                </td>
                <td>{{ $ab->created_at }}</td>
                <td>{{ count($ab->Photos) }}</td>
                <td class="col-sm-3">
                  <div class="pull-left">
                    <a data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-xs editAlbum" album-name="{{ $ab->name }}" album-id="{{ $ab->id }}" album-cover_image="{{ $ab->cover_image }}">
                      <i class="fa fa-edit"></i> Chỉnh sửa
                    </a>
                  </div>

                  <div class="pull-left gap-left gap-10" style="padding-left: 5px">
                    <confirm-modal
                            btn-text='<i class="fa fa-trash"></i> Xóa'
                            btn-class="btn-danger"
                            url="{{ route('delete-album')}}"
                            :post-data="{{json_encode(['id' => $ab->id])}}"
                            :refresh="true"
                            message="Bạn chắc chắn muốn xoá video này?">
                    </confirm-modal>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$albums->render()}}
        </div>
        <!-- /.box-body -->
      </div>

      <!-- Modal Edit Album-->
      <div class="modal modal-default fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content" style="padding: 0">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="padding-bottom: 0">Chỉnh sửa</h4>
            </div>
            <form action="{{ route('update-album') }}" method="post" id="role-save-form">
              {{csrf_field()}}
            <div class="modal-body">

              <input type="hidden" name="album-id" id="album-id">



              <div class="form-group">

                <img class="img-responsive" src="http://placehold.it/200x120" width="500px" style="margin: 0 auto;" />

              </div>

              <div class="form-group">
                <label for="">Tên Album:</label>
                <input type="text"
                       name="album-name"
                       id="name"
                       value="{{old('name')}}"
                       class="form-control">
                <div class="HelpText error">{{$errors->first('name')}}</div>
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
      {{--End box--}}
    </div>

    <div class="col-md-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Album</h3>
        </div>
        <form action="{{ route('save-album') }}" method="post" id="role-save-form">
        {{csrf_field()}}





        <!-- /.box-header -->
          <div class="box-body">

            <div class="form-group">
              <label for="">Tên Album:</label>
              <input type="text"
                     placeholder="Nhập tên album"
                     name="name"
                     id="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>


            <div class="form-group">
              <label for="">Ảnh bìa:</label>
              <a id="cover" href="">
                <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="http://placehold.it/200x120" width="500px" style="margin: 0 auto;" />
              </a>

              <input type="hidden" name="cover_image" id="cover_image">
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
      $(document).ready(function() {

        /* This is basic - uses default settings */

          $("a#cover").fancybox();

          $("a.cover-image").fancybox();

          $(".editAlbum").click(function () {

              $("#modal-default").find("input#name").val($(this).attr('album-name'));

              $("#modal-default").find("input#album-id").val($(this).attr('album-id'));

              $("#modal-default").find("img").attr('src',$(this).attr('album-cover_image'));

          })
      });

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


          var str = url[1];

          var res = str.replace("_thumb", "");

          document.getElementById('dropbox').src=res;

          document.getElementById('cover_image').value = url[1];

          var a = document.getElementById('cover'); //or grab it by tagname etc
          a.href = res;
      }
  </script>

  @stop

