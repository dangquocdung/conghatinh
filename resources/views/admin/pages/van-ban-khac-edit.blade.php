@extends('admin.html')

@section('title')
    <title>Sửa Thông tin chỉ đạo, điều hành</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Thông tin chỉ đạo, điều hành</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Sửa Thông tin chỉ đạo, điều hành</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sửa lịch công tác</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-xs" id="btnThem">
                    <i class="fa fa-plus"></i> Thêm tệp
                </button>
            </div>
        </div>

          <div id="tai-tep" style="display:none; border: solid 1px #f0ad4e; padding: 5px">
              <file-manager></file-manager>
          </div>


          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif



        {{--<form action="{{ route('lich-cong-tac.update',$lct->id) }}" method="post" id="role-save-form">--}}

            {{--{{csrf_field()}}--}}
            {{--{{ method_field('PATCH') }}--}}


          <form action="{{ route('update-van-ban-khac') }}" method="post">
              {{ csrf_field() }}

              <input type="hidden" name="vbedit" value="{{$lct->id}}">

              <div class="modal-body">
                  <div class="form-group">
                      <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
                          <option value=""></option>
                          @foreach ($chuyenmuc->where('show','1') as $cm)
                              @if (count($cm->loaitin)>0)
                              <optgroup label="{{ $cm->name}}">
                                  @foreach ($cm->loaitin->where('show','1') as $lt)

                                      @if ($lct->loaitin_id == $lt->id)

                                          <option value={{ $lt->id }} selected>{{ $lt->name}}</option>

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
                      <input name="name" class="form-control" type="text" placeholder="Tiêu đề" style="font-weight: bold; font-size: 1.5em" value="{{ $lct->name }}" required>
                  </div>

                  <!-- Date -->
                  <div class="form-group">
                      <div class='input-group date' id='datetimepicker_ngaybanhanh'>
                      <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                          <input name="ngaybanhanh" type='text' class="form-control" value="{{\Carbon\Carbon::parse($lct->ngaybanhanh)->format('d-m-Y')}}" required/>
                      </div>
                      <!-- /.input group -->
                  </div>




                <div class="form-group">
                  <label for="">Nội dung:</label>
                  <textarea id="noi-dung" name="noidung" required>{!! $lct->noidung  !!}</textarea>
                  <div class="HelpText error">{{$errors->first('noidung')}}</div>
                </div>

                  <div class="form-group">
                      <label>Tệp văn bản:</label>
                      <br>
                      @foreach($lct->tepvanbankhac as $tvb)
                          <a href="{{ $tvb->path }}" target="_blank">
                              <img src="/images/pdf-file-512.png" alt="{{ $lct->kihieuvb }}" title="{{ $lct->kihieuvb }}" width="20px">
                          </a>
                      @endforeach
                  </div>

                  @php
                      $items = array();
                      foreach($tepvanbankhac as $lct){
                          $items[] = $lct->media_id;
                      }
                  @endphp

                  <div class="form-group">
                      <label>Chọn tệp văn bản</label>
                      <div class="pull-right">
                          <button type="button" class="btn btn-primary btn-xs" id="btnRefresh">
                              <i class="fa fa-refresh"></i> Nạp lại
                          </button>
                      </div>
                      <select id="tepvanbankhac" name="tepvanbankhac[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
                          @foreach($pdfs as $pdf)
                              @if (in_array($pdf->id,$items))
                                  <option value="{{$pdf->id}}" selected>{{ $pdf->filename }}</option>
                              @else
                                  <option value="{{$pdf->id}}">{{ $pdf->filename }}</option>
                              @endif

                          @endforeach
                      </select>
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
          CKEDITOR.replace( 'noi-dung',{
              filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
              filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
              filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
              filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
          } );

          // $("input:file, input:checkbox").uniform();

          $(document).ready(function() {

              $('.select2').select2({
                  width: '100%'
              });

              $('#tuan').val(moment().format('W'));
          });

          $(document).ready(function() {
              // Default functionality.

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
                      console.log(data);
                      $('select#tepvanbankhac').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
//
                      $.each(data, function(index, tdkObj){
                          $('select#tepvanbankhac').append('<option value="'+ tdkObj.id +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
                      })
                  })
              })




          })

          $(function () {
              $('#datetimepicker_ngaybanhanh').datetimepicker({
                  format:'DD-MM-YYYY'
              });
          });


      </script>
@stop

