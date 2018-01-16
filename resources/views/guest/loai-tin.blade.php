@extends('guest.layout.main')
@section('title')
  {{ $lt->name }}
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">
                    {{--<div class="breadcrumb">--}}
                        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                        {{--<a class="breadcrumb-item" href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">{{ $lt->chuyenmuc->name }}</a>--}}
                        {{--<span class="breadcrumb-item active">{{ $lt->name }}</span>--}}
                    {{--</div>--}}

                    <div class="portlet-header">

                        <img src="/images/background/lotus.ico" alt="">


                        <a href="{{ route('chuyen-muc',$lt->chuyenmuc->slug) }}">
                            <h4 class="portlet-header-title no-pd-top">{{ $lt->chuyenmuc->name }} / </h4>
                        </a>

                        <a href="javascript:void(0);">
                            <h4 class="portlet-header-title no-pd-top">{{ $lt->name }}</h4>
                        </a>


                    </div>

                     <div class="loai-tin">

                         @if (count($lt->tintuc) > 0)
                            @foreach ($lt->tintuc->where('daduyet','1')->sortByDesc('id') as $tin)
                                 <div class="news-main" style="padding: 0;">
                                    <div class="row" style="padding: 0 15px 10px 15px; border-bottom: 1px solid #eaeaea;">

                                      <span class="label label-info pull-right hidden-xs" style="margin-left: 15px">{{$tin->loaitin->name}}</span>
                                      <a class="tin_title_text" href="{{route('chi-tiet-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,'tin-tuc',$tin->id,$tin->slug])}}">

                                          @if (strlen(trim($tin->avatar)) > 20)

                                            <img src="{{$tin->avatar}}" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 160px; height:auto;" >

                                          @else

                                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWpS3UrDgKd7jcT3BkbPkU4d0mzV7c6PRQ5JmNQIv2Mu2eQ_UpMA" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 80px; height:auto;" >


                                          @endif

                                          <div class="tin_title_text">
                                              {{$tin->name}} <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                          </div>

                                      </a>



                                      <div class="tin_title_abstract" style="display:;">

                                          {{ $tin->gioithieu}}
                                      </div>

                                        @if (count($tin->teptintuc) > 0)

                                            <div class="pull-right" style="padding-top: 7px;">
                                                @foreach($tin->teptintuc as $ttt)
                                                    <a href="{{ $ttt->path }}" target="_blank">
                                                        <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" style="color:red"></i>
                                                    </a>
                                                @endforeach
                                            </div>

                                        @endif
                                    </div>

                              </div>
                             @endforeach
                         @elseif (count($lt->vanban) > 0)

                             <table id="tblVanBan" class="table table-striped table-bordered table-responsive table-sm">
                                 <thead>
                                 <tr>
                                     <th>
                                         Số/Kí hiệu
                                     </th>
                                     <th>
                                         Ngày ban hành
                                     </th>

                                     <th class="col-md-6">
                                         Trích yếu
                                     </th>
                                     <th class="col-md-1">
                                         Đính kèm
                                     </th>
                                 </tr>
                                 </thead>

                                 <tbody>
                                 @foreach($lt->vanban->where('daduyet','1')->sortByDesc('ngaybanhanh') as $vb)
                                     <tr>
                                         <td>
                                             <a href="{{ route('chi-tiet-tin',[$lt->chuyenmuc->slug,$lt->slug,'van-ban',$vb->id,$vb->slug]) }}" class="news-title bold">
                                                 {{ $vb->kihieuvb }}
                                             </a>
                                         </td>
                                         <td>
                                             {{\Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}}
                                         </td>
                                         <td>
                                             {{$vb->trichyeu}}
                                         </td>
                                         <td>
                                             @foreach($vb->tepvanban as $tvb)
                                                 <a href="{{ $tvb->path }}" target="_blank">
                                                     <img src="/images/pdf-file-512.png" alt="" width="20px" style="float: right" title="{{ $vb->kihieuvb }}">
                                                 </a>
                                             @endforeach
                                         </td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>

                         @elseif (count($lt->vanbankhac) >0)
                             <table id="tblVanBan" class="table table-striped table-bordered table-responsive table-sm">
                                 <thead>
                                     <th>TT</th>
                                     <th>Nội dung </th>
                                     <th>Ngày đăng </th>
                                     <th>Tệp đính kèm</th>
                                 </thead>
                                 <tbody>
                                 @foreach($lt->vanbankhac->where('daduyet','1')->sortByDesc('ngaybanhanh') as $lct)
                                     <tr>
                                         <td>
                                             {{ $loop->iteration }}
                                         </td>
                                         <td>
                                             <a href="{{ route('chi-tiet-tin',[$lt->chuyenmuc->slug,$lt->slug,'van-ban-khac',$lct->id,$lct->slug]) }}" style="text-decoration: none"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;{{ $lct->name }}&nbsp;{{ $lct->thang }}</a>
                                         </td>
                                         <td>
                                             {{\Carbon\Carbon::parse($lct->ngaybanhanh)->format('d-m-Y')}}
                                         </td>
                                         <td>
                                             @if (!empty($lct->media_id))
                                                 <a href="{{ $lct->media->directory.'/'.$lct->media->filename.'.'.$lct->media->extension }}"><i class="fa fa-file-word-o" aria-hidden="true"></i></a>
                                             @endif
                                         </td>

                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                         @endif
                    </div>

                    @include('guest.layout.tien-ich')

                    {{--<div class="text-center">--}}
                      {{--{{ $tintuc->render() }}--}}
                    {{--</div>--}}

                </div>
@endsection

@section('js')
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {


            $('#tblVanBan').DataTable({
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


