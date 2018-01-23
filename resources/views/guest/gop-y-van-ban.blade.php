@extends('guest.layout.main')
@section('title')
  Góp ý dự thảo văn bản
@endsection
@section('header-menu-item')
  active
@endsection

@section('content-main')
    <div class="block3">


                <div class="portlet-header">

                    <a href="javascript:void(0);">
                        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Góp ý dự thảo văn bản</h4>
                    </a>

                </div>

                @include('guest.notifications')

                <div class="input-box" style="padding: 5px; display: none;transition: opacity 1s ease-out; opacity: 0;">
                    <div class="dv" style="padding-bottom: 5px">

                        <div class="breadcrumb">

                            <span class="breadcrumb-item active">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i> Đóng góp ý kiến
                            </span>

                            <span class="pull-right" id="btn-close">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </span>


                        </div>


                        <form action="{{ route('gop-y-du-thao.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Văn bản dự thảo </label>
                                    <input id="duthao_id" type="hidden" class="form-control" name="duthao_id">
                                    <input id="duthao_name" type="text" class="form-control" name="duthao_name" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Họ và Tên<sup>*</sup> </label>
                                    <input type="text" class="form-control" name="hoten" required>
                                    @if ($errors->has('daidien'))
                                        <div class="error">{{ $errors->first('hoten') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại<sup>*</sup> </label>
                                    <input type="number" class="form-control" name="sodt" required>
                                    @if ($errors->has('dienthoai'))
                                        <div class="error">{{ $errors->first('sodt') }}</div>
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
                                    <label>Góp ý<sup>*</sup> </label>
                                    <textarea class="form-control textarea" name="noidung" placeholder="Nhập nội dung góp ý ở đây"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                                    @if ($errors->has('noidung'))
                                        <div class="error">{{ $errors->first('noidung') }}</div>
                                    @endif
                                </div>

                                <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi góp ý</button>
                                <br>
                            </div>
                        </form>
                    </div>


                </div>

            <div class="col-md-12" style="padding: 5px">

                <div class="dv" style="padding: 5px">
                    <!-- /.box-header -->
                    <div class="dv-body">
                        <table id="example1" class="dv-table">
                            <thead>
                                <tr>
                                    <th>TT</th>
                                    <th>Dự thảo văn bản</th>
                                    <th>Tệp văn bản</th>
                                    <th>Góp ý </th>
                                    <th>Hạn góp ý</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @if ($duthao)
                                @foreach ($duthao as $dt)
                                    <tr>
                                        <td>{{ $dt->id }}</td>
                                        <td><a href="{{ route('gop-y-van-ban-qppl',$dt->id) }}">{{ $dt->name }}</a></td>
                                        <td style="text-align: center"><a href="{{ $dt->path_file }}"><i class="fa fa-file-archive-o" aria-hidden="true"></i></a></td>
                                        <td>{{ count($dt->gopy) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dt->thoihan)->format('d-m-Y') }}</td>
                                        <td>

                                            @if ($dt->thoihan >= date('Y-m-d'))
                                                <button class="btn btn-info btn-xs gopy" duthao_id="{{ $dt->id }}" duthao_name="{{ $dt->name }}">Góp ý</button>

                                                @else

                                                <button class="btn btn-info btn-xs" disabled>Góp ý</button>

                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif ($dt)

                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td><a href="{{ route('gop-y-van-ban-qppl',$dt->id) }}">{{ $dt->name }}</a></td>
                                    <td style="text-align: center"><a href="{{ $dt->path_file }}"><i class="fa fa-file-archive-o" aria-hidden="true"></i></a></td>
                                    <td>{{ count($dt->gopy) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($dt->thoihan)->format('d-m-Y') }}</td>
                                    <td>

                                        @if ($dt->thoihan >= date('Y-m-d'))
                                            <button class="btn btn-info btn-xs gopy" duthao_id="{{ $dt->id }}" duthao_name="{{ $dt->name }}">Góp ý</button>

                                        @else

                                            <button class="btn btn-info btn-xs" disabled>Góp ý</button>

                                        @endif
                                    </td>
                                </tr>

                            @endif


                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->

                    <script>
                        $(".gopy").click(function () {

                            if ( $(".input-box").css("display") == "block" ){

                                $(".input-box").css("display","none");

                            }else{
                                $(".input-box").css("display","block").css("opacity","1");
                                $(".input-box input#duthao_id").val($(this).attr("duthao_id"))
                                $(".input-box input#duthao_name").val($(this).attr("duthao_name"))
                            }
                        })

                        $("#btn-close").click(function () {

                            $(".input-box").css("display","none");

                        })
                    </script>
                </div>


                </div>
            </div>
@endsection

@section('content-right')
    @include('guest.menu-right.trang-chu')
@stop


@section('js')
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            $('.textarea').wysihtml5()

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

            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
