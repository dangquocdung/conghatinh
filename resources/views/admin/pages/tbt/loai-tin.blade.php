@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Loại tin<small>Các loại tin (chuyên mục con) hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Loại Tin</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Loại tin</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover" id="tblLoaiTin">
            <thead>
            <tr>
              <th>#</th>
                <th>#</th>
                <th>Chuyên mục</th>
                <th></th>
              <th>Loại tin</th>
                <th>Ghi chú </th>

              <th>Thứ tự</th>
                <th>TB</th>
              <th>
                  <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#themLoaiTin"><i class="fa fa-plus "></i> Thêm </a>
              </th>
            </tr>
            </thead>
            <tbody>
            @foreach($chuyenmuc as $cm)
            @foreach($cm->loaitin as $lt)
              <tr>
                  <td>{{$lt->id}}</td>
                  <td>{{ $lt->chuyenmuc->thutu}}</td>
                  <td>
                      {{--<sup style="color:red">{{ $lt->chuyenmuc->id }}</sup>--}}
                      {{ $lt->chuyenmuc->name }}
                  </td>
                  <td>
                      @if ($lt->show == true)
                          <input type="checkbox" checked disabled>
                      @else
                          <input type="checkbox" disabled>
                      @endif
                  </td>
                  <td>
                    {{($lt->name)}}
                    </td>
                  <td>{{ $lt->ghichu }}</td>

                <td>{{$lt->thutu}}</td>
                  <td>{{ count($lt->tintuc->where('daduyet','1')) }}</td>
                <td class="col-md-2">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left" style="margin-right: 5px;">
                        {{--<a href="{{route('edit-loai-tin', [$lt->id] )}}" class="btn btn-primary btn-xs">--}}
                            {{--<i class="fa fa-edit"></i> Sửa--}}
                        {{--</a>--}}

                        <a class="btn btn-primary btn-xs btnSua"
                           data-toggle="modal"
                           data-target="#suaLoaiTin"
                            lt-id="{{ $lt->id }}"
                            lt-cm="{{$lt->chuyenmuc->id}}"
                            lt-name="{{$lt->name}}"
                            lt-ghichu="{{$lt->ghichu}}"
                            lt-thutu="{{$lt->thutu}}">
                            <i class="fa fa-edit"></i> Sửa
                        </a>

                    </div>

                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Xoá '
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-loai-tin')}}"
                        :post-data="{{json_encode(['id' => $lt->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá loại tin {{$lt->name}}?">
                      </confirm-modal>
                    </div>
                  {{-- @endif --}}
                </td>
              </tr>
            @endforeach
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->



      </div>
      {{--End box--}}
    </div>
  </div>

  <!-- Modal thêm loại tin-->
  <div class="modal modal-default fade" id="themLoaiTin">
      <div class="modal-dialog">
          <div class="modal-content" style="padding: 0">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="padding-bottom: 0">Thêm Loại tin </h4>
              </div>

              <form action="{{route('save-loai-tin')}}" method="post" id="role-save-form">
                  <!-- /.box-header -->
                  <div class="modal-body">
                      {{csrf_field()}}
                      <div class="form-group">
                          <label>Chuyên mục</label>
                          <select class="form-control chuyenmuc" name="chuyenmuc_id" style="width: 100%;">
                              @foreach ($chuyenmuc as $cm)

                                  @if ($chuyenmuc_id == $cm->id)

                                      <option value={{ $cm->id }} data-id={{ count($cm->loaitin) }} selected>{{ $cm->name }}</option>

                                  @else
                                      <option value={{ $cm->id }} data-id={{ count($cm->loaitin) }}>{{ $cm->name }}</option>

                                  @endif
                              @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="">Loại tin: </label>
                          <input type="text"
                                 placeholder="Nhập tên Loại tin"
                                 name="name"
                                 value="{{old('name')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('name')}}</div>
                      </div>

                      <div class="form-group">
                          <label for="">Ghi chú: </label>
                          <input type="text"
                                 placeholder="Nhập ghi chú "
                                 name="ghichu"
                                 value="{{old('ghichu')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('ghichu ')}}</div>
                      </div>
                      <div class="form-group">
                          <label>Thứ tự hiện thị</label>
                          <select class="form-control loaitin" name="thutu" style="width: 100%;">
                              @for ($i = 1; $i < 13; $i++)
                                  <option value={{ $i }}>{{ $i }}</option>
                              @endfor
                          </select>
                      </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Gửi thông tin</button>
                  </div>
              </form>

          </div>
      </div>
  </div>
  <!-- /.modal -->

  <!-- Modal  loại tin-->
  <div class="modal modal-default fade" id="suaLoaiTin">
      <div class="modal-dialog">
          <div class="modal-content" style="padding: 0">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="padding-bottom: 0">Sửa Loại tin </h4>
              </div>

              <form action="{{route('update-loai-tin')}}" method="post" id="role-save-form">
                  <!-- /.box-header -->
                  <div class="modal-body">
                      {{csrf_field()}}
                      <div class="form-group">
                          <input type="hidden" name="id" id="lt-id">
                          <label>Chuyên mục</label>
                          <select id="lt-cm" class="form-control chuyenmuc" name="chuyenmuc_id" style="width: 100%;">
                              @foreach ($chuyenmuc as $cm)

                                  @if ($chuyenmuc_id == $cm->id)

                                      <option value={{ $cm->id }} data-id={{ count($cm->loaitin) }} selected>{{ $cm->name }}</option>

                                  @else
                                      <option value={{ $cm->id }} data-id={{ count($cm->loaitin) }}>{{ $cm->name }}</option>

                                  @endif
                              @endforeach
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="">Loại tin: </label>
                          <input type="text"
                                 placeholder="Nhập tên Loại tin"
                                 name="name"
                                 id="lt-name"
                                 value="{{old('name')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('name')}}</div>
                      </div>

                      <div class="form-group">
                          <label for="">Ghi chú: </label>
                          <input type="text"
                                 placeholder="Nhập ghi chú "
                                 id="lt-ghichu"
                                 name="ghichu"
                                 value="{{old('ghichu')}}"
                                 class="form-control">
                          <div class="HelpText error">{{$errors->first('ghichu ')}}</div>
                      </div>
                      <div class="form-group">
                          <label>Thứ tự hiện thị</label>
                          <select id="lt-thutu" class="form-control loaitin" name="thutu" style="width: 100%;">
                              @for ($i = 1; $i < 13; $i++)
                                  <option value={{ $i }}>{{ $i }}</option>
                              @endfor
                          </select>
                      </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Gửi thông tin</button>
                  </div>
              </form>

          </div>
      </div>
  </div>
  <!-- /.modal -->

@endsection

@section('js')

    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#tblLoaiTin').DataTable({

                "iDisplayLength": 25,

                "order": [[ 1, "asc" ],[ 6, "asc" ]],

                "sType": "numeric",

                "language": {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Hiển thị _MENU_ mục",
                    "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
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

  <script>
    $(document).ready(function () {
        $(function () {
            thutu_hienthi(); //this calls it on load
            $('.chuyenmuc').change(thutu_hienthi());
        });

        function thutu_hienthi() {

            var $v = $('.chuyenmuc').val();

            var $n = $('.chuyenmuc').find(':selected').attr('data-id');

            console.log($n)

            var $str ='';

            if ($n > 0){
                for($i = 1; $i <= $n; $i++){
                    $str = $str + '<option value=' + $i + '>' + $i + '</option>'
                }
                $str = $str + '<option value=' + $i + ' selected>' + $i + '</option>'
            }else{
                $str = $str + '<option value=1 selected>1</option>';
            }
            $('.loaitin').html($str);
        }

        $('.chuyenmuc').change(function () {

            var $v = $(this).val();

            var $n = $(this).find(':selected').attr('data-id');

            console.log($n)

            var $str ='';

            if ($n > 0){
                for($i = 1; $i <= $n; $i++){
                    $str = $str + '<option value=' + $i + '>' + $i + '</option>'
                }
                $str = $str + '<option value=' + $i + ' selected>' + $i + '</option>'
            }else{
                $str = $str + '<option value=1 selected>1</option>';
            }
            $('.loaitin').html($str);
        });

        $('.btnSua').click(function () {

//            alert($(this).attr('lt-name'));
            $('#suaLoaiTin').find('input#lt-id').val($(this).attr('lt-id'));
            $('#suaLoaiTin').find('select#lt-cm').val($(this).attr('lt-cm'));
            $('#suaLoaiTin').find('input#lt-name').val($(this).attr('lt-name'));
            $('#suaLoaiTin').find('input#lt-ghichu').val($(this).attr('lt-ghichu'));
            $('#suaLoaiTin').find('select#lt-thutu').val($(this).attr('lt-thutu'));

        });

//        $('.chinh-sua').click(function(){
//            $("#tra-loi").find("input#dnh-id").val($(this).attr('dnh-id'));
//            $("#tra-loi").find("select").val($(this).attr('cq-id'));
//            $("#tra-loi").find("input#nguoitraloi").val($(this).attr('ntl'));
//            $("#tra-loi").find("input#chucvu").val($(this).attr('cv'));
//            $("#tra-loi").find("textarea#cautraloi").html($(this).attr('ctl'));
//        });
    });


  </script>

  @stop
