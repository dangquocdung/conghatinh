@extends('admin.html')

@section('title')
    <title>Edit {{ $vb->kihieuvb }}</title>
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
    <div class="col-md-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tạo mới</h3>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('update-van-ban') }}" method="post">
          {{ csrf_field() }}
            <input type="hidden" name="id" id="id" value="{{$vb->id}}">
          <input type="hidden" name="avatar" id="avatar">
          <div class="box-body">

              @php

                  $vanban = $chuyenmuc->where('slug','van-ban')->first();

              @endphp
              <div class="form-group">
                  <label>Chọn nhóm văn bản</label>

                    <select class="form-control select2" name="loaitin_id" data-placeholder="Chọn nhóm văn bản" style="width: 100%;">
                      <option value=""></option>
                      @foreach($vanban->loaitin as $nvb)
                        @if ($vb->loaitin_id == $nvb->id)
                          <option value="{{ $nvb->id }}" selected="">{{ $nvb->name }}</option>
                          @else
                          <option value="{{ $nvb->id }}">{{ $nvb->name }}</option>
                          @endif
                      @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label>Chọn loại văn bản</label>

                    <select class="form-control select2" name="loaivb_id" data-placeholder="Chọn loại văn bản" style="width: 100%;">
                      <option value=""></option>
                      @foreach($loaivb as $lvb)
                        @if ($vb->loaivb_id == $lvb->id)
                          <option value="{{ $lvb->id }}" selected="">{{ $lvb->name }}</option>

                          @else

                          <option value="{{ $lvb->id }}" >{{ $lvb->name }}</option>

                          @endif

                      @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label>Chọn lĩnh vực văn bản</label>

                  <select class="form-control select2" name="linhvuc_id" data-placeholder="Chọn lĩnh vực văn bản" style="width: 100%;">
                      <option value=""></option>
                      @foreach($linhvuc as $lv)
                          @if ($vb->linhvuc_id == $lv->id)
                            <option value="{{ $lv->id }}" selected="">{{ $lv->name }}</option>
                          @else
                              <option value="{{ $lv->id }}">{{ $lv->name }}</option>

                              @endif
                      @endforeach

                  </select>
              </div>


              <div class="form-group">

                <input name="kihieuvb" class="form-control" type="text" placeholder="Kí hiệu văn bản (vd: QD-UBND)" value="{{$vb->kihieuvb}}" style="font-weight: bold; font-size: 1.5em" required="">
              </div>

              <!-- Date -->
              <div class="form-group">
                  <div class="input-group date">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <input name="ngaybanhanh" type="text" class="form-control pull-right" id="datepicker" value="{{$vb->ngaybanhanh}}">
                  </div>
                  <!-- /.input group -->
              </div>

              <div class="form-group">

                <textarea class="form-control" name="trichyeu" rows="3" cols="80" required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;">{{$vb->trichyeu}}</textarea>
              </div>

              <div class="form-group">
                  <label>Người kí</label>

                  <select name="nguoiki_id" id="nguoiki" class="form-control select2" data-placeholder="Chọn người kí" data-rel="chosen" required="">
                      <option value=""></option>

                      @foreach ($cqbh as $cq)
                      <optgroup label="{{ $cq->name}}">
                        @foreach ($cq->nguoiki as $nk)
                          @if ($vb->nguoiki_id == $nk->id)
                          <option value={{ $nk->id }} selected="">{{ $nk->name}}</option>
                          @else
                          <option value={{ $nk->id }}>{{ $nk->name}}</option>
                          @endif
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
              @php

              $items = array();



              foreach($tepvanban as $tvb){
                if ($tvb->vanban_id == $vb->id){
                    $items[] = $tvb->media_id;
                }

              }

              @endphp

              <div class="form-group">
                  <label>Chọn tệp văn bản</label>
                  <select name="tepvanban[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">


                      @foreach($pdfs as $pdf)
                          @if (in_array($pdf->id,$items))
                              <option value="{{$pdf->id}}" selected>{{ $pdf->id.'-'.$pdf->filename }}</option>
                          @else
                              <option value="{{$pdf->id}}">{{ $pdf->id.'-'.$pdf->filename }}</option>
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

      <div class="col-sm-4 hidden-xs">
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

      <div class="col-sm-4 hidden-xs">
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



    <div class="col-md-12 clear-fix">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thư viện văn bản</h3>
        </div>
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

<link rel="stylesheet" href="/admin/css/bootstrap-datepicker.min.css" />

@stop

@section('js')

<script type="text/javascript" src="/admin/js/bootstrap-datepicker.min.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


<script>

    $(document).ready(function() {
        $('.select2').select2({
          width: '100%'
        });
    });

    //Date picker
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    })

    drag = function(ev) {
        event.dataTransfer.setData("text", ev.target.innerText);
    };

    drop = function(ev) {
        ev.target.innerText = ev.target.innerText +" "+ event.dataTransfer.getData("Text");
    };

    allowDrop = function(ev) {
        ev.preventDefault();
    };

</script>
@stop