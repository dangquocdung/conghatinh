@extends('admin.html')

@section('title')
  <title>Văn bản khác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Văn bản khác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Văn bản khác </li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Văn bản khác </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover" id="tblLCT">
            <thead>
            <tr>
              <th>#</th>
              <th>Loại </th>
              <th>Nội dung</th>
              <th>Tệp đính kèm</th>
              <th>Ngày tạo</th>
              <th>

              </th>
            </tr>
            </thead>
            <tbody>

            @foreach ($chuyenmuc as $cm)

              @foreach ($cm->lichct->sortbydesc('id') as $vbk)
              <tr>
                <td>{{ $vbk->id }}</td>
                <td>{{ $vbk->loaitin->name }}</td>
                <td>{{ $vbk->name }}</td>
                <td>
                  @if (!empty($vbk->media_id))
                    <a href="{{ $vbk->media->directory.'/'.$vbk->media->filename.'.'.$vbk->media->extension }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                  @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($vbk->created_at)->format('d-m-Y H:i:s') }}</td>
                <td>

                    <div class="pull-left">
                        <a href="{{route('edit-van-ban-khac', $vbk->id)}}" class="btn btn-primary btn-xs">
                            <i class="fa fa-edit"></i> Sửa
                        </a>
                    </div>

                    <div class="pull-left gap-left gap-10" style="padding-left: 5px">
                        <confirm-modal
                                btn-text='<i class="fa fa-trash"></i> Xoá'
                                btn-class="btn-danger"
                                url="{{url('api/v1/delete-van-ban-khac')}}"
                                :post-data="{{json_encode(['id' => $vbk->id])}}"
                                :refresh="true"
                                message="Bạn chắc chắn muốn xoá văn bản {{$vbk->kihieuvb}}?">
                        </confirm-modal>
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


