@extends('guest.layout.main')
@section('title')
  <title>Góp ý dự thảo văn bản</title>
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

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>TT</th>
                                    <th>Dự thảo văn bản</th>
                                    <th>Tệp văn bản</th>
                                    <th>Hạn góp ý</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($duthao as $dt)
                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td>{{ $dt->name }}</td>
                                    <td style="text-align: center"><a href="{{ $dt->path_file }}"><i class="fa fa-file-archive-o" aria-hidden="true"></i></a></td>
                                    <td>{{ \Carbon\Carbon::parse($dt->thoihan)->format('d-m-Y') }}</td>
                                    <td>
                                        <button class="btn btn-info btn-xs">Góp ý</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->

                    <div class="input-box" style="padding: 5px; display: none">
                        <div class="dv" style="padding-bottom: 5px">

                            <div class="breadcrumb">

                                        <span class="breadcrumb-item active">
                                            <i class="fa fa-question-circle" aria-hidden="true"></i> Đặt câu hỏi
                                        </span>

                            </div>

                            <form action="{{ route('post-ho-tro-phap-ly') }}" method="post">
                                {{ csrf_field() }}
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>Họ và Tên </label>
                                        <input type="text" class="form-control" name="daidien">
                                        @if ($errors->has('daidien'))
                                            <div class="error">{{ $errors->first('daidien') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Điện thoại </label>
                                        <input type="number" class="form-control" name="dienthoai">
                                        @if ($errors->has('dienthoai'))
                                            <div class="error">{{ $errors->first('dienthoai') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="email" class="form-control" name="email">
                                        @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ </label>
                                        <input type="text" class="form-control" name="diachi">
                                        @if ($errors->has('diachi'))
                                            <div class="error">{{ $errors->first('diachi') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Lời góp ý </label>
                                        <textarea class="form-control textarea" placeholder="Mời bạn đóng góp ý kiến ở đây"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        @if ($errors->has('cauhoi'))
                                            <div class="error">{{ $errors->first('cauhoi') }}</div>
                                        @endif
                                    </div>

                                    <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi góp ý</button>
                                    <br>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
@endsection


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
