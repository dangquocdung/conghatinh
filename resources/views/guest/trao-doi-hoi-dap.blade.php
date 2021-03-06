@extends('guest.layout.main')
@section('title')
  Hỏi - Đáp trực tuyến
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">

                <div class="portlet-header">

                    <a href="javascript:void(0);">
                        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Hỏi - Đáp trực tuyến</h4>
                    </a>

                    <button class="pull-right btn btn-info btn-sm" id="themCauHoi" style="margin-right: 7px">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Đặt câu hỏi
                    </button>

                </div>

                @include('guest.notifications')

                <div class="input-box" style="padding: 5px; display: none;">
                    <div class="dv" style="padding-bottom: 5px">

                        <div class="breadcrumb">

                                    <span class="breadcrumb-item active">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i> Đặt câu hỏi
                                    </span>

                        </div>

                        <form action="{{ route('hoi-dap-truc-tuyen.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Họ và tên<sup>*</sup> </label>
                                    <input type="text" class="form-control" name="hoten" required>
                                    @if ($errors->has('daidien'))
                                        <div class="error">{{ $errors->first('daidien') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại<sup>*</sup> </label>
                                    <input type="number" class="form-control" name="sodt" required>
                                    @if ($errors->has('dienthoai'))
                                        <div class="error">{{ $errors->first('dienthoai') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email<sup>*</sup> </label>
                                    <input type="email" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ<sup>*</sup> </label>
                                    <input type="text" class="form-control" name="diachi" required>
                                    @if ($errors->has('diachi'))
                                        <div class="error">{{ $errors->first('diachi') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Câu hỏi<sup>*</sup> </label>
                                    <textarea class="form-control textarea" name="cauhoi" placeholder="Nhập câu hỏi ở đây"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                                    @if ($errors->has('cauhoi'))
                                        <div class="error">{{ $errors->first('cauhoi') }}</div>
                                    @endif
                                </div>

                                <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi câu hỏi</button>
                                <br>
                            </div>
                        </form>
                    </div>


                </div>

                <script>
                    $("#themCauHoi").click(function () {

                        if ( $(".input-box").css("display") == "block" ){

                            $(".input-box").css("display","none");

                        }else{
                            $(".input-box").css("display","block");
                        }
                    })
                </script>


        <div class="col-sm-12" style="padding: 5px">

            <div class="dv" style="padding: 5px">

                <div class="dv-body">
                    <table id="example1" class="dv-table">
                        <thead>
                        <tr>
                            <th>TT</th>
                            <th>Họ Tên</th>
                            <th>Số ĐT</th>
                            <th>Câu hỏi</th>
                            <th>Câu Trả lời</th>
                            <th>Ngày đăng </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hoidaptt as $hdtt )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hdtt->hoten }}</td>
                                <td>{{ $hdtt->sodt }}</td>
                                <td>{!! $hdtt->cauhoi !!}</td>
                                <td>{!! $hdtt->cautraloi !!}</td>
                                <td>{{ \Carbon\Carbon::parse($hdtt->created_at)->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

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



