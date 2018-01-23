@extends('admin.html')

@section('title')
    <title>Góp ý dự thảo văn bản</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Góp ý dự thảo văn bản</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị </a></li>
      <li><a href="javascript:void(0);">Chuyên trang </a></li>
      <li class="active">Góp ý dự thảo văn bản</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $dt->name }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>TT</th>
                    <th>Ngày gởi</th>
                    <th>Họ và Tên</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Nội dung</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($gopy as $gy)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($gy->created_at)->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $gy->hoten }}</td>
                        <td>{{ $gy->sodt }}</td>
                        <td>{{ $gy->email }}</td>
                        <td>{{ $gy->diachi }}</td>
                        <td>{!! $gy->noidung !!}</td>

                        <td>

                            @if ($gy->daduyet == '1')
                                {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                                <div class="pull-left gap-left gap-10">
                                    <confirm-modal
                                            btn-text='Thôi Duyệt đăng'
                                            btn-class="btn-danger"
                                            url="{{url('api/v1/duyet-gop-y-du-thao')}}"
                                            :post-data="{{json_encode(['id' => $gy->id, 'duyetdang'=>'0'])}}"
                                            :refresh="true"
                                            message="Bạn chắc chắn muốn thôi duyệt đăng góp ý này?">
                                    </confirm-modal>
                                </div>

                            @else
                                <div class="pull-left gap-left gap-10">
                                    <confirm-modal
                                            btn-text='Chờ duyệt đăng'
                                            btn-class="btn-success"
                                            url="{{url('api/v1/duyet-gop-y-du-thao')}}"
                                            :post-data="{{json_encode(['id' => $gy->id, 'duyetdang'=>'1'])}}"
                                            :refresh="true"
                                            message="Bạn chắc chắn muốn duyệt đăng góp ý này?">
                                    </confirm-modal>
                                </div>

                                {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                            @endif


                            <div class="pull-left gap-left gap-10" style="padding-left: 5px">
                                <confirm-modal
                                        btn-text='<i class="fa fa-trash"></i> Delete'
                                        btn-class="btn-danger"
                                        url="{{url('api/v1/delete-gop-y-du-thao')}}"
                                        :post-data="{{json_encode(['id' => $gy->id])}}"
                                        :refresh="true"
                                        message="Bạn chắc chắn muốn xoá góp ý này?">
                                </confirm-modal>
                            </div>



                        </td>

                    </tr>



                @endforeach



                </tbody>

            </table>
          <div class="text-center">
            {{$gopy->render()}}
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

  </div>

@endsection
