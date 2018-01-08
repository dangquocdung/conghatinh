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
        @foreach($chuyenmuc->sortbydesc('thutu') as $cm)
            @if (count($cm->vanbankhac) > 0)
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $cm->name }} &nbsp;({{ count($cm->vanbankhac) }})</h3>
        </div>
        <!-- /.box-header -->

          <div class="box-body">
              <div class="card">
                  <ul class="nav nav-tabs" role="tablist">

                      @foreach($cm->loaitin as $lt)

                          @if (count($lt->vanbankhac) > 0)
                              @if ($loop->iteration == 1)
                                  <li class="active">
                                      <a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">
                                          {{$lt->name}}
                                      </a>
                                  </li>
                              @else
                                  <li>
                                      <a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">
                                          {{$lt->name}}
                                      </a>
                                  </li>
                              @endif
                          @endif

                      @endforeach

                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div class="tab-content">
                          @foreach($cm->loaitin as $lt)
                              <div class="to-chuc tab-pane

                                      @if ($lt->thutu == '1')
                                      active " id="{{$lt->slug}}">

                                  @else
                                      " id="{{$lt->slug}}">

                              @endif
                              <!-- /.box-header -->
                                <div class="box-body table-responsive">
                                  <table class="table table-bordered table-striped table-hover tblLCT">
                                    <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Loại </th>
                                      <th>Nội dung</th>
                                      <th>Tệp đính kèm</th>
                                      <th>Ngày ban hành </th>
                                        <th>
                                            <a class="btn btn-warning btn-xs" href="{{route('tao-van-ban-khac')}}"><i class="fa fa-plus "></i> Thêm </a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach ($lt->vanbankhac->sortbydesc('id')->take(50) as $key=>$vbk)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $vbk->loaitin->name }}</td>
                                            <td>
                                                {{ $vbk->name }}
                                                <br>

                                                @if ($vbk->daduyet == '1')
                                                    <span class="label label-success">Đã duyệt đăng</span>
                                                @else
                                                    <div class="pull-left gap-left gap-10">
                                                        <confirm-modal
                                                                btn-text='Chờ duyệt'
                                                                btn-class="btn-warning"
                                                                url="{{url('api/v1/duyet-van-ban-khac')}}"
                                                                :post-data="{{json_encode(['id' => $vbk->id])}}"
                                                                :refresh="true"
                                                                message="Bạn chắc chắn muốn duyệt đăng văn bản {{$vbk->name}}?">
                                                        </confirm-modal>
                                                    </div>

                                                    {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                                                @endif

                                            </td>
                                            <td>
                                                @foreach($vbk->tepvanbankhac as $tvb)
                                                    <a href="{{ $tvb->path }}" target="_blank">
                                                        <img src="/images/pdf-file-512.png" alt="{{ $vbk->name }}" title="{{ $vbk->name }}" width="20px">
                                                    </a>
                                                @endforeach
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($vbk->ngaybanhanh)->format('d-m-Y') }}</td>
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

                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
      {{--End box--}}
            @endif
        @endforeach
    </div>
  </div>
@stop

@section('js')

  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
          $('.tblLCT').DataTable({

              "iDisplayLength": 25,

              "order": [[ 0, "asc" ]],

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


