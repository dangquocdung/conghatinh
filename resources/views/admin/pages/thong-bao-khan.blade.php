@extends('admin.html')

@section('title')
    <title>Thông báo khẩn </title>
@stop

@section('breadcrumb')
    <section class="content-header">
        <h1>Thông báo khẩn <small>Các Thông báo khẩn hiện có </small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('config')}}">Configurations</a></li>
            <li class="active">Thông báo khẩn </li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8">
            {{--Box--}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông báo khẩn</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nội dung </th>
                            <th>Người tạo </th>
                            <th>Ngày tạo </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($thongbaokhan as $tbk)
                            <tr>
                                <td>{{$tbk->id}}</td>
                                <td>
                                    {{($tbk->noidung)}}

                                    @if ($tbk->daduyet == '1')
                                        {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                                        <div class="pull-left gap-left gap-10">
                                            <confirm-modal
                                                    btn-text='Thôi Duyệt đăng'
                                                    btn-class="btn-danger"
                                                    url="{{url('api/v1/duyet-thong-bao-khan')}}"
                                                    :post-data="{{json_encode(['id' => $tbk->id, 'duyetdang'=>'0'])}}"
                                                    :refresh="true"
                                                    message="Bạn chắc chắn muốn thôi duyệt đăng?">
                                            </confirm-modal>
                                        </div>

                                    @else
                                        <div class="pull-left gap-left gap-10">
                                            <confirm-modal
                                                    btn-text='Chờ duyệt đăng'
                                                    btn-class="btn-success"
                                                    url="{{url('api/v1/duyet-thong-bao-khan')}}"
                                                    :post-data="{{json_encode(['id' => $tbk->id, 'duyetdang'=>'1'])}}"
                                                    :refresh="true"
                                                    message="Bạn chắc chắn muốn duyệt đăng?">
                                            </confirm-modal>
                                        </div>

                                        {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                                    @endif

                                </td>
                                <td>{{ $tbk->user_id }}</td>
                                <td>{{$tbk->created_at}}</td>
                                <td class="col-sm-3">

                                    <div class="pull-left gap-left gap-10">
                                        <confirm-modal
                                                btn-text='<i class="fa fa-trash"></i> Delete'
                                                btn-class="btn-danger"
                                                url="{{url('api/v1/delete-thong-bao-khan')}}"
                                                :post-data="{{json_encode(['id' => $tbk->id])}}"
                                                :refresh="true"
                                                message="Bạn chắc chắn muốn xoá thông báo: {{$tbk->noidung}}?">
                                        </confirm-modal>
                                    </div>
                                    {{-- @endif --}}
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

        <div class="col-sm-4">
            {{--Box--}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Thông báo khẩn </h3>
                </div>
                <form action="{{route('save-so-ban-nganh')}}" method="post" id="role-save-form">
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{csrf_field()}}


                        <div class="form-group">
                            <label for="">Nội dung:</label>
                            <textarea placeholder="Nhập nội dung thông báo "
                                      name="noidung"
                                      class="form-control">{{old('noidung')}}</textarea>
                            <div class="HelpText error">{{$errors->first('noidung')}}</div>
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
    </div>
@endsection