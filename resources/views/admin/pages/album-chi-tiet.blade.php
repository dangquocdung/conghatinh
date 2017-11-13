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
          <h3 class="box-title">{{ $ab->name }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="cover-image" style="margin-bottom: 20px ">
            <a id="cover" href="{{ $ab->cover_image }}">
              <img class="img-responsive" src="{{ $ab->cover_image }}" alt="" style="margin: 0 auto;">
            </a>
          </div>

          <div class="col-md-12 album-image-view">
            <div class="row">
              <ul style="padding: 0">
                @foreach($ab->Photos as $pt)
                  <li class="col-md-4 col-sm-4 col-xs-6" >
                    <div class="image">
                      <a class="item-image" href="{{ $pt->image }}">
                        <img src="{{ $pt->image }}" alt="" style="width: 100%; object-fit: cover; padding-bottom: 5px; height: 120px">
                      </a>

                    </div>

                      <div class="btn-delete pull-right">
                          <confirm-modal
                                  btn-text='<i class="fa fa-trash"></i> Xóa'
                                  btn-class="btn-danger"
                                  url="{{ route('remove-image-to-album' )}}"
                                  :post-data="{{json_encode(['id' => $pt->id])}}"
                                  :refresh="true"
                                  message="Bạn chắc chắn muốn xoá hình ảnh này?">
                          </confirm-modal>
                      </div>

                      <div class="btn-delete pull-right">
                          <confirm-modal
                                  btn-text='<i class="fa fa-file-image-o"></i> Bìa'
                                  btn-class="btn-success"
                                  url="{{ route('update-album-cover' )}}"
                                  :post-data="{{json_encode(['album_id' => $ab->id,'cover_image'=>$pt->image])}}"
                                  :refresh="true"
                                  message="Bạn chắc chắn muốn đặt ảnh này làm bìa?">
                          </confirm-modal>
                      </div>

                    <div>{{ $pt->description }}</div>


                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-md-4">

      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm hình ảnh</h3>
        </div>
        <form action="{{ route('add-image-to-album') }}" method="post" id="role-save-form">
            <input type="hidden" name="album_id" value="{{ $ab->id }}">
        {{csrf_field()}}





        <!-- /.box-header -->
          <div class="box-body">

            <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control" name="desc" placeholder="Diễn giải hình ảnh" required></textarea>
            </div>

              <a id="cover" href="">
                <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="http://placehold.it/200x120" width="500px" style="margin: 0 auto;" />
              </a>
              <div class="HelpText error">{{$errors->first('image')}}</div>

              <input type="hidden" name="image" id="cover_image">



          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">Thêm ảnh này vào album</button>
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

          $("a.item-image").fancybox();

          $("#editAlbum").click(function () {

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

