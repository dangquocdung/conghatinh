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
                                <td>{{($tbk->noidung)}}</td>
                                <td>{{ $tbk->user_id }}</td>
                                <td>{{$tbk->created_at}}</td>
                                <td class="col-sm-3">
                                    {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                                    <div class="pull-left">
                                        <a href="{{route('edit-so-ban-nganh', $tbk->id)}}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </div>
                                    <div class="pull-left gap-left gap-10">
                                        <confirm-modal
                                                btn-text='<i class="fa fa-trash"></i> Delete'
                                                btn-class="btn-danger"
                                                url="{{url('api/v1/delete-lien-ket')}}"
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

                    {{$thongbaokhan->render()}}
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
                            <input type="text"
                                   placeholder="Nhập nội dung thông báo "
                                   name="name"
                                   value="{{old('noidung')}}"
                                   class="form-control">
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