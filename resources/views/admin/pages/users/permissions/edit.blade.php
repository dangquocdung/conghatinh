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
                    <h3 class="box-title"><i class='fa fa-user-plus'></i> Update {{$user->name}}</h3>
                </div>

                <div style="padding: 10px">

                    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Give Role</b></h5>

                    <div class="form-group @if ($errors->has('roles')) has-error @endif">
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'form-control')) }}

                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                    </div>

                    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>

        {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}
    </div>




@endsection