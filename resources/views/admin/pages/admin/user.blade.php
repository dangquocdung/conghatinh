@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Users<small> Quản lý người dùng.</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Users</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <td>#</td>
              <td>Name</td>
              <td></td>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{ucwords($user->name)}}</td>
                <td class="col-sm-3">
                  @if($user->id != 1 && $user->id != 2)
                    {{-- <div class="pull-left">
                      <a href="{{route('edit-user', $user->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div> --}}
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-user')}}"
                        :post-data="{{json_encode(['id' => $user->id])}}"
                        :refresh="true"
                        message="Are you sure you want to delete user {{$user->name}}?">
                      </confirm-modal>
                    </div>
                  @endif
                </td>
              </tr>
            @endforeach
            
            </tbody>
          </table>

          {{$users->render()}}
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>

    <div class="col-sm-4">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm mới User</h3>
        </div>
        <form action="{{route('do-register')}}" method="post" id="registration-form">
          <!-- /.box-header -->
          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group has-feedback">
              <input type="text"
                     name="name"
                     class="form-control"
                     placeholder="Full name"
                     value="{{old('name')}}">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
              <div class="HelpText error">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group has-feedback">
              <input type="email"
                     name="email"
                     class="form-control"
                     value="{{old('email')}}"
                     placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              <div class="HelpText error">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              <div class="HelpText error">{{$errors->first('password')}}</div>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="cpassword" class="form-control" placeholder="Retype password">
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              <div class="HelpText error">{{$errors->first('cpassword')}}</div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-success">Gởi thông tin</button>
          </div>
        </form>
      </div>
      {{--End box--}}
    </div>
  </div>
@endsection