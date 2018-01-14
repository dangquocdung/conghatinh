@extends('guest.layout.main')
@section('title')
    Doanh nghiệp hỏi, CQNN trả lời
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Doanh nghiệp hỏi - CQNN trả lời</h4>
            </a>

            <button class="pull-right btn btn-info btn-sm" id="themCauHoi" style="margin-right: 7px">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Đặt câu hỏi
            </button>



        </div>

        @include('guest.notifications')


        <div class="input-box" style="padding: 5px; display: none">
            <div class="dv" style="padding-bottom: 5px">
                <form action="{{ route('post-doanh-nghiep-hoi') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">



                        <div class="form-group">
                            <label>Doanh nghiệp </label>
                            <input type="text" class="form-control" name="doanhnghiep" required>
                            @if ($errors->has('doanhnghiep'))
                                <div class="error">{{ $errors->first('doanhnghiep') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ </label>
                            <input type="text" class="form-control" name="diachi" required>
                            @if ($errors->has('diachi'))
                                <div class="error">{{ $errors->first('diachi') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Câu hỏi </label>
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

        <div class="loai-tin">
            <table id="tblDNH" class="table table-striped table-bordered table-responsive table-sm">
                <thead>
                <tr>
                    <th>TT</th>
                    <th>Câu hỏi </th>
                    <th>Doanh nghiệp </th>
                    <th>Cơ quan trả lời </th>
                </tr>
                </thead>

                <tbody>
                @foreach($dnhoi as $dnh)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dnh->cauhoi }}</td>
                        <td>{{ $dnh->doanhnghiep }}</td>
                        <td>{{ $dnh->coquantraloi }}</td>
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
        })
    </script>
@stop



