@extends('admin.html')

@section('title')
  <title>Lịch công tác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Lịch công tác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Lịch công tác</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lịch công tác</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover" id="tblLCT">
            <thead>
            <tr>
              <th>#</th>
              <th>Loại </th>
              <th>Tháng/Năm</th>
              <th>Nội dung</th>
              <th>Tệp đính kèm</th>
              <th>Ngày tạo</th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>

            @foreach ($chuyenmuc as $cm)

              @foreach ($cm->lichct->sortbydesc('id') as $lct)
              <tr>
                <td>{{ $lct->id }}</td>
                <td>{{ $lct->loaitin->name }}</td>
                <td>{{ $lct->thang }}</td>
                <td><a href="{{ route('lich-cong-tac-show',$lct->id) }}" target="_blank">{{ $lct->name }}</a></td>
                <td>
                  @if (!empty($lct->media_id))
                    <a href="{{ $lct->media->directory.'/'.$lct->media->filename.'.'.$lct->media->extension }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                  @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($lct->created_date)->format('d-m-Y H:i:s') }}</td>
                <td>

                  <div class="pull-left">
                    <a href="{{route('lich-cong-tac.edit', $lct->id)}}" class="btn btn-primary btn-xs">
                      <i class="fa fa-edit"></i> Sửa
                    </a>
                  </div>
                  <div class="pull-left gap-left gap-10">
                    {!! Form::open(['method' => 'DELETE','route' => ['lich-cong-tac.destroy', $lct->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                  </div>

                </td>
              </tr>
                @endforeach
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>
  </div>
@stop

@section('js')

  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
          $('#tblLCT').DataTable({

              "iDisplayLength": 25,

              "order": [[ 0, "desc" ]],

              "sType": "numeric",

              "language": {
                  "sProcessing": "Đang xử lý...",
                  "sLengthMenu": "Hiển thị _MENU_ mục",
                  "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
                  "sInfoPostFix": "",
                  "sSearch": "Tìm kiếm:",
                  "sUrl": "",
                  "sInfoThousands": ",",
                  "oPaginate": {
                      "sFirst": "Đầu tiên",
                      "sLast": "Cuối cùng",
                      "sNext": "Sau",
                      "sPrevious": "Trước"
                  }
              }
          })
      })


  </script>

@stop


