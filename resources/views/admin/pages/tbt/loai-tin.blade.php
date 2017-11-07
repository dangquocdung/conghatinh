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
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Loại tin</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
                <th>Chuyên mục</th>
              <th>Loại tin</th>

              <th>Thứ tự</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($loaitin as $lt)
              <tr>
                <td>{{$lt->id}}</td>
                  <td>{{ $lt->chuyenmuc->name }}</td>
                <td>{{($lt->name)}}</td>

                <td>{{$lt->thutu}}</td>
                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-loai-tin', $lt->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
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
            </tbody>
          </table>

          {{$loaitin->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Loại tin</h3>
        </div>
        <form action="{{route('save-loai-tin')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="box-body">
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
              <label for="">Name:</label>
              <input type="text"
                     placeholder="Nhập tên Loại tin"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
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

          <div class="box-footer">
            <button type="submit" class="btn btn-success">Gửi thông tin</button>
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



    })
  </script>

  @stop
