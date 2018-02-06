@extends('admin.html')

@section('title')
    <title>Edit {{ $tintuc->name }}</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Chỉnh sửa in bài</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li><a href="{{route('tin-tuc-su-kien')}}">Tin tức</a></li>
      <li class="active">Chỉnh sửa tin bài</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-9">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $tintuc->name }}</h3>

            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-xs" id="btnThem">
                    <i class="fa fa-plus"></i> Thêm tệp
                </button>
            </div>

        </div>

          <div id="tai-tep" style="display:none; border: solid 1px #f0ad4e; padding: 5px; margin: 10px 15px">
              <file-manager></file-manager>
          </div>

        <!-- /.box-header -->
        <form action="{{ route('update-tin-tuc') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $tintuc->id }}" id="">

          <input type="hidden" name="avatar" value="{{ $tintuc->avatar }}" id="avatar">

          <div class="box-body">

              <div class="form-group">
                  <img id="dropbox" ondrop="drop(event);" ondragover="return false" class="img-responsive" src="{{ $tintuc->avatar }}" width="500px" alt="{{$tintuc->name}}" style="margin: 0 auto;" />
                  <p><span id="imageerror" style="font-weight: bold; color: red"></span></p>
              </div>

              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="tinanh" id="tin-anh" data-toggle="toggle" data-on="Tin ảnh " @if ($tintuc->tinanh == 1) checked @endif>
                  </label>
                  &nbsp;&nbsp;
                  <label>
                      <input type="checkbox" name="tinvideo" id="tin-video" data-toggle="toggle" data-on="Tin video " @if ($tintuc->tinvideo == 1) checked @endif>
                  </label>
              </div>

              <script>
                  $(function () {

                      $('#tin-anh').change(function() {
                          if ($(this).prop('checked')){
                              $(this).val('1')
                          }
                          else{
                              $(this).val('0');
                          };
                      });

                      $('#tin-video').change(function() {
                          if ($(this).prop('checked')){
                              $(this).val('1')
                          }
                          else{
                              $(this).val('0');
                          };
                      })

                  })
              </script>

              <div class="form-group">

                <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">

                  <option value=""></option>

                    @foreach ($chuyenmuc as $cm)

                        @if (count($cm->loaitin)>0)

                          <optgroup label="{{ $cm->name}}">

                            @foreach ($cm->loaitin->sortby('thutu') as $lt)

                              @if ($tintuc->loaitin_id == $lt->id )

                                <option value={{ $lt->id }} selected="">{{ $lt->name}}</option>

                              @else

                                <option value={{ $lt->id }}>{{ $lt->name}}</option>

                              @endif

                            @endforeach

                          </optgroup>
                        @endif

                  @endforeach

                </select>
            
              </div>
              <div class="form-group">
                  <input name="name" class="form-control input-lg" type="text" value="{{$tintuc->name}}" style="font-weight: bold" required="">
              </div>


              <div class="form-group">
                  <textarea class="form-control" name="gioithieu" rows="3" cols="80" required="" style="font-style: italic;">{{ $tintuc->gioithieu }}</textarea>
              </div>

              <div class="form-group">
                  <textarea id="noi-dung" name="noidung">{!! $tintuc->noidung !!}</textarea>
              </div>

              <div class="form-group">
                  <input name="tacgia" class="form-control" type="text" value="{{$tintuc->tacgia}}">
              </div>
              <div class="form-group">
                <input name="nguon" class="form-control" type="text" value="{{$tintuc->nguon}}">
              </div>

              <p class="pull-right">
                  {!! $tintuc->nguon !!}
              </p>

              <div class="clearfix"></div>

              @php

                  $items = array();

                  foreach($teptintuc as $ttt){

                    if ($ttt->tintuc_id == $tintuc->id){
                        $items[] = $ttt->media_id;
                    }
                  }

              @endphp

              <div class="form-group">
                  <label>Tệp đính kèm</label>

                  <div class="pull-right">
                      <button type="button" class="btn btn-primary btn-xs" id="btnRefresh">
                          <i class="fa fa-refresh"></i> Nạp lại
                      </button>
                  </div>

                  <select id="teptintuc" name="teptintuc[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp đính kèm" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
                      @foreach($pdfs as $pdf)
                          @if (in_array($pdf->id,$items))
                              <option value="{{$pdf->id}}" selected>{{ $pdf->id.'-'.$pdf->filename }}</option>
                          @else
                              <option value="{{$pdf->id}}">{{ $pdf->id.'-'.$pdf->filename }}</option>
                          @endif

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
            
            <button type="submit" class="btn btn-success pull-right">Cập nhật</button>

            <button type="button" class="btn btn-danger pull-left">Huỷ bài viết</button>

          </div>
        </form>
        <!-- /.box-body -->
      </div>
      
      {{--End box--}}
    </div>
    <div class="col-sm-3">
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

        <script>

            $(document).ready(function () {

                $('#thu-vien-hinh-anh').scrollToFixed({
                    marginTop: 10,
                    // neither of these fixes the problem:
                    // removeOffset, offsets
//                    limit: function() {
//                        var limit = $('#tag').offset().top + $('#tag').outerHeight(true) - $('#tin-noi-bat-left').outerHeight(true);
//                        return limit;
//                    },
                    removeOffsets: true,
                    zIndex: 999
                });
            });


        </script>
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

        $('#btnThem').click(function () {

            if ($('#tai-tep').css('display')=='none'){

                $('#tai-tep').css('display','inline-block');

            }else{

                $('#tai-tep').css('display','none');

            }
        });

        $('#btnRefresh').click(function (e) {


            console.log(e);


            $.get('/toa-soan/json-tepdinhkem', function (data) {
                console.log(data);
                $('select#teptintuc').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
                $.each(data, function(index, tdkObj){
                    $('select#teptintuc').append('<option value="'+ tdkObj.id +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
                })
            })
        })
    });
</script>
@stop