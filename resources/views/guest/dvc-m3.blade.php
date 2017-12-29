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

        <div class="loai-tin">
                <table id="tblDVC" class="table table-striped table-bordered table-responsive table-sm">
                    <thead>
                    <tr>
                        <th>TT</th>
                        <th>Tên</th>
                        <th>Lĩnh vực </th>
                        <th>Đơn vị cung cấp </th>
                        <th>Cấp độ </th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($dvc as $dv)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dv->name }}</td>
                                <td>{{ $dv->linhvuc }}</td>
                                <td>{{ $dv->donvicungcap }}</td>
                                <td>{{ $dv->capdo }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    @stop


@section('js')
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {


            $('#tblDVC').DataTable({
                "iDisplayLength": 25,
                "language": {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Hiển thị _MENU_ mục",
//                    "sZeroRecords": "No se encontraron resultados",
//                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
//                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
//                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
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