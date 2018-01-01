@extends('admin.html')

@section('title')
    <title>Edit {{ $vbedit->kihieuvb }}</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Tin Tức<small>Các tin tức - sự kiện hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li><a href="{{route('index-van-ban')}}">Văn bản</a></li>
      <li class="active">Chỉnh sửa văn bản {{ $vbedit->kihieuvb }}</li>
    </ol>
  </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{--Box--}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh sửa văn bản {{ $vbedit->kihieuvb }} </h3>
                </div>
                <!-- /.box-header -->
                <form action="{{ route('update-van-ban') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="vbedit" value="{{$vbedit->id}}">

                    <div class="box-body">

                        <div class="form-group">
                            <label>Chọn nhóm văn bản:</label>
                            <select class="form-control select2" name="loaitin_id" data-placeholder="Chọn nhóm văn bản" style="width: 100%;" required>
                                <option value=""></option>
                                @foreach ($chuyenmuc->where('show','1') as $cm)
                                    @if (count($cm->loaitin)>0)
                                    <optgroup label="{{ $cm->name}}">
                                        @foreach($cm->loaitin as $nvb)
                                            @if ($nvb->id == $vbedit->loaitin_id)
                                                <option value="{{ $nvb->id }}" selected>{{ $nvb->name }}</option>
                                            @else
                                                <option value="{{ $nvb->id }}">{{ $nvb->name }}</option>
                                            @endif
                                        @endforeach
                                    </optgroup>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">

                            <input name="kihieuvb" class="form-control" type="text" placeholder="Số (Kí hiệu) văn bản" style="font-weight: bold; font-size: 1.5em" required value="{{$vbedit->kihieuvb}}">
                        </div>


                        <div class="form-group">

                            <textarea class="form-control" name="trichyeu" rows="3" cols="80" placeholder="Trích yếu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;">{{ $vbedit->trichyeu }}</textarea>
                        </div>

                        <!-- Date -->
                        <div class="form-group">
                            <label>Ngày ban hành</label>
                            <div class='input-group date' id='datetimepicker_ngaybanhanh'>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input name="ngaybanhanh" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}" required/>

                            </div>
                            <!-- /.input group -->
                        </div>

                        @php
                            $items = array();
                            foreach($tepvanban as $tvb){
                                $items[] = $tvb->media_id;
                            }
                        @endphp

                        <div class="form-group">
                            <label>Chọn tệp văn bản</label>
                            <select id="tepvanban" name="tepvanban[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
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

                    <div class="box-footer">

                        <button type="submit" class="btn btn-success pull-right">Cập nhật</button>

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

            $('#btnRefresh').click(function (e) {


                console.log(e);


                $.get('/toa-soan/json-tepdinhkem', function (data) {
                    console.log(data);
                    $('select#tepvanban').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
                    $.each(data, function(index, tdkObj){
                        $('select#tepvanban').append('<option value="'+ tdkObj.id +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
                    })
                })
            })


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
            $('#datetimepicker_ngaydang').datetimepicker({
                format:'DD/MM/YYYY HH:mm:ss'
            });

            $('#datetimepicker_ngaybanhanh').datetimepicker({
                format:'DD-MM-YYYY'
            });
        });


    </script>
@stop