@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Chuyên mục<small>Các chuyên mục hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">chuyenmucs</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Chuyên mục</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Chuyên mục</th>
              <th>Url</th>
              <th>Đường dẫn</th>
              <th>Vị trí</th>
              <th>Thứ tự</th>

              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($chuyenmucs as $chuyenmuc)
              <tr>
                <td>
                  {{$chuyenmuc->id}}

                </td>
                <td>
                  {{($chuyenmuc->name)}}
                  <br>
                  
                  @foreach($banner as $bn)
                    @if ($bn->id == $chuyenmuc->banner_id)
                      <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                    @endif
                    @endforeach
                </td>
                <td>{{ $chuyenmuc->path}} </td>
                <td><span class="label label-success">{{$chuyenmuc->slug}}</span></td>
                <td>
                  @if ($chuyenmuc->vitri == 0 )
                    <span class="label label-danger">Ẩn</span>
                  @elseif ($chuyenmuc->vitri == 1)
                    <span class="label label-info">Trên</span>
                  @else
                    <span class="label label-warning">Dưới</span>
                  @endif

                </td>
                <td>{{$chuyenmuc->thutu}}</td>

                <td class="col-sm-3">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    <div class="pull-left">
                      <a href="{{route('edit-chuyen-muc', $chuyenmuc->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-chuyen-muc')}}"
                        :post-data="{{json_encode(['id' => $chuyenmuc->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá chuyên mục {{$chuyenmuc->name}}?">
                      </confirm-modal>
                    </div>
                  {{-- @endif --}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$chuyenmucs->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Chuyên mục</h3>
        </div>
        <form action="{{route('save-chuyen-muc')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label for="">Name:</label>
              <input type="text"
                     placeholder="Nhập tên Chuyên mục"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label>Loại url</label>
              <select class="form-control" name="path" style="width: 100%;">                  
                  <option value='chuyen-muc' selected>chuyen-muc</option>
                  <option value='van-ban'>van-ban</option>
              </select>
            </div>

            <div class="form-group">
              <label>Vị trí</label>
              <select class="form-control" name="vitri" style="width: 100%;">                  
                  <option value='1' selected>Menu Trên</option>
                  <option value='2'>Menu Dưới</option>
                  <option value='2'>Ẩn</option>
              </select>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($chuyenmucs); $i++)
                  <option value={{ $i }}>{{ $i }}</option>
                @endfor
                <option value={{ $i }} selected>{{ $i }}</option>
              </select>
            </div>

            <div class="form-group">
              <label>Banner ngang</label>
              <select class="form-control" name="banner" id="banner" style="width: 100%;">
                <option selected disabled>Chọn Banner</option>
                @foreach ($banner as $bn)

                  <option value={{ $bn->id }} path="{{$bn->banner}}">{{ $bn->name }}</option>

                @endforeach
              </select>
            </div>



            <div class="form-group">
              <img id="preview" src="http://placehold.it/200x30" width="100%" style="margin: 0 auto;" />
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

          $("#banner").change(function () {
              var element = $(this).find('option:selected');
              var path = element.attr("path");

              $("#preview").attr('src',path);
          })

      })

  </script>

@endsection