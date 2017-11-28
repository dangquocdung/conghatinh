@extends('guest.layout.main')
@section('title')
    <title>Đường dây nóng</title>
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Đường dây nóng</h4>
            </a>




        </div>


        <div class="col-md-12" style="padding: 5px">

            <div class="dv" style="padding: 5px">

                <div class="dv-body">
                    <table id="example1" class="dv-table">
                        <thead>
                        <tr>
                            <th>
                                <span>TT</span>
                            </th>
                            <th>
                                <span>Cơ quan</span>
                            </th>

                            <th>
                                <span>Website</span>
                            </th>

                            <th>
                                <span>Điện thoại</span>
                            </th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($nhomcq as $ncq)
                            @foreach($ncq->coquan as $cq)
                            <tr>
                                <td>{{ $cq->id }}</td>
                                <td>{{ $cq->name }}</td>
                                <td><a href="{{ $cq->lienket }}" target="_blank">{{ $cq->lienket }}</a></td>
                                <td>{{ $cq->sodt }}</td>
                            </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        {{--<div id="app" style="padding: 5px;">--}}
            {{--<nguoi-phat-ngon source="/api/nguoi-phat-ngon" title="Danh sách" />--}}
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



