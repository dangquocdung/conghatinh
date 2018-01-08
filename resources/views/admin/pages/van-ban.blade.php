@extends('admin.html')

@section('title')
  <title>Danh sách văn bản</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Văn bản<small>Các văn bản hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Văn bản Chỉ đạo, Điều hành</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">

        @php

            $cm = $chuyenmuc->where('id','3')->first();

        @endphp
      {{--Box--}}

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Văn bản Chỉ đạo, Điều hành &nbsp;({{ count($cm->vanban) }})</h3>
        </div>
          <div class="box-body">
              <div class="card">
                  <ul class="nav nav-tabs" role="tablist">

                      @foreach($cm->loaitin as $lt)

                          @if (count($lt->vanban) > 0)
                              @if ($loop->iteration == 1)
                                  <li class="active">
                                      <a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">
                                          {{$lt->name}}
                                      </a>
                                  </li>
                              @else
                                  <li>
                                      <a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">
                                          {{$lt->name}}
                                      </a>
                                  </li>
                              @endif
                          @endif

                      @endforeach

                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div class="tab-content">
                          @foreach($cm->loaitin as $lt)
                              <div class="to-chuc tab-pane

                                      @if ($loop->iteration == 1)
                                      active " id="{{$lt->slug}}">

                                  @else
                                      " id="{{$lt->slug}}">

                              @endif
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">
                          <table class="table table-bordered table-striped table-hover tblVanBan">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Số văn bản</th>
                                <th>Loại văn bản</th>
                                <th>Ngày ban hành</th>
                                <th>Trích yếu</th>
                                <th>Tệp văn bản</th>
                                  <th>
                                      <a class="btn btn-warning btn-xs" href="{{route('tao-van-ban')}}"><i class="fa fa-plus "></i> Thêm </a>
                                  </th>
                              </tr>
                            </thead>
                            <tbody>

                            @foreach ($lt->vanban->sortbydesc('id')->take(50) as $key=>$vb)

                                          <tr>
                                            <td>{{++$key}}</td>

                                            <td>
                                              {{ $vb->kihieuvb }}
                                              <br>

                                              @if ($vb->daduyet == '1')
                                                <span class="label label-success">Đã duyệt đăng</span>
                                              @else
                                                <div class="pull-left gap-left gap-10">
                                                  <confirm-modal
                                                          btn-text='Chờ duyệt'
                                                          btn-class="btn-warning"
                                                          url="{{url('api/v1/duyet-van-ban')}}"
                                                          :post-data="{{json_encode(['id' => $vb->id])}}"
                                                          :refresh="true"
                                                          message="Bạn chắc chắn muốn duyệt đăng văn bản {{$vb->kihieuvb}}?">
                                                  </confirm-modal>
                                                </div>

                                                {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                                              @endif
                                            </td>
                                            <td>{{$vb->loaitin->name}}</td>
                                            <td>{{ \Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y') }}</td>

                                            <td>{{$vb->trichyeu}}</td>
                                            <td>



                                              @foreach($vb->tepvanban as $tvb)
                                                  <a href="{{ $tvb->path }}" target="_blank">
                                                    <img src="/images/pdf-file-512.png" alt="{{ $vb->kihieuvb }}" title="{{ $vb->kihieuvb }}" width="20px">
                                                  </a>
                                              @endforeach

                                            </td>

                                            <td class="col-sm-3">

                                                <div class="pull-left">
                                                  <a href="{{route('edit-van-ban', $vb->id)}}" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </div>

                                                <div class="pull-left gap-left gap-10" style="padding-left: 5px">
                                                  <confirm-modal
                                                    btn-text='<i class="fa fa-trash"></i> Delete'
                                                    btn-class="btn-danger"
                                                    url="{{url('api/v1/delete-van-ban')}}"
                                                    :post-data="{{json_encode(['id' => $vb->id])}}"
                                                    :refresh="true"
                                                    message="Bạn chắc chắn muốn xoá văn bản {{$vb->kihieuvb}}?">
                                                  </confirm-modal>
                                                </div>

                                            </td>
                                          </tr>
                                        @endforeach

                            </tbody>
                          </table>

                {{--            {{$vanban->render()}}--}}
                        </div>
                        <!-- /.box-body -->

                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
      {{--End box--}}

    </div>


  </div>
@endsection

@section('js')

  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
          $('.tblVanBan').DataTable({

              "iDisplayLength": 25,

              "order": [[ 0, "desc" ]],

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

@stop