@extends('admin.html')

@section('title')
    <title>Tạo mới tin, bài</title>
@stop

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
      <div class="col-md-9">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('them-tin-tuc') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="avatar" id="avatar">
          <div class="box-body">

              @php

                  $loaitin = $chuyenmuc->where('id','<>','4')->all();

              @endphp

              <div class="form-group">

                <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
                  <option value=""></option>
                  @foreach ($loaitin as $cm)
                  <optgroup label="{{ $cm->name}}">
                    @foreach ($cm->loaitin as $lt)
                      <option value={{ $lt->id }}>{{ $lt->name}}</option>
                    @endforeach
                  </optgroup>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
           

                <input name="name" class="form-control input-lg" type="text" placeholder="Tiêu đề" style="font-weight: bold; font-size: 1.5em" value="{{ old('name') }}" required>
              </div>

              <div class="form-group">



                  <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y H:i:s') }}"/>
                      <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                  </div>
              </div>



              <div class="form-group">
                <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive"
                 src="http://placehold.it/500x300" width="500px" style="margin: 0 auto;" />

                  <p><span id="imageerror" style="font-weight: bold; color: red"></span></p>
              </div>


          


              <div class="form-group">

                <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Giới thiệu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
              </div>

              <div class="form-group">
            
                <textarea id="noi-dung" name="noidung"></textarea>
              </div>

              <div class="form-group">

                <input name="tacgia" class="form-control" type="text" placeholder="Tác giả">
              </div>

              <div class="form-group">
                <input name="nguon" class="form-control" type="text" placeholder="Nguồn">
              </div>

              <div class="form-group">
                  <label>Tệp đính kèm</label>
                  <select id="tepvanban" name="teptintuc[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" ondragover="allowDrop(event)" ondrop="drop(event)">
                      @foreach($pdfs as $pdf)
                          <option value="{{$pdf->id}}" style="width: 100%">{{ $pdf->filename }}</option>
                      @endforeach
                  </select>
              </div>

            {{-- {!! app('captcha')->display(); !!} --}}
              
            

            {{-- <edit-post></edit-post> --}}

            {{-- <select name="tags[]" class="form-control select2"  multiple="multiple" data-placeholder="Gắn thẻ cho bài viết" style="width: 100%;">
              <option>Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>

            <br> --}}
            
          </div>

          <div class="box-footer">
            
            <button type="submit" class="btn btn-success pull-right">Gởi chờ duyệt</button>

            <button type="button" class="btn btn-danger pull-left">Huỷ bài viết</button>

          </div>
        </form>
        <!-- /.box-body -->


      </div>
      
      {{--End box--}}

          {{--Box--}}
          <div class="box box-primary">

              <!-- /.box-header -->
              <div class="box-body">
                  <file-manager></file-manager>


              </div>
              <!-- /.box-body -->
          </div>
          {{--End box--}}
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

    // $("input:file, input:checkbox").uniform();

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
        //         document.getElementById("dropbox").src = e.target.result;
        //     };
        //     reader.readAsDataURL(this.files[0]);
        // };

        // document.getElementById("loaitin").onchange = function(){
        //     alert($(this).val());
        // }

        // $('#ngaydang').datetimepicker({
        //   format: "DD-MM-YYYY H:m"
        // });

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

    $(function () {
        $('#datetimepicker1').datetimepicker({
            format:'DD/MM/YYYY HH:mm:ss'
        });
    });
</script>
@stop