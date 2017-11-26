@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Góp ý dự thảo văn bản</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Góp ý dự thảo văn bản</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Góp ý dự thảo văn bản</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
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
                        <td>{{ $dt->path_file }}</td>
                        <td>{{ $dt->thoihan }}</td>
                        <td>
                            <button class="btn btn-info btn-xs">Góp ý</button>
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

    <!-- Modal Edit Album-->
    <div class="modal modal-default fade" id="tra-loi">
      <div class="modal-dialog">
        <div class="modal-content" style="padding: 0">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" style="padding-bottom: 0">Trả lời câu hỏi</h4>
          </div>
          <form action="{{ route('update-doanh-nghiep-hoi') }}" method="post" id="role-save-form">
            {{csrf_field()}}

            <div class="modal-body">


              <input type="hidden" name="id" id="dnh-id">

              <div class="form-group">
                <label>Đơn vị trả lời </label>
                <select name="coquan_id" class="form-control" disabled>
                  @foreach($coquan as $cq)
                    <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Người trả lời </label>
                <input type="text" class="form-control" name="nguoitraloi" id="nguoitraloi" required>
                @if ($errors->has('nguoitraloi'))
                  <div class="error">{{ $errors->first('nguoitraloi') }}</div>
                @endif
              </div>
              <div class="form-group">
                <label>Chức vụ </label>
                <input type="text" class="form-control" name="chucvu" id="chucvu" required>
                @if ($errors->has('chucvu'))
                  <div class="error">{{ $errors->first('chucvu') }}</div>
                @endif
              </div>

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
