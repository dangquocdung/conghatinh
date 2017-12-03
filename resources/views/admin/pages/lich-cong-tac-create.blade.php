@extends('admin.html')

@section('title')
    <title>Thêm Lịch công tác</title>
@stop

@section('breadcrumb')
  <section class="content-header">
    <h1>Lịch công tác</h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Lịch công tác</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lịch công tác</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-xs" id="btnThem">
                    <i class="fa fa-plus"></i> Thêm tệp
                </button>
            </div>
        </div>

          <div id="tai-tep" style="display:none; border: solid 1px #f0ad4e; padding: 5px">
              <file-manager></file-manager>
          </div>



        <form action="{{ route('lich-cong-tac.store') }}" method="post" id="role-save-form">
          {{csrf_field()}}
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="modal-body">
            <div class="form-group">
              <label for="">Chọn tháng:</label>
              {{--<input type="month" name="tuan" id="tuan" class="form-control" required>--}}
              <input id="thang" name="thang" class="form-control" type="text" />
            </div>
            <div class="form-group">
              <label>Tệp đính kèm</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-xs" id="btnRefresh">
                        <i class="fa fa-refresh"></i> Nạp lại
                    </button>
                </div>
              <select id="tepdinhkem" name="tepdinhkem" class="form-control select2">
                @foreach($pdfs as $pdf)
                  <option value="{{ $pdf->directory.'/'.$pdf->filename.'.'.$pdf->extension }}" style="width: 100%">
                      {{ $pdf->filename.'.'.$pdf->extension }}
                  </option>
                @endforeach
              </select>


            </div>



            <div class="form-group">
              <label for="">Nội dung:</label>
              <textarea id="noi-dung" name="noidung" required></textarea>
              <div class="HelpText error">{{$errors->first('noidung')}}</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </form>

      </div>
      {{--End box--}}


  </div>


@endsection

    @section('js')

      <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>


      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


      <script>
          // CKEDITOR.replace( 'gioi-thieu' );
          CKEDITOR.replace( 'noi-dung' );

          // $("input:file, input:checkbox").uniform();

          $(document).ready(function() {

              $('.select2').select2({
                  width: '100%'
              });

              $('#tuan').val(moment().format('W'));
          });

          $(document).ready(function() {
              // Default functionality.
              $('#thang').MonthPicker({
                  i18n: {
                      year: 'năm',
                      months: ['Th. 1','Th. 2','Th. 3','Th. 4','Th. 5','Th. 6','Th. 7','Th. 8','Th. 9','Th. 10','Th. 11','Th. 12']
                  }
              });

              $('#btnThem').click(function () {

                  if ($('#tai-tep').css('display')=='none'){

                      $('#tai-tep').css('display','inline-block');

                  }else{

                      $('#tai-tep').css('display','none');

                  }



              })

              $('#btnRefresh').click(function (e) {


                  console.log(e);


                  $.get('/toa-soan/json-tepdinhkem', function (data) {
                      console.log(data);
                      $('select#tepdinhkem').empty();
//                      $('select#tepdinhkem').append('<option value="0" disable="true" selected="true">=== Chọn tệp đính kèm ===</option>');
//
                      $.each(data, function(index, tdkObj){
                          $('select#tepdinhkem').append('<option value="'+ tdkObj.directory + '/' + tdkObj.filename + '.' + tdkObj.extension +'">'+ tdkObj.filename + '.' + tdkObj.extension +'</option>');
                      })
                  })
              })




          })


      </script>
@stop

