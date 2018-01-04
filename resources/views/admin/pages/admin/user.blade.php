@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1><i class="fa fa-users"></i> Users<small> Quản lý người dùng.</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
@endsection

@section('content')
  {{--<div class="col-lg-10 col-lg-offset-1">--}}
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
    <hr>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Users</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table class="table table-bordered table-striped table-hover">

        <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date/Time Added</th>
          <th>User Roles</th>
          <th>
            <a href="{{ route('users.create') }}" class="btn btn-success pull-left btn-xs" style="margin-right: 3px;">Add</a>
          </th>
        </tr>
        </thead>

        <tbody>
        @foreach ($users as $user)
          <tr>

            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>
            <td>
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;">Edit</a>

              {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
              {!! Form::close() !!}

            </td>
          </tr>
        @endforeach
        </tbody>

      </table>
    </div>

    {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}

  </div>
@endsection