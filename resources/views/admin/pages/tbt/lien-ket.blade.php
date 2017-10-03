@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Loại tin<small>Các liên kết hiện có</small></h1>
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
              <th>Cơ quan</th>
              <th>Nhóm</th>
              <th>Liên kết</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($coquan as $lt)
              <tr>
                <td>{{$lt->id}}</td>
                <td>{{($lt->name)}}</td>
                <td>{{ $lt->nhomcq->name }}</td>
                <td>{{$lt->lienket}}</td>
                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-lien-ket', $lt->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-lien-ket')}}"
                        :post-data="{{json_encode(['id' => $lt->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá liên kết {{$lt->name}}?">
                      </confirm-modal>
                    </div>
                  {{-- @endif --}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$coquan->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Liên kết</h3>
        </div>
        <form action="{{route('save-lien-ket')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nhóm</label>
              <select class="form-control chuyenmuc" name="nhomcq_id" style="width: 100%;">
                @foreach ($nhomcq as $cm)

                  @if ($nhomcq_id == $cm->id)

                    <option value={{ $cm->id }} selected>{{ $cm->name }}</option>

                  @else
                    <option value={{ $cm->id }}>{{ $cm->name }}</option>

                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="">Tên cơ quan:</label>
              <input type="text"
                     placeholder="Nhập tên cơ quan"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>
              <div class="form-group">
                  <label for="">Liên kết:</label>
                  <input type="text"
                         placeholder="Nhập đường dẫn liên kết http"
                         name="lienket"
                         value="{{old('lienket')}}"
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
  </div>

@endsection

@section('js')

@stop
