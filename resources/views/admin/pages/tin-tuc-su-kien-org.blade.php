@extends('admin.html')

@section('title')
  <title>Danh sách tin, bài</title>
@stop

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
              <th>#</th>
              <th>Ngày đăng</th>
              <th>Hình ảnh</th>
              
              <th>
                Tiêu đề
              </th>
              <th>Loại Tin</th>
              
              <th>Giới thiệu</th>
              <th>Tệp đính kèm</th>

              
              
              <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>

              @foreach ($tintuc as $tin)

              <tr>
                <td>{{$tin->id}}</td>
                <td>
                  {{ \Carbon\Carbon::parse($tin->ngaydang)->format('d/m/Y H:i:s') }}

                  @if ($tin->noibat == '1')
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Hủy Nổi bật'
                              btn-class="btn-danger"
                              url="{{url('api/v1/noi-bat-tin-tuc')}}"
                              :post-data="{{json_encode(['id' => $tin->id, 'noibat'=>'0'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn hủy nổi bật bản tin {{$tin->name}}?">
                      </confirm-modal>
                    </div>

                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Làm Nổi bật'
                              btn-class="btn-warning"
                              url="{{url('api/v1/noi-bat-tin-tuc')}}"
                              :post-data="{{json_encode(['id' => $tin->id, 'noibat'=>'1'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn làm nổi bật bản tin {{$tin->name}}?">
                      </confirm-modal>
                    </div>

                  @endif

                </td>
                <td><img src="{{$tin->avatar}}" alt="{{$tin->name}}" width="120"></td>
                
                <td>
                  <strong>{{$tin->name}}</strong>
                  <br>



                  @if ($tin->daduyet == '1')
                    {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Thôi Duyệt đăng'
                              btn-class="btn-danger"
                              url="{{url('api/v1/duyet-tin-tuc')}}"
                              :post-data="{{json_encode(['id' => $tin->id, 'duyetdang'=>'0'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn thôi duyệt đăng bản tin {{$tin->name}}?">
                      </confirm-modal>
                    </div>

                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Chờ duyệt đăng'
                              btn-class="btn-success"
                              url="{{url('api/v1/duyet-tin-tuc')}}"
                              :post-data="{{json_encode(['id' => $tin->id, 'duyetdang'=>'1'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn duyệt đăng bản tin {{$tin->name}}?">
                      </confirm-modal>
                    </div>

                    {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                  @endif
                </td>
                <td>{{$tin->loaitin->name}}</td>
                
                <td>{{$tin->gioithieu}}</td>

                <td>



                  @foreach($tin->teptintuc as $ttt)
                    <a href="{{ $ttt->path }}" target="_blank">
                      <img src="/images/pdf-file-512.png" alt="{{ $tin->name }}" title="{{ $tin->name }}" width="20px">
                    </a>
                  @endforeach

                </td>
                
                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-tin-tuc', $tin->slug)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10" style="padding-left: 5px">
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

            {{$tintuc->render()}}
          </div>

          
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>
@endsection