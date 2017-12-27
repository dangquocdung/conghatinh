@extends('admin.html')

@section('title')
    <title>Thêm Văn bản khác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Văn bản khác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Văn bản khác</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Văn bản khác</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-xs" id="btnThem">
                    <i class="fa fa-plus"></i> Thêm tệp
                </button>
            </div>
        </div>

          <div id="tai-tep" style="display:none; border: solid 1px #f0ad4e; padding: 5px">
              <file-manager></file-manager>
          </div>


          <form action="{{ route('them-van-ban-khac') }}" method="post" id="role-save-form">
          {{csrf_field()}}
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="modal-body">
              <div class="form-group">
                <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
                  <option value=""></option>
                  @foreach ($chuyenmuc->where('show','1') as $cm)
                      @if (count($cm->loaitin)>0)
                          <optgroup label="{{ $cm->name}}">
                              @foreach ($cm->loaitin->where('show','1') as $lt)
                                  <option value={{ $lt->id }}>{{ $lt->name}}</option>
                              @endforeach
                          </optgroup>
                        @endif
                  @endforeach
                </select>
              </div>

            <div class="form-group">
              <input name="name" class="form-control" type="text" placeholder="Tiêu đề" style="font-weight: bold; font-size: 1.5em" value="{{ old('name') }}" required>
            </div>

              <!-- Date -->
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker_ngaybanhanh'>
                      <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                      <input name="ngaybanhanh" type='text' class="form-control" required/>

                  </div>
                  <!-- /.input group -->
              </div>

              <div class="form-group">
                  <label>Chọn tệp văn bản</label>
                  <div class="pull-right">
                      <button type="button" class="btn btn-primary btn-xs" id="btnRefresh">
                          <i class="fa fa-refresh"></i> Nạp lại
                      </button>
                  </div>
                  <select id="tepvanbankhac" name="tepvanbankhac[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" ondragover="allowDrop(event)" ondrop="drop(event)">
                      @foreach($pdfs as $pdf)
                          <option value="{{$pdf->id}}" style="width: 100%">{{ $pdf->filename }}</option>
                      @endforeach
                  </select>
              </div>

            <div class="form-group">
              <label for="">Nội dung:</label>
              <textarea id="noi-dung" name="noidung" required></textarea>
              <div class="HelpText error">{{$errors->first('noidung')}}</div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </form>

      </div>
      {{--End box--}}


  </div>


@stop



@section('js')


          <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
          <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


    <script>
      // CKEDITOR.replace( 'gioi-thieu' );
      CKEDITOR.replace('noi-dung',{
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      });

      $(document).ready(function() {

          $('.select2').select2({
              width: '100%'
          });


          $('#btnThem').click(function () {

              if ($('#tai-tep').css('display')=='none'){

                  $('#tai-tep').css('display','inline-block');

              }else{

                  $('#tai-tep').css('display','none');

              }
          })

          $('#btnRefresh').click(function (e) {

              console.log(e);


              $.get('/toa-soan/json-tepdinhkem', function (data) {

//                  console.log(data);

                  $('select#tepvanbankhac').empty();

                  $.each(data, function(index, tdkObj){
//                      $('select#tepvanbankhac').append('<option value="'+ tdkObj.directory + '/' + tdkObj.filename + '.' + tdkObj.extension +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');

                      $('select#tepvanbankhac').append('<option value="'+ tdkObj.id +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');

                  })
              })
          })
      });

      $(function () {
          $('#datetimepicker_ngaybanhanh').datetimepicker({
              format:'DD-MM-YYYY'
          });
      });

    </script>
@stop

