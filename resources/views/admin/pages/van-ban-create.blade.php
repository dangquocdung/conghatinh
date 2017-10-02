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
    <div class="col-md-12">
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

                  $vanban = $chuyenmuc->whereIn('id',[4,5])->all();

              @endphp

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
            
            <br>
            <br>
           

            <input name="name" class="form-control input-lg" type="text" placeholder="Số văn bản" style="font-weight: bold; font-size: 1.5em" required="">
            <br>


            <textarea class="form-control" name="gioithieu" rows="3" cols="80" placeholder="Trích yếu ..." required="" style="font-size: 1.1em; font-weight: bold; font-style: italic;"></textarea>


            <br>

             <van-ban></van-ban>

            <br>



            
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
    <div class="col-md-12">
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

</script>
@stop