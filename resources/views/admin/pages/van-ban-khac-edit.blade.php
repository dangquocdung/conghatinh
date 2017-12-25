@extends('admin.html')

@section('title')
    <title>Sửa Văn bản khác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Văn bản khác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Sửa Văn bản khác</li>
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
                          @foreach ($chuyenmuc->where('vitri','>','0') as $cm)
                              <optgroup label="{{ $cm->name}}">
                                  @foreach ($cm->loaitin->where('show','1') as $lt)

                                      @if ($lct->loaitin_id == $lt->id)

                                          <option value={{ $lt->id }} selected>{{ $lt->name}}</option>

                                          @else
                                        <option value={{ $lt->id }}>{{ $lt->name}}</option>

                                      @endif
                                  @endforeach
                              </optgroup>
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

                  @php
                      $items = array();
                      foreach($tepvanbankhac as $lct){
                          $items[] = $lct->media_id;
                      }
                  @endphp

                  <div class="form-group">
                      <label>Chọn tệp văn bản</label>
                      <select name="tepvanbankhac[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
                          @foreach($pdfs as $pdf)
                              @if (in_array($pdf->id,$items))
                                  <option value="{{$pdf->id}}" selected>{{ $pdf->id.'-'.$pdf->filename }}</option>
                              @else
                                  <option value="{{$pdf->id}}">{{ $pdf->id.'-'.$pdf->filename }}</option>
                              @endif

                          @endforeach
                      </select>
                  </div>


                <div class="form-group">
                  <label for="">Nội dung:</label>
                  <textarea id="noi-dung" name="noidung" required>{!! $lct->noidung  !!}</textarea>
                  <div class="HelpText error">{{$errors->first('noidung')}}</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>

          {!! Form::close() !!}

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
                      $('select#tepdinhkem').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
//
                      $.each(data, function(index, tdkObj){
                          $('select#tepdinhkem').append('<option value="'+ tdkObj.directory + '/' + tdkObj.filename + '.' + tdkObj.extension +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
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

