@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Doanh nghiệp hỏi - CQNN trả lời</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Doanh nghiệp hỏi - CQNN trả lời</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Doanh nghiệp hỏi - CQNN trả lời</h3>
        </div>
        <!-- /.box-header -->

          <div class="box-body table-responsive">

              <div class="table-responsive">

                  <table class="table table-bordered table-striped table-hover tblDNH">
                      <thead>
                      <tr>
                          <th>TT</th>
                          <th>Doanh nghiệp</th>
                          <th>Địa chỉ</th>
                          <th>Câu hỏi</th>
                          <th>Cơ quan trả lời </th>
                          <th>Câu Trả lời</th>
                      </tr>
                      </thead>
                          <tbody>


                          @foreach($dnhoi as $dnh)
                              <tr>
                                  <td>
                                      {{ $dnh->id }}
                                      @if ($dnh->daduyet == '1')
                                          {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                                          <div class="pull-left gap-left gap-10">
                                              <confirm-modal
                                                      btn-text='Hủy duyệt'
                                                      btn-class="btn-danger"
                                                      url="{{ route('duyet-doanh-nghiep-hoi') }}"
                                                      :post-data="{{json_encode(['id' => $dnh->id, 'duyetdang'=>'0'])}}"
                                                      :refresh="true"
                                                      message="Bạn chắc chắn muốn thôi duyệt đăng câu hỏi?">
                                              </confirm-modal>
                                          </div>

                                      @else
                                          <div class="pull-left gap-left gap-10">
                                              <confirm-modal
                                                      btn-text='Chờ duyệt'
                                                      btn-class="btn-success"
                                                      url="{{ route('duyet-doanh-nghiep-hoi') }}"
                                                      :post-data="{{json_encode(['id' => $dnh->id, 'duyetdang'=>'1'])}}"
                                                      :refresh="true"
                                                      message="Bạn chắc chắn muốn duyệt đăng câu hỏi?">
                                              </confirm-modal>
                                          </div>

                                          {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                                      @endif

                                      <div class="pull-left gap-left gap-10">
                                          <confirm-modal
                                                  btn-text='Xóa'
                                                  btn-class="btn-danger"
                                                  url="{{ route('delete-doanh-nghiep-hoi') }}"
                                                  :post-data="{{json_encode(['id' => $dnh->id])}}"
                                                  :refresh="true"
                                                  message="Bạn chắc chắn muốn xóa?">
                                          </confirm-modal>
                                      </div>
                                  </td>
                                  <td>{{ \Carbon\Carbon::parse($dnh->created_at)->format('d-m-Y H:i:s') }} <br>{{ $dnh->doanhnghiep }}</td>
                                  <td>{{ $dnh->diachi }}</td>
                                  <td class="col-md-3 more">
                                      {!! $dnh->cauhoi !!}
                                  </td>
                                  <td>{{ $dnh->coquantraloi }}</td>
                                  <td class="col-md-3">
                                      @if (strlen($dnh->cautraloi) >0 )

                                          <a class="btn btn-info btn-xs chinh-sua" data-toggle="modal" data-target="#tra-loi" dnh-id="{{ $dnh->id }}" cq-id="{{$dnh->coquan_id}}" ntl="{{$dnh->nguoitraloi}}" cv="{{$dnh->chucvu}}" ctl="{{$dnh->cautraloi}}">Chỉnh sửa</a>



                                          Ngày {{ \Carbon\Carbon::parse($dnh->ngaytraloi)->format('d-m-Y H:i:s') }} <br>
                                          {{--<strong>{{ $dnh->nguoitraloi }}</strong> --}}
                                          {{--<em>({{ $dnh->chucvu }}):</em>--}}
                                          <span class="more">
                      {!! $dnh->cautraloi !!}

                    </span>

                                      @else

                                          <div class="pull-left gap-left gap-10">
                                              <a class="btn btn-info btn-xs tra-loi" data-toggle="modal" data-target="#tra-loi" dnh-id="{{ $dnh->id }}" cq-id="{{$dnh->coquan_id}}">Trả lời</a>
                                          </div>
                                      @endif

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


@section('js')

    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('.tblTinTuc').DataTable({

                "iDisplayLength": 10,

                "order": [[ 1, "desc" ]],

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
