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

                  $vanban = $chuyenmuc->whereIn('id',[4,5])->all();

              @endphp
              <div class="form-group">
                  <label>Chọn thể loại văn bản</label>

                    <select name="loaitin_id" id="loaitin" class="form-control select2" data-placeholder="Chọn loại tin" data-rel="chosen" required="">
                      <option value=""></option>

                      @foreach ($vanban as $cm)
                      <optgroup label="{{ $cm->name}}">
                        @foreach ($cm->loaitin as $lt)
                          <option value={{ $lt->id }}>{{ $lt->name}}</option>
                        @endforeach
                      </optgroup>
                      @endforeach
                    </select>
              </div>


              <div class="form-group">

                <input name="sovb" class="form-control" type="number" placeholder="Số văn bản (vd: 6789)" style="font-weight: bold; font-size: 1.5em" required="">
              </div>

              <div class="form-group">

                <input name="kihieuvb" class="form-control" type="text" placeholder="Kí hiệu văn bản (vd: QD-UBND)" style="font-weight: bold; font-size: 1.5em" required="">
              </div>

              <!-- Date -->
              <div class="form-group">
                  <div class="input-group date">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker" value="<?php echo date('d/m/Y'); ?>">
                  </div>
                  <!-- /.input group -->
              </div>

              <div class="form-group">

                <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Trích yếu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>
              </div>

              <div class="form-group">
                  <label>Người kí</label>
                  <select class="form-control select2" name="nguoiki_id" data-placeholder="Chọn người kí" style="width: 100%;">
                      <option value=""></option>
                      @foreach($nguoiki as $nk)
                          <option value="{{ $nk->id }}">{{ $nk->name }}</option>
                      @endforeach

                  </select>
              </div>

             <van-ban></van-ban>







            
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

      <div class="col-sm-4">
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

      <div class="col-sm-4">
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
        format: 'dd/mm/yyyy',
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