@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Edit Loại tin<small>Edit Loại tin này</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Loại tin</a></li>
      <li><a href="{{route('manage-roles')}}">Quản lý Loại tin</a></li>
      <li class="active">Edit Loại tin</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Loại tin "{{ucwords($loaitin->name)}}"</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{route('update-loai-tin')}}" method="post" id="update-role-form">
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$loaitin->id}}">

            <div class="form-group">
              <label>Chuyên mục</label>
              <select class="form-control" name="chuyenmuc_id" style="width: 100%;">
                @foreach ($chuyenmuc as $cm)
                  @if ($loaitin->chuyenmuc_id == $cm->id)
                  <option value={{ $cm->id }} selected="selected">{{ $cm->name }}</option>
                  @else
                  <option value={{ $cm->id }}>{{ $cm->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="">Name</label>
              <input type="text"
                     name="name"
                     class="form-control"
                     value="{{($loaitin->name)}}"
                     placeholder="Enter role name">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group">
              <label>Thứ tự hiện thị</label>
              <select class="form-control" name="thutu" style="width: 100%;">
                @for ($i = 1; $i < 10; $i++)

                  @if ($loaitin->thutu == $i)

                    <option value="{{ $i }}" selected="">{{ $i }}</option>

                  @else
                    <option value="{{ $i }}">{{ $i }}</option>

                  @endif

                @endfor
              </select>
            </div>

            <div class="form-group">
              <button class="btn btn-success">
                <i class="fa fa-save"></i> Save
              </button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">

    </div>
  </div>
@endsection