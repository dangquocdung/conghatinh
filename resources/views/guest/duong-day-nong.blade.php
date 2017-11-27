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

            @role('tbt')



                <button class="pull-right btn btn-info btn-sm" id="themCauHoi" style="margin-right: 5px">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm
                </button>


            @endrole


        </div>

        @include('guest.notifications')

        <div class="input-box" style="padding: 5px; display: none">
            <div class="dv" style="padding-bottom: 5px">

                <div class="breadcrumb">

                    <span class="breadcrumb-item active">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> Thêm Người phát ngôn
                    </span>

                </div>


                <form action="{{ route('post-nguoi-phat-ngon') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">



                        <div class="form-group">
                            <label>Cơ quan, đơn vị </label>
                            <select name="coquan_id" id="" class="form-control" required>
                                <option value="" selected disabled > Chọn đơn vị</option>
                                @foreach($nhomcq as $ncq)
                                    @foreach($ncq->coquan as $cq)
                                        <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Họ và Tên </label>
                            <input type="text" class="form-control" name="name" required>
                            @if ($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Chức danh </label>
                            <input type="text" class="form-control" name="chucdanh" required>
                            @if ($errors->has('chucdanh'))
                                <div class="error">{{ $errors->first('chucdanh') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>ĐT Cố định </label>
                            <input type="text" class="form-control" name="codinh">
                        </div>
                        <div class="form-group">
                            <label>ĐT Di động </label>
                            <input type="number" class="form-control" name="didong" required>
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" name="email" required>
                            @if ($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm</button>
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

        <div class="col-sm-12">

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



