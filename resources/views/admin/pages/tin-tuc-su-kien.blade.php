	@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Tin Tức<small>Các tin tức - sự kiện hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Tin tức - Sự kiện</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tin tức - Sự kiện</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="table-responsive">

          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <td>#</td>
              <td>Hình ảnh</td>
              
              <td>
                Tiêu đề
              </td>
              <td>Loại Tin</td>
              
              <td>Giới thiệu</td>
              
              
              <td></td>
            </tr>
            </thead>
            <tbody>

              @foreach ($tintuc as $tin)

              <tr>
                <td>{{$tin->id}}</td>
                <td><img src="{{$tin->avatar}}" alt="{{$tin->name}}" width="120"></td>
                
                <td>
                  {!! ucwords($tin->name) !!}
                  <br>
                  <span class="label label-warning">Nổi bật</span>
                  <a href="chi-tiet/{{ $tin->slug }}"><span class="label label-success">Đã duyệt</span></a>
                </td>
                <td>{{$tin->loaitin->name}}</td>
                
                <td>{{$tin->gioithieu}}</td>
                
                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-tin-tuc', $tin->slug)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-tin-tuc')}}"
                        :post-data="{{json_encode(['id' => $tin->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá bản tin {{$tin->name}}?">
                      </confirm-modal>
                    </div>
                  {{-- @endif --}}
                </td>
              </tr>

              @endforeach
            
            </tbody>
          </table>
          </div>

          
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>
@endsection