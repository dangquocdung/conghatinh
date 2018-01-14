@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Doanh nghiệp hỏi - CQNN trả lời</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Doanh nghiệp hỏi - CQNN trả lời</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Doanh nghiệp hỏi - CQNN trả lời</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>TT</th>
              <th>Doanh nghiệp</th>
              <th>Địa chỉ</th>
              <th>Câu hỏi</th>
              <th>Cơ quan trả lời </th>
              <th>Câu Trả lời</th>

            </tr>
            </thead>
            <tbody>

            @foreach($dnhoi as $dnh)
              <tr>
                <td>
                  @if ($dnh->daduyet == '1')
                    {{--<span class="label label-success">Đã duyệt đăng</span>--}}
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Hủy duyệt'
                              btn-class="btn-danger"
                              url="{{ route('duyet-doanh-nghiep-hoi') }}"
                              :post-data="{{json_encode(['id' => $dnh->id, 'duyetdang'=>'0'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn thôi duyệt đăng câu hỏi?">
                      </confirm-modal>
                    </div>

                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Chờ duyệt'
                              btn-class="btn-success"
                              url="{{ route('duyet-doanh-nghiep-hoi') }}"
                              :post-data="{{json_encode(['id' => $dnh->id, 'duyetdang'=>'1'])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn duyệt đăng câu hỏi?">
                      </confirm-modal>
                    </div>

                    {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                  @endif

                  <div class="pull-left gap-left gap-10">
                    <confirm-modal
                            btn-text='Xóa'
                            btn-class="btn-danger"
                            url="{{ route('delete-doanh-nghiep-hoi') }}"
                            :post-data="{{json_encode(['id' => $dnh->id])}}"
                            :refresh="true"
                            message="Bạn chắc chắn muốn xóa?">
                    </confirm-modal>
                  </div>
                </td>
                <td>{{ \Carbon\Carbon::parse($dnh->created_at)->format('d-m-Y H:i:s') }} <br>{{ $dnh->doanhnghiep }}</td>
                <td>{{ $dnh->diachi }}</td>
                <td class="col-md-3 more">
                  {!! $dnh->cauhoi !!}
                </td>
                <td>{{ $dnh->coquantraloi }}</td>
                <td class="col-md-3">
                  @if (strlen($dnh->cautraloi) >0 )

                      <a class="btn btn-info btn-xs chinh-sua" data-toggle="modal" data-target="#tra-loi" dnh-id="{{ $dnh->id }}" cq-id="{{$dnh->coquan_id}}" ntl="{{$dnh->nguoitraloi}}" cv="{{$dnh->chucvu}}" ctl="{{$dnh->cautraloi}}">Chỉnh sửa</a>



                    Ngày {{ \Carbon\Carbon::parse($dnh->ngaytraloi)->format('d-m-Y H:i:s') }} <br>
                    {{--<strong>{{ $dnh->nguoitraloi }}</strong> --}}
                        {{--<em>({{ $dnh->chucvu }}):</em>--}}
                    <span class="more">
                      {!! $dnh->cautraloi !!}

                    </span>

                    @else

                    <div class="pull-left gap-left gap-10">
                      <a class="btn btn-info btn-xs tra-loi" data-toggle="modal" data-target="#tra-loi" dnh-id="{{ $dnh->id }}" cq-id="{{$dnh->coquan_id}}">Trả lời</a>
                    </div>
                  @endif

                </td>

              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="text-center">
            {{$dnhoi->render()}}
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>

@endsection


@section('js')
  <script>
      $(document).ready(function() {
          // Configure/customize these variables.
          var showChar = 100;  // How many characters are shown by default
          var ellipsestext = "...";
          var moretext = "Nhiều hơn >>";
          var lesstext = "<< Ít hơn";


          $('.more').each(function() {

              var content = $(this).html();

              if(content.length > showChar) {

                  var c = content.substr(0, showChar);

                  var h = content.substr(showChar, content.length - showChar);

                  var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span style="display:none">' + h + '</span>&nbsp;&nbsp;<a class="morelink" style="display:inline block">' + moretext + '</a></span>';


//                  var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span>' +
//                      '<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                  $(this).html(html);
              }

          });

          $(".morelink").click(function(){
              if($(this).hasClass("less")) {
                  $(this).removeClass("less");
                  $(this).html(moretext);
              } else {
                  $(this).addClass("less");
                  $(this).html(lesstext);
              }
              $(this).parent().prev().toggle();
              $(this).prev().toggle();
              return false;
          });

          $('.tra-loi').click(function(){
              $("#tra-loi").find("input#dnh-id").val($(this).attr('dnh-id'));
              $("#tra-loi").find("select").val($(this).attr('cq-id'));
          });

          $('.chinh-sua').click(function(){
              $("#tra-loi").find("input#dnh-id").val($(this).attr('dnh-id'));
              $("#tra-loi").find("select").val($(this).attr('cq-id'));
              $("#tra-loi").find("input#nguoitraloi").val($(this).attr('ntl'));
              $("#tra-loi").find("input#chucvu").val($(this).attr('cv'));
              $("#tra-loi").find("textarea#cautraloi").html($(this).attr('ctl'));
          });


      });

  </script>



@stop
