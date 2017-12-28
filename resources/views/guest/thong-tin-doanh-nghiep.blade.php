@extends('guest.layout.main')
@section('title')
    Thông tin doanh nghiệp
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Thông tin doanh nghiệp</h4>
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


                <form action="{{ route('thong-tin-doanh-nghiep.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">




                        <div class="form-group">
                            <label>Tên </label>
                            <input type="text" class="form-control" name="name" required>
                            @if ($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mã số thuế  </label>
                            <input type="text" class="form-control" name="masothue" required>
                            @if ($errors->has('chucdanh'))
                                <div class="error">{{ $errors->first('chucdanh') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ </label>
                            <input type="text" class="form-control" name="diachi">
                        </div>
                        <div class="form-group">
                            <label>Ngày thành lập  </label>
                            <input type="date" class="form-control" name="ngaythanhlap" required>
                        </div>

                        <div class="form-group">
                            <label>Huyện/Thị </label>
                            <select name="coquan_id" id="" class="form-control" required>
                                <option value="" selected disabled > Chọn đơn vị</option>
                                @foreach($nhomcq->where('id','2') as $ncq)
                                    @foreach($ncq->coquan as $cq)
                                        <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
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

        <div class="col-sm-12" style="padding: 5px">

            <div class="dv" style="padding: 5px">

                <div class="dv-body">
                    <table id="example1" class="dv-table">
                        <thead>
                        <tr>
                            <th>
                                <span>TT</span>
                            </th>
                            <th>
                                <span>Tên </span>
                            </th>

                            <th>
                                <span>Mã số thuế </span>
                            </th>

                            <th>
                                <span>Địa chỉ </span>
                            </th>
                            <th>
                                <span>Ngày thành lập </span>
                            </th>
                            <th>
                                <span>Địa phương </span>
                            </th>

                        </tr>
                        </thead>

                        <tbody>
                            @foreach($ttdns as $ttdn)
                            <tr>
                                <td>{{ $ttdn->id }}</td>

                                <td>{{ $ttdn->name }}</td>
                                <td>{{ $ttdn->masothue }}</td>
                                <td>{{ $ttdn->diachi }}</td>
                                <td>{{ $ttdn->ngaythanhlap }}</td>
                                <td>{{ $ttdn->coquan->name }}</td>

                            </tr>
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



