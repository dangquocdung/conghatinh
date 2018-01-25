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

            @if (!empty($cbtt))
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
                            <td><a href="{{ route('cong-bo-thong-tin',$cb->slug) }}">{{ $cb->name }}</a></td>
                            <td>{!! $cb->thongtin !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @elseif (!empty($cb))

                <table id="tblDNH" class="table table-striped table-bordered table-responsive table-sm">

                    <tbody>

                        <tr>
                            <td>Thông tin doanh nghiệp</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Chiến lược phát triển</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tin Tức hoạt động chính</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kế hoạch sản xuất, kinh doanh và đầu tư 5 năm</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kế hoạch sản xuất, kinh doanh và đầu tư hàng năm</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Báo cáo đánh giá sản xuất, kinh doanh và đầu tư hàng năm</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Báo cáo đánh giá sản xuất, kinh doanh 3 năm gần nhất</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Báo cáo kết quả thức hiện nhiệm vụ công ích và trách nhiệm xã hội</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tình hình thực hiện sắp xếp, đổi mới doanh nghiệp hàng năm</td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>



            @endif
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



