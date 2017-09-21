@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Tin Tức<small>Các tin tức - sự kiện hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li><a href="{{route('tin-tuc-su-kien')}}">Tin tức</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-9">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
        </div>
        <!-- /.box-header -->
        <form action="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="avatar" id="avatar">
          <div class="box-body">

            <input name="name" class="form-control input-lg" type="text" placeholder="Tiêu đề" style="font-weight: bold; font-size: 1.5em" required="">
            <br>

            {{-- <div class='input-group date' id='ngaydang'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div> --}}

            {{-- <br> --}}

            <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
              <option value=""></option>
              @foreach ($chuyenmuc as $cm)
              <optgroup label="{{ $cm->name}}">
                @foreach ($cm->loaitin as $lt)
                  <option value={{ $lt->id }}>{{ $lt->name}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
            
            <br>
            <br>

            {{-- <div class="control-group">
              <label class="control-label" for="fileInput"></label>
              <br>

              <input type="hidden" name="MAX_UPLOAD_SIZE" value="250000">

              <input name="avatar" type="file" name="jimage" id="jimage" accept="image/jpeg" required>
            </div>  

            <br> --}}
                      
            {{-- <img id="uploadedimage" class="img-responsive" src="http://placehold.it/500x300" width="500px" style="margin: 0 auto;" /> --}}

            <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" 
                 src="http://placehold.it/500x300" width="500px" style="margin: 0 auto;" />


          
            <p><span id="imageerror" style="font-weight: bold; color: red"></span></p>

            <br>

            <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Giới thiệu ..." required=""></textarea>

                
            <br>
            
            <textarea id="noi-dung" name="noidung" required="">Nội dung ...</textarea>
            
            <br>

            {{-- {!! app('captcha')->display(); !!} --}}
              
            

            {{-- <edit-post></edit-post> --}}

            <select name="tags[]" class="form-control select2"  multiple="multiple" data-placeholder="Gắn thẻ cho bài viết" style="width: 100%;">
              <option>Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>

            <br>
            
          </div>

          <div class="box-footer">
            
            <button type="submit" class="btn btn-success pull-right">Gởi chờ duyệt</button>

            <button type="button" class="btn btn-danger pull-left">Huỷ bài viết</button>

          </div>
        </form>
        <!-- /.box-body -->
      </div>
      
      {{--End box--}}
    </div>
    <div class="col-sm-3">
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

@section('css')

<link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

@stop

@section('js')
<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


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

        document.getElementById('avatar').value = url[1];
      }
        

    
    
    
  

    

    // CKEDITOR.replace( 'gioi-thieu' );
    CKEDITOR.replace( 'noi-dung' );

    $("input:file, input:checkbox").uniform();

    $(document).ready(function() {
            // document.getElementById("jimage").onchange = function () {
            //     var reader = new FileReader();

            //     reader.onload = function (e) {
            //         if (e.total > 250000) {
            //             $('#imageerror').text('Image too large');
            //             $jimage = $("#jimage");
            //             $jimage.val("");
            //             $jimage.wrap('<form>').closest('form').get(0).reset();
            //             $jimage.unwrap();
            //             $('#uploadedimage').removeAttr('src');
            //             return;
            //         }
            //         $('#imageerror').text('');
            //         document.getElementById("uploadedimage").src = e.target.result;
            //     };
            //     reader.readAsDataURL(this.files[0]);
            // };

            // document.getElementById("loaitin").onchange = function(){
            //     alert($(this).val());
            // }

            $('#ngaydang').datetimepicker({
              format: "DD-MM-YYYY H:m"
            });

            $('.select2').select2({
              width: '100%'
            });
        });
</script>
@stop