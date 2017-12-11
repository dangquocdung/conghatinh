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
      <li><a href="{{route('tin-tuc-su-kien')}}">Văn bản</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('them-van-ban') }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="avatar" id="avatar">
          <div class="box-body">

              @php
                  $vanban = $chuyenmuc->where('type','vb')->all();
              @endphp

              <div class="form-group">
                  <label>Chọn nhóm văn bản:</label>
                  <select class="form-control select2" name="loaitin_id" data-placeholder="Chọn nhóm văn bản" style="width: 100%;" required>
                      <option value=""></option>
                      @foreach ($vanban as $vb)
                          <optgroup label="{{ $vb->name}}">
                          @foreach($vb->loaitin as $nvb)
                                  @if ($nvb->type == 'vb')
                                        <option value="{{ $nvb->id }}">{{ $nvb->name }}</option>
                                  @endif
                          @endforeach
                          </optgroup>
                      @endforeach
                  </select>
              </div>

              <div class="form-group">
                  <label>Chọn loại văn bản</label>

                    <select class="form-control select2" name="loaivb_id" data-placeholder="Chọn loại văn bản" style="width: 100%;" required>

                      <option value=""></option>
                      @foreach($loaivb as $lvb)
                          <option value="{{ $lvb->id }}">{{ $lvb->name }}</option>
                      @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label>Chọn lĩnh vực văn bản</label>

                  <select class="form-control select2" name="linhvuc_id" data-placeholder="Chọn lĩnh vực văn bản" style="width: 100%;" required>
                      <option value=""></option>
                      @foreach($linhvuc as $lv)
                          <option value="{{ $lv->id }}">{{ $lv->name }}</option>
                      @endforeach

                  </select>
              </div>


              <div class="form-group">

                <input name="kihieuvb" class="form-control" type="text" placeholder="Số (Kí hiệu) văn bản" style="font-weight: bold; font-size: 1.5em" required="">
              </div>

              <div class="form-group">
                  <div class='input-group date' id='datetimepicker_ngaydang'>
                      <input name="ngaydang" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y H:i:s') }}"/>
                      <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                  </div>
              </div>


              <div class="form-group">

                <textarea class="form-control" name="trichyeu" rows="3" cols="80" placeholder="Trích yếu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
              </div>

              <!-- Date -->
              <div class="form-group">
                  <label>Ngày ban hành</label>
                  <div class='input-group date' id='datetimepicker_ngaybanhanh'>
                      <input name="ngaybanhanh" type='text' class="form-control" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}" required/>
                      <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                  </div>
                  <!-- /.input group -->
              </div>

              <div class="form-group">
                  <label>Người kí</label>

                  <select name="nguoiki_id" id="nguoiki" class="form-control select2" data-placeholder="Chọn người kí" data-rel="chosen" required="">
                      <option value=""></option>

                      @foreach ($cqbh as $cq)
                      <optgroup label="{{ $cq->name}}">
                        @foreach ($cq->nguoiki as $nk)
                          <option value={{ $nk->id }}>{{ $nk->name}}</option>
                        @endforeach
                      </optgroup>
                      @endforeach
                    </select>

                  {{-- <select class="form-control select2" name="nguoiki_id" data-placeholder="Chọn người kí" style="width: 100%;">
                      <option value=""></option>
                      @foreach($nguoiki as $nk)
                          <option value="{{ $nk->id }}">{{ $nk->name }}</option>
                      @endforeach

                  </select> --}}
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

      <div class="col-md-4 hidden-xs">
          {{--Box--}}
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Thêm người kí</h3>
              </div>
              <form action="{{route('save-nguoi-ki')}}" method="post" id="role-save-form">
                  <!-- /.box-header -->
                  <div class="box-body">
                      {{csrf_field()}}
                      <div class="form-group">
                          <label for="">Name:</label>
                          <input type="text"
                                 placeholder="Nhập tên người kí"
                                 name="name"
                                 value="{{old('name')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('name')}}</div>
                      </div>

                      <div class="form-group">
                          <label>Cơ quan</label>
                          <select class="form-control select2" name="cqbh_id" data-placeholder="Chọn cơ quan" style="width: 100%;">
                              <option value=""></option>
                              @foreach($cqbh as $cq)
                                <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                              @endforeach

                          </select>
                      </div>

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" class="btn btn-success">Gửi thông tin</button>
                  </div>
              </form>
          </div>
          {{--End box--}}
      </div>

      <div class="col-md-4 hidden-xs">
          {{--Box--}}
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Thêm Cơ quan ban hành</h3>
              </div>
              <form action="{{route('save-cqbh')}}" method="post" id="role-save-form">
                  <!-- /.box-header -->
                  <div class="box-body">
                      {{csrf_field()}}
                      <div class="form-group">
                          <label for="">Name:</label>
                          <input type="text"
                                 placeholder="Nhập tên Cơ quan ban hành"
                                 name="name"
                                 value="{{old('name')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('name')}}</div>
                      </div>

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" class="btn btn-success">Gửi thông tin</button>
                  </div>
              </form>
          </div>
          {{--End box--}}
      </div>



    <div class="col-md-12 clearfix">
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
                    $('select#tepvanban').append('<option value="'+ tdkObj.directory + '/' + tdkObj.filename + '.' + tdkObj.extension +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
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