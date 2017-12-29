@extends('guest.layout.main')
@section('title')
    Tra cứu dịch vụ công 
@endsection

@section('content-main')
    <div class="block3">


        <div class="portlet-header">

            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tra cứu dịch vụ công </h4>
            </a>



        </div>

        @include('guest.notifications')

        <div class="box-body">
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a href="#mucdo2" data-toggle="tab" title="Dịch vụ công mức độ 2">
                            DVC TT mức độ 2
                        </a>
                    </li>

                    <li>
                        <a href="#mucdo3" data-toggle="tab" title="Dịch vụ công mức độ 3">
                            DVC TT mức độ 3
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-content">
                        <div class="to-chuc tab-pane active " id="mucdo2">

                                <div class="loai-tin">
                                        <table id="tblDVC2" class="table table-striped table-bordered table-responsive table-sm">
                                            <thead>
                                            <tr>
                                                <th>TT</th>
                                                <th>Tên</th>
                                                <th>Lĩnh vực </th>
                                                <th>Đơn vị</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($dvc2 as $dv)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $dv->name }}</td>
                                                        <td>{{ $dv->linhvuc }}</td>
                                                        <td>{{ $dv->donvicungcap }}</td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>


                        <div class="to-chuc tab-pane active " id="mucdo3">

                            <div class="loai-tin">
                                <table id="tblDVC3" class="table table-striped table-bordered table-responsive table-sm">
                                    <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên</th>
                                        <th>Đơn vị cung cấp </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($dvc3 as $dv)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dv->name }}</td>
                                            <td>{{ $dv->donvicungcap }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop


@section('js')
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {


            $('#tblDVC2').DataTable({
                "iDisplayLength": 25,
                "language": {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Hiển thị _MENU_ mục",
//                    "sZeroRecords": "No se encontraron resultados",
//                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
//                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
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
            });

            $('#tblDVC3').DataTable({
                "iDisplayLength": 25,
                "language": {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Hiển thị _MENU_ mục",
//                    "sZeroRecords": "No se encontraron resultados",
//                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
//                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
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