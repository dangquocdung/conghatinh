@extends('guest.layout.main')
@section('title')
    Công bố Thông tin Doanh nghiệp
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Công bố Thông tin Doanh nghiệp </h4>
            </a>




        </div>



        <div class="loai-tin">
            <table id="tblDNH" class="table table-striped table-bordered table-responsive table-sm">
                <thead>
                <tr>
                    <th>TT</th>
                    <th>Tên Doanh nghiệp </th>
                    <th>Thông tin doanh nghiệp  </th>
                </tr>
                </thead>

                <tbody>
                @foreach($cbtt as $cb)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cb->name }}</td>
                        <td>{{ $cb->mota }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>




    </div>
@endsection

@section('js')

    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            $('.textarea').wysihtml5()
        })
    </script>
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {


            $('#tblDNH').DataTable({
                "iDisplayLength": 10,
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
        })
    </script>
@stop



