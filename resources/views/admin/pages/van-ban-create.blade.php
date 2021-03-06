@extends('admin.html')

@section('title')
    <title>Tạo mới văn bản</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Văn bản</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li><a href="javascript:void(0);">Văn bản</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
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
        <form action="{{ route('them-van-ban') }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="avatar" id="avatar">
          <div class="box-body">

              {{--@php--}}
                  {{--$vanban = $chuyenmuc->where('type','vb')->all();--}}
              {{--@endphp--}}

              {{--<div class="form-group">--}}
                  {{--<label>Chọn nhóm văn bản:</label>--}}
                  {{--<select class="form-control select2" name="loaitin_id" data-placeholder="Chọn nhóm văn bản" style="width: 100%;" required>--}}
                      {{--<option value=""></option>--}}
                      {{--@foreach ($vanban as $vb)--}}
                          {{--<optgroup label="{{ $vb->name}}">--}}
                          {{--@foreach($vb->loaitin as $nvb)--}}
                                  {{--@if ($nvb->type == 'vb')--}}
                                        {{--<option value="{{ $nvb->id }}">{{ $nvb->name }}</option>--}}
                                  {{--@endif--}}
                          {{--@endforeach--}}
                          {{--</optgroup>--}}
                      {{--@endforeach--}}
                  {{--</select>--}}
              {{--</div>--}}

              <div class="form-group">
                  <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
                      <option value=""></option>
                      @foreach ($chuyenmuc->where('show','1') as $cm)
                          @if (count($cm->loaitin)>0)
                              <optgroup label="{{ $cm->name}}">
                                  @foreach ($cm->loaitin as $lt)
                                      <option value={{ $lt->id }}>{{ $lt->name}}</option>
                                  @endforeach
                              </optgroup>
                          @endif
                      @endforeach
                  </select>
              </div>

              <div class="form-group">
                  <input name="kihieuvb" class="form-control" type="text" placeholder="Số (Kí hiệu) văn bản" required>
              </div>


              <div class="form-group">
                  <textarea class="form-control" name="trichyeu" rows="3" cols="80" placeholder="Trích yếu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
              </div>

              <!-- Date -->
              <div class="form-group">
                  <label>Ngày ban hành </label>
                  <div class='input-group date' id='datetimepicker_ngaybanhanh'>
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                      <input name="ngaybanhanh" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}" required/>

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
                  <select id="tepvanban" name="tepvanban[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" ondragover="allowDrop(event)" ondrop="drop(event)">
                      @foreach($pdfs as $pdf)
                        <option value="{{$pdf->id}}" style="width: 100%">{{ $pdf->filename }}</option>
                      @endforeach
                  </select>
              </div>







            
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
        });


        $('#btnRefresh').click(function (e) {


            console.log(e);


            $.get('/toa-soan/json-tepdinhkem', function (data) {
                console.log(data);
                $('select#tepvanban').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
                $.each(data, function(index, tdkObj){
                    $('select#tepvanban').append('<option value="'+ tdkObj.id + '">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
                })
            })
        });


    });


    drag = function(ev) {
        event.dataTransfer.setData("text", ev.target.innerText);
    };

    drop = function(ev) {
        ev.target.innerText = ev.target.innerText +" "+ event.dataTransfer.getData("Text");
    };

    allowDrop = function(ev) {
        ev.preventDefault();
    };

    $(function () {
        $('#datetimepicker_ngaybanhanh').datetimepicker({
            format:'DD-MM-YYYY'
        });
    });


</script>
@stop