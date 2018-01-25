@extends('guest.layout.main')
@section('title')
    Công bố Thông tin Doanh nghiệp
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="{{ route('cong-bo-thong-tin') }}">
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
                            <th><a href="{{ route('cong-bo-thong-tin',$cb->slug) }}" style="text-decoration: none">{{ $cb->name }}</a></th>
                            <td>{!! $cb->thongtin !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @elseif (!empty($cb))
                <br>
                <h3 style="text-align: center; text-transform: uppercase">{{ $cb->name }}</h3>

                <table id="tblDNH" class="table table-striped table-bordered table-responsive table-sm">

                    <tbody>

                        <tr>
                            <th>Thông tin doanh nghiệp</th>
                            <td>{!! $cb->thongtin !!}</td>
                        </tr>
                        <tr>
                            <th>Chiến lược phát triển</th>
                            <td>{{ $cb->chienluoc }}</td>
                        </tr>
                        <tr>
                            <th>Tin Tức hoạt động chính</th>
                            <td>{{ $cb->tintuc }}</td>
                        </tr>
                        <tr>
                            <th>Kế hoạch sản xuất, kinh doanh và đầu tư 5 năm</th>
                            <td>{{ $cb->kh_5nam }}</td>
                        </tr>
                        <tr>
                            <th>Kế hoạch sản xuất, kinh doanh và đầu tư hàng năm</th>
                            <td>{{ $cb->kh_hangnam }}</td>
                        </tr>
                        <tr>
                            <th>Báo cáo đánh giá sản xuất, kinh doanh và đầu tư hàng năm</th>
                            <td>{{ $cb->bc_hangnam }}</td>
                        </tr>
                        <tr>
                            <th>Báo cáo đánh giá sản xuất, kinh doanh 3 năm gần nhất</th>
                            <td>{{ $cb->bc_3nam }}</td>
                        </tr>
                        <tr>
                            <th>Báo cáo kết quả thức hiện nhiệm vụ công ích và trách nhiệm xã hội</th>
                            <td>{{ $cb->nvci }}</td>
                        </tr>
                        <tr>
                            <th>Tình hình thực hiện sắp xếp, đổi mới doanh nghiệp hàng năm</th>
                            <td>{{ $cb->tinhhinh }}</td>
                        </tr><tr>
                            <th>Ghi chú </th>
                            <td>{{ $cb->ghichu }}</td>
                        </tr>

                    </tbody>
                </table>

                @include('guest.layout.tien-ich')



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



