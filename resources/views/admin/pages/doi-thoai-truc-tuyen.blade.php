@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Đối thoại trực tuyến</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Đối thoại trực tuyến</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Đối thoại trực tuyến</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>TT</th>
                <th>Tiêu đề</th>
                <th>Hình ảnh</th>
                <th>Video</th>
                <th>Giới thiệu</th>
                <th>
                    <a class="btn btn-warning btn-xs" href="{{route('doi-thoai-truc-tuyen.create')}}"><i class="fa fa-plus "></i> Thêm </a>
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($doithoaitructuyen as $dttt)
                <tr>
                    <td>{{ $dttt->id }}</td>
                    <td>
                        {{ $dttt->name }}
                        <br>
                        @if ($dttt->daduyet == '1')
                            {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                            <div class="pull-left gap-left gap-10">
                                <confirm-modal
                                        btn-text='Thôi Duyệt đăng'
                                        btn-class="btn-danger"
                                        url="{{url('api/v1/duyet-doi-thoai-truc-tuyen')}}"
                                        :post-data="{{json_encode(['id' => $dttt->id, 'duyetdang'=>'0'])}}"
                                        :refresh="true"
                                        message="Bạn chắc chắn muốn thôi duyệt đăng bản tin {{$dttt->name}}?">
                                </confirm-modal>
                            </div>

                        @else
                            <div class="pull-left gap-left gap-10">
                                <confirm-modal
                                        btn-text='Chờ duyệt đăng'
                                        btn-class="btn-success"
                                        url="{{url('api/v1/duyet-doi-thoai-truc-tuyen')}}"
                                        :post-data="{{json_encode(['id' => $dttt->id, 'duyetdang'=>'1'])}}"
                                        :refresh="true"
                                        message="Bạn chắc chắn muốn duyệt đăng bản tin {{$dttt->name}}?">
                                </confirm-modal>
                            </div>

                            {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                        @endif
                    </td>
                    <td>

                        <img src="{{ $dttt->avatar }}" alt="{{ $dttt->name }}" width="120">



                    </td>
                    <td>{{ $dttt->video }}</td>
                    <td>{{ $dttt->gioithieu }}</td>
                    <td class="col-sm-3">
                        <div class="pull-left">
                            <a href="{{route('doi-thoai-truc-tuyen.edit', $dttt->slug)}}" class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </div>
                        <div class="pull-left gap-left gap-10" style="padding-left: 5px">
                            <confirm-modal
                                    btn-text='<i class="fa fa-trash"></i> Delete'
                                    btn-class="btn-danger"
                                    url="{{url('api/v1/delete-doi-thoai-truc-tuyen')}}"
                                    :post-data="{{json_encode(['id' => $dttt->id])}}"
                                    :refresh="true"
                                    message="Bạn chắc chắn muốn xoá bản tin {{$dttt->name}}?">
                            </confirm-modal>
                        </div>
                    </td>
                </tr>

                @endforeach

            </tbody>
          </table>


        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>

@endsection