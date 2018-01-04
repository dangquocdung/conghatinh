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

        <div class="col-sm-6">
            {{--Box--}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h3>
                </div>

                <div style="padding: 10px">

                    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Assign Permissions</b></h5>
                    @foreach ($permissions as $permission)

                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

                    @endforeach
                    <br>
                    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>

        {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}
    </div>




@endsection