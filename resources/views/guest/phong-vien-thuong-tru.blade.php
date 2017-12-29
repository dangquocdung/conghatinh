@extends('guest.layout.main')
@section('title')
    Danh sách VPĐD, PVTT đăng ký hoạt động
@endsection

@section('content-main')
    <div class="block3" >
        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Danh sách VPĐD, PVTT đăng ký hoạt động</h4>
            </a>

            {{--@role('tbt')--}}

            {{--<button class="pull-right btn btn-info btn-sm" id="themCauHoi">--}}
                {{--<i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm--}}
            {{--</button>--}}

            {{--@endrole--}}


        </div>

        <div class="col-md-12" style="padding: 5px">

            <div class="dv" style="padding: 5px">
                <div class="dv-body ">
                    <table id="example1" class="dv-table">
                        <thead>
                        <tr>
                            <th>
                                <span>TT</span>
                            </th>
                            <th>
                                <span>Đơn vị</span>
                            </th>

                            <th>
                                <span>Họ và Tên</span>
                            </th>

                            <th>
                                <span>Số TNB</span>
                            </th>
                            <th>
                                <span>Điện thoại</span>
                            </th>
                            <th>
                                <span>Email</span>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($phongvientt as $pvtt)
                            <tr>
                                <td>{{ $pvtt->id }}</td>
                                <td>{{ $pvtt->cqbc }}</td>
                                <td>{{ $pvtt->pvtt }}</td>
                                <td>{{ $pvtt->sothe }}</td>
                                <td>{{ $pvtt->dienthoai }}</td>
                                <td>{{ $pvtt->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>


        {{--<div id="app" style="padding: 5px;">--}}
            {{--<phong-vien-thuong-tru source="/api/phong-vien-thuong-tru" title="Danh sách" />--}}
        {{--</div>--}}

    </div>
@endsection

@section('content-right')
    @include('guest.menu-right.chuyen-trang')
@stop

@section('js')
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {


            $('#example1').DataTable({
                "iDisplayLength": 25,
                "language": {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Hiển thị _MENU_ mục",
//                    "sZeroRecords": "No se encontraron resultados",
//                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
//                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
//                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoFiltered": "(lọc trong tổng _MAX_ bản ghi)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
//                    "sLoadingRecords": "Cargando...",
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




