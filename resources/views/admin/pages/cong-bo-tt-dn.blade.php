@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Công bố Thông tin Doanh nghiệp</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Công bố Thông tin Doanh nghiệp</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">

        <!-- /.box-header -->

          <div class="box-body table-responsive">

              <div class="table-responsive">

                  <table id="tblDNH" class="table table-striped table-bordered table-responsive table-sm">
                      <thead>
                      <tr>
                          <th>TT</th>
                          <th>Tên Doanh nghiệp </th>
                          <th>Thông tin doanh nghiệp  </th>
                          <th></th>
                      </tr>
                      </thead>

                      <tbody>
                      @foreach($cbtt as $cb)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <th><a href="{{ route('cong-bo-thong-tin',$cb->slug) }}" style="text-decoration: none" target="_blank">{{ $cb->name }}</a></th>
                              <td>{!! $cb->thongtin !!}</td>
                              <td>
                                  <div class="pull-left gap-left gap-10">
                                      <a class="btn btn-info btn-xs tra-loi" href="{{ route('edit-doanh-nghiep-hoi',$cb->id) }}"><i class="fa fa-edit"></i> Sửa </a>
                                  </div>

                                  @role('tbt')

                                  <div class="pull-left gap-left gap-10">
                                      <confirm-modal
                                              btn-text='<i class="fa fa-edit"></i> Xóa'
                                              btn-class="btn-danger"
                                              url="{{ route('delete-doanh-nghiep-hoi') }}"
                                              :post-data="{{json_encode(['id' => $cb->id])}}"
                                              :refresh="true"
                                              message="Bạn chắc chắn muốn xóa?">
                                      </confirm-modal>
                                  </div>
                                  @endrole
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



    <!-- Bootstrap WYSIHTML5 -->
    {{--<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>--}}
    {{--<script>--}}
        {{--$(function () {--}}

            {{--$('.textarea').wysihtml5()--}}
        {{--})--}}
    {{--</script>--}}

    <script>


        $(document).ready(function() {

            $(function () {
                $('.tblDNH').DataTable({

                    "iDisplayLength": 10,

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
            });


        });

    </script>

@stop
