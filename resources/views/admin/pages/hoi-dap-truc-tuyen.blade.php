@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Hỏi đáp trực tuyến</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Hỏi đáp trực tuyến</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Hỏi đáp trực tuyến</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>TT</th>
              <th>Họ Tên</th>
              <th>Số ĐT</th>
              <th>Câu hỏi</th>
              <th>Câu Trả lời</th>
            </tr>
            </thead>
            <tbody>


            </tbody>
          </table>

          <div class="text-center">
            {{$hoidaptructuyen->render()}}
          </div>

        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <!-- Modal Edit Album-->
    <div class="modal modal-default fade" id="tra-loi">
      <div class="modal-dialog">
        <div class="modal-content" style="padding: 0">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" style="padding-bottom: 0">Trả lời câu hỏi</h4>
          </div>
          <form action="{{ route('update-ho-tro-phap-ly') }}" method="post" id="role-save-form">
            {{csrf_field()}}

            <div class="modal-body">


              <input type="hidden" name="id" id="dnh-id">

              <div class="form-group">
                <label>Câu trả lời </label>
                <textarea class="form-control textarea" name="cautraloi" id="cautraloi" placeholder="Nhập câu trả lời ở đây"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                @if ($errors->has('cautraloi'))
                  <div class="error">{{ $errors->first('cautraloi') }}</div>
                @endif
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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

          $('div.alert').delay(3000).slideUp(300);


      });

  </script>



@stop
