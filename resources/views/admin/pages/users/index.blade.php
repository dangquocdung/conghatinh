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
    <div class="row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Người dùng </h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped table-hover">

                        <thead>
                        <tr>
                            <th>Họ tên </th>
                            <th>Email</th>

                            <th>Nhóm quyền </th>
                            <th>Ngày đăng kí </th>
                            <th>
                                Thao tác
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>
                                <td>{{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y h:i:s') }}</td>
                                <td>
                                    @if ($user->id > 2)
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;">Sửa </a>

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                        {!! Form::submit('Xoá ', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>




        </div>

        <div class="col-sm-4">
            {{--Box--}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới User</h3>
                </div>

                <div style="padding: 5px">

                    {!! Form::open(['method' => 'POST', 'route' => ['users.store'] ]) !!}

                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', '', array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', '', array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group @if ($errors->has('roles')) has-error @endif">
                        @foreach ($roles as $role)
                            {!! Form::checkbox('roles[]',  $role->id ) !!}
                            {!! Form::label($role->name, ucfirst($role->name)) !!}&nbsp;&nbsp;&nbsp;

                        @endforeach
                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Password') !!}<br>
                        {!! Form::password('password', array('class' => 'form-control')) !!}

                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Confirm Password') !!}<br>
                        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}

                    </div>

                    {!! Form::submit('Add', array('class' => 'btn btn-primary')) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

                {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}
    </div>




@endsection