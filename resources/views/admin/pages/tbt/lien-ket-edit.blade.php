@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Edit Liên kết<small>Edit Liên kết</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Loại tin</a></li>
      <li><a href="{{route('manage-roles')}}">Quản lý Liên kết</a></li>
      <li class="active">Edit Liên kết</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-6">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Liên kết</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{route('update-lien-ket')}}" method="post" id="update-role-form">
            {{csrf_field()}}

            <input type="hidden" name="id" value="{{$lienket->id}}">

            <div class="form-group">
              <label>Nhóm</label>
              <select class="form-control" name="nhomcq_id" style="width: 100%;">
                @foreach ($nhomcq as $ncq)
                  @if ($lienket->nhomcq_id == $ncq->id)
                  <option value={{ $ncq->id }} selected="selected">{{ $ncq->name }}</option>
                  @else
                  <option value={{ $ncq->id }}>{{ $ncq->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="">Cơ quan</label>
              <input type="text"
                     name="name"
                     class="form-control"
                     value="{{($lienket->name)}}"
                     placeholder="Enter role name">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
              <label for="">Liên kết</label>
              <input type="text"
                     name="lienket"
                     class="form-control"
                     value="{{($lienket->lienket)}}"
                     placeholder="Enter role name">
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>


            <div class="form-group">
              <button class="btn btn-success" type="submit">
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