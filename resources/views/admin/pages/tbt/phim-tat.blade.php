@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Liên kết<small>Các liên kết hiện có</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Liên kết</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Liên kết</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Biểu tượng</th>
              <th>Liên kết</th>
              <th>Thứ tự</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($phimtat as $pt)
            <tr>
              <td>{{$pt->id}}</td>
              <td>{{($pt->name)}}</td>
              <td>{{ $pt->icon }}</td>
              <td><a href="{{ $pt->link }}" target="_blank" title="{{ $pt->link }}"><i class="fa fa-link" aria-hidden="true"></i></a></td>
              <td>{{ $pt->thutu }}</td>
              <td></td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->


        {{--<div class="box-body">--}}

          {{--<table class="table table-bordered table-striped table-hover">--}}
            {{--<thead>--}}
              {{--<tr>--}}
                {{--<th>#</th>--}}
                {{--<th>Tên</th>--}}
                {{--<th>Biểu tượng</th>--}}
                {{--<th>Liên kết</th>--}}
                {{--<th>Thứ tự</th>--}}
                {{--<th></th>--}}
              {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
              {{--@foreach($phimtat as $pt)--}}
                {{--<tr>--}}
                  {{--<td>{{$pt->id}}</td>--}}
                  {{--<td>{{($pt->name)}}</td>--}}
                  {{--<td>{{ $pt->icon }}</td>--}}
                  {{--<td>{{$pt->link}}</td>--}}
                  {{--<td>{{ $pt->thutu }}</td>--}}
                  {{--<td></td>--}}
                {{--</tr>--}}
              {{--@endforeach--}}
            {{--</tbody>--}}
          {{--</table>--}}

        {{--</div>--}}
        {{--<!-- /.box-body -->--}}
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Liên kết</h3>
        </div>
        <form action="{{route('phim-tat.store')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label for="">Tên:</label>
              <input type="text"
                     placeholder="Nhập tên liên kết"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Biểu tượng:</label>
              <input type="text"
                     placeholder="Nhập biểu tượng"
                     name="icon"
                     value="{{old('icon')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Liên kết:</label>
              <input type="text"
                     placeholder="Nhập đường dẫn liên kết http"
                     name="link"
                     value="{{old('link')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($phimtat); $i++)
                  <option value={{ $i }}>{{ $i }}</option>
                @endfor
                <option value={{ $i }} selected>{{ $i }}</option>
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">Gửi thông tin</button>
          </div>
        </form>
      </div>
      {{--End box--}}
    </div>
  </div>

@endsection

