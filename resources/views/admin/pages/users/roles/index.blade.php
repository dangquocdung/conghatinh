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
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nhóm quyền </th>
                            <th>Quyền </th>
                            <th>Thao tác </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($roles as $role)
                            <tr>

                                <td>{{ $role->name }}</td>

                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                                <td>
                                    {{--<a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info btn-xs pull-left">Edit</a>--}}
                                    {{--{!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}--}}
                                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs ']) !!}--}}
                                    {{--{!! Form::close() !!}--}}


                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;">Sửa </a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                    {!! Form::submit('Xoá ', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}

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
                    <h3 class="box-title">Thêm mới nhóm quyền </h3>
                </div>

                <div style="padding: 5px">

                    {!! Form::open(['method' => 'POST', 'route' => ['roles.store'] ]) !!}

                    <div class="form-group">
                        {{ Form::label('name', 'Tên ') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Chọn quyền </b></h5>

                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                        @endforeach
                    </div>

                    {{ Form::submit('Thêm ', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>

                {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}
    </div>




@endsection