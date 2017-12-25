@extends('admin.html')

@section('title')
  <title>Chuyên mục</title>
@stop

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
                  <i class="fa {{$chuyenmuc->icon}}"></i> &nbsp;{{($chuyenmuc->name)}}
                  <br>
                  
                  @foreach($banner as $bn)
                    @if ($bn->id == $chuyenmuc->banner_id)
                      <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                    @endif
                    @endforeach
                </td>
                <td>{{ $chuyenmuc->path}} </td>
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

                <td class="col-md-2">
                  {{-- @if($chuyenmuc->id != 1 && $chuyenmuc->id != 2) --}}
                    {{--<div class="pull-left">--}}
                      {{--<a href="{{route('edit-chuyen-muc', $chuyenmuc->id)}}" class="btn btn-primary btn-xs">--}}
                        {{--<i class="fa fa-edit"></i> Edit--}}
                      {{--</a>--}}
                    {{--</div>--}}
                    <div class="pull-left" style="margin-right: 5px;">
                      {{--<a href="{{route('edit-loai-tin', [$lt->id] )}}" class="btn btn-primary btn-xs">--}}
                      {{--<i class="fa fa-edit"></i> Sửa--}}
                      {{--</a>--}}

                      <a class="btn btn-primary btn-xs btnSua"
                         data-toggle="modal"
                         data-target="#suaChuyenMuc"

                         cm-id="{{ $chuyenmuc->id }}"
                         cm-name="{{ $chuyenmuc->name }}"
                         cm-icon="{{ $chuyenmuc->icon }}"
                         cm-anhien="{{ $chuyenmuc->anhien }}"
                         cm-path="{{ $chuyenmuc->path }}"
                         cm-vitri="{{ $chuyenmuc->vitri }}"
                         cm-thutu="{{ $chuyenmuc->thutu }}"
                         cm-banner="{{ $chuyenmuc->banner_id }}"

                      />
                        <i class="fa fa-edit"></i> Sửa
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
              <label for="">Icon: </label>
              <input type="text"
                     placeholder="Biểu tượng (tuỳ chọn) "
                     name="icon"
                     value="{{old('icon')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('icon')}}</div>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="anhien" onclick="$(this).val(this.checked ? 0 : 1)"> Ẩn
              </label>
            </div>

            {{--<div class="form-group">--}}
              {{--<label>Vị trí</label>--}}
              {{--<select class="form-control" name="vitri" style="width: 100%;">                  --}}
                  {{--<option value='1' selected>Menu Trên</option>--}}
                  {{--<option value='2'>Menu Dưới</option>--}}
                  {{--<option value='2'>Ẩn</option>--}}
              {{--</select>--}}
            {{--</div>--}}

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

  <!-- Modal  loại tin-->
  <div class="modal modal-default fade" id="suaChuyenMuc">
    <div class="modal-dialog">
      <div class="modal-content" style="padding: 0">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="padding-bottom: 0">Sửa Chuyên mục </h4>
        </div>

        <form action="{{route('update-chuyen-muc')}}" method="post" id="role-save-form">
          <!-- /.box-header -->
          <div class="modal-body">
            {{csrf_field()}}

            <input type="hidden" name="id" id="cm-id">
            <div class="form-group">
              <label for="">Chuyên mục: </label>
              <input type="text"
                     placeholder="Nhập tên Chuyên mục"
                     id="cm-name"
                     name="name"
                     value="{{old('name')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Icon: </label>
              <input type="text"
                     placeholder="Biểu tượng (tuỳ chọn) "
                     id="cm-icon"
                     name="icon"
                     value="{{old('icon')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('icon')}}</div>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" id="cm-anhien" name="anhien" onclick="$(this).val(this.checked ? 0 : 1)"> Ẩn
              </label>
            </div>

            <div class="form-group">
              <label for="">Đường dẫn: </label>
              <input type="text"
                     placeholder="Đường dẫn (tuỳ chọn) "
                     id="cm-path"
                     name="path"
                     value="{{old('path')}}"
                     class="form-control">
              <div class="HelpText error">{{$errors->first('path')}}</div>
            </div>

            <div class="form-group">
              <label>Vị trí</label>
              <select class="form-control" id="cm-vitri" name="vitri" style="width: 100%;">
                <option value='1' selected>Menu Trên</option>
                <option value='2'>Menu Dưới</option>
                <option value='0'>Ẩn</option>
              </select>
            </div>

            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" id="cm-thutu" name="thutu" style="width: 100%;">
                @for ($i = 1; $i <= count($chuyenmucs); $i++)
                  <option value={{ $i }}>{{ $i }}</option>
                @endfor
                <option value={{ $i }} selected>{{ $i }}</option>
              </select>
            </div>

            <div class="form-group">
              <label>Banner ngang</label>
              <select class="form-control" id="cm-banner" name="banner" style="width: 100%;">
                <option value="" >Không Chọn Banner</option>
                @foreach ($banner as $bn)
                  <option value={{ $bn->id }} path="{{$bn->banner}}">{{ $bn->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <img id="preview-edit" src="http://placehold.it/200x30" width="100%" style="margin: 0 auto;" />
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

  <script>
      $(document).ready(function () {

          $("#banner").change(function () {
              var element = $(this).find('option:selected');
              var path = element.attr("path");
              $("#preview").attr('src',path);
          });

          $("#cm-banner").change(function () {
              var element = $(this).find('option:selected');
              var path = element.attr("path");
              $("#preview-edit").attr('src',path);
          });


          $('.select2').select2({
              width: '100%'
          });

          $('.btnSua').click(function () {
              $('#suaChuyenMuc').find('input#cm-id').val($(this).attr('cm-id'));
              $('#suaChuyenMuc').find('input#cm-name').val($(this).attr('cm-name'));
              $('#suaChuyenMuc').find('input#cm-icon').val($(this).attr('cm-icon'));

              $('#suaChuyenMuc').find('input#cm-path').val($(this).attr('cm-path'));
              $('#suaChuyenMuc').find('select#cm-vitri').val($(this).attr('cm-vitri'));
              $('#suaChuyenMuc').find('select#cm-thutu').val($(this).attr('cm-thutu'));
              $('#suaChuyenMuc').find('select#cm-banner').val($(this).attr('cm-banner'));
              $('#suaChuyenMuc').find('select#preview-edit').val($(this).attr('cm-banner'));

              if ($(this).attr('cm-icon') == '0'){
                  $('#suaChuyenMuc').find('input#cm-anhien').addAttr('checked', 'checked');
              }else{

                  $('#suaChuyenMuc').find('input#cm-anhien').addAttr('checked', '');
              };
          });

      })

  </script>

@endsection