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
              <td>Họ Tên </td>
              <td>Email tài khoản </td>
              <td>Quyền </td>
              <td></td>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{ucwords($user->name)}}</td>
                <td>{{ $user->email }}</td>
                <td>
                  {{ $user->getRoleNames() }}
                </td>
                <td class="col-sm-3">
                  @if($user->id != 1 && $user->id != 2)
                    <div class="pull-left">
{{--                      <a href="{{route('edit-user', $user->id)}}" class="btn btn-primary btn-xs">--}}

                      <a class="btn btn-primary btn-xs btnSua"
                         data-toggle="modal"
                         data-target="#editUser"
                         userId="{{ $user->id }}"

                      >
                        <i class="fa fa-edit"></i> Sửa
                      </a>

                    </div>
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-user')}}"
                        :post-data="{{json_encode(['userId' => $user->id])}}"
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
            <button type="submit" class="btn btn-success">Thêm người dùng </button>
          </div>
        </form>
      </div>
      {{--End box--}}
    </div>
  </div>

  <!-- Modal  loại tin-->
  <div class="modal modal-default fade" id="editUser">
    <div class="modal-dialog">
      <div class="modal-content" style="padding: 0">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="padding-bottom: 0">Edit User </h4>
        </div>

        {{--{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}--}}{{-- Form model binding to automatically populate our fields with user data --}}

        {{--<div class="form-group @if ($errors->has('name')) has-error @endif">--}}
          {{--{{ Form::label('name', 'Name') }}--}}
          {{--{{ Form::text('name', null, array('class' => 'form-control')) }}--}}
        {{--</div>--}}

        {{--<div class="form-group @if ($errors->has('email')) has-error @endif">--}}
          {{--{{ Form::label('email', 'Email') }}--}}
          {{--{{ Form::email('email', null, array('class' => 'form-control')) }}--}}
        {{--</div>--}}

        {{--<h5><b>Give Role</b></h5>--}}

        {{--<div class="form-group @if ($errors->has('roles')) has-error @endif">--}}
          {{--@foreach ($roles as $role)--}}
            {{--{{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}--}}
            {{--{{ Form::label($role->name, ucfirst($role->name)) }}<br>--}}

          {{--@endforeach--}}
        {{--</div>--}}

        {{--<div class="form-group @if ($errors->has('password')) has-error @endif">--}}
          {{--{{ Form::label('password', 'Password') }}<br>--}}
          {{--{{ Form::password('password', array('class' => 'form-control')) }}--}}

        {{--</div>--}}

        {{--<div class="form-group @if ($errors->has('password')) has-error @endif">--}}
          {{--{{ Form::label('password', 'Confirm Password') }}<br>--}}
          {{--{{ Form::password('password_confirmation', array('class' => 'form-control')) }}--}}

        {{--</div>--}}

        {{--{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}--}}

        {{--{{ Form::close() }}--}}



      </div>
    </div>
  </div>
  <!-- /.modal -->
@endsection