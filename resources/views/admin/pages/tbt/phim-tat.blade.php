@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý liên kết<small>Các liên kết hiện có</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Liên kết </li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Liên kết</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Biểu tượng</th>
              <th>Liên kết</th>
              <th>Thứ tự</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($phimtat as $pt)
            <tr>
              <td>{{$pt->id}}</td>
              <td>{{($pt->name)}}</td>
              <td>{{ $pt->icon }}</td>
              <td><a href="{{ $pt->link }}" target="_blank" title="{{ $pt->link }}"><i class="fa fa-link" aria-hidden="true"></i></a></td>
              <td>{{ $pt->thutu }}</td>
              <td>
                <div class="pull-left">
                  <button type="button" class="btn btn-primary btn-xs" id="edit" id_pt="{{$pt->id}}" name="{{$pt->name}}" icon="{{$pt->icon}}" link="{{$pt->link}}" thutu="{{$pt->thutu}}">
                    <i class="fa fa-edit"></i> Sửa
                  </button>
                </div>
                <div class="pull-left gap-left gap-10">
                  {!! Form::open(['method' => 'DELETE','route' => ['phim-tat.destroy', $pt->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                  {!! Form::close() !!}
                </div>
              </td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary" id="edit-box">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Liên kết</h3>
        </div>
        <form action="{{route('phim-tat.store')}}" method="post" id="role-save-form">
          <input type="hidden" id="method" name="_method"  value="post">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <input type="hidden" name="id" id="id_pt">
            <div class="form-group">
              <label for="">Tên:</label>
              <input type="text"
                     placeholder="Nhập tên liên kết"
                     id="name"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Biểu tượng:</label>
              <input type="text"
                     placeholder="Nhập biểu tượng"
                     id="icon"
                     name="icon"
                     value="{{old('icon')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('icon')}}</div>
            </div>

            <div class="form-group">
              <label for="">Liên kết:</label>
              <input type="text"
                     placeholder="Nhập đường dẫn liên kết http"
                     id="link"
                     name="link"
                     value="{{old('link')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('link')}}</div>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" id="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($phimtat); $i++)
                  <option value={{ $i }}>{{ $i }}</option>
                @endfor
                <option value={{ $i }} selected>{{ $i }}</option>
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" id="reset" class="btn btn-warning pull-left">Làm lại</button>
            <button type="submit" id="submit" class="btn btn-success pull-right">Gửi thông tin</button>
          </div>
        </form>
      </div>
      {{--End box--}}
    </div>
  </div>

@endsection

@section('js')





  <script>
      $(document).ready(function () {

          $('button#edit').click(function (e) {


              var i = $(this).attr('id_pt');




              $('#edit-box').find('.box-title').html('Sửa liên kết');

              $('#edit-box').find('form').attr('action','/toa-soan/phim-tat/'+i);
              $('#edit-box').find('input#method').val('put');


              $('#edit-box').find('input#id_pt').val($(this).attr('id_pt'));
              $('#edit-box').find('input#name').val($(this).attr('name'));
              $('#edit-box').find('input#icon').val($(this).attr('icon'));
              $('#edit-box').find('input#link').val($(this).attr('link'));
              $('#edit-box').find('select#thutu').val($(this).attr('thutu'));

              $('#edit-box').find('button#submit').html('Cập nhật');

//              console.log('123');



          });

          $('button#reset').click(function (e) {

              location.reload();


          });



      })
  </script>
@stop

