@extends('admin.html')

@section('breadcrumb')
    <section class="content-header">
        <h1><i class="fa fa-users"></i> Users<small> Quản lý phân quyền.</small></h1>
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
                    <h3 class="box-title">Phân quyền  </h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                        <tr>
                            <th>Permissions</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    {{--<a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;">Edit</a>--}}

                                    {{--{!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}--}}
                                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                    {{--{!! Form::close() !!}--}}

                                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;">Sửa </a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
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
                    <h3 class="box-title">Thêm quyền </h3>
                </div>

                <div style="padding: 5px">

                    {!! Form::open(['method' => 'POST', 'route' => ['permissions.store'] ]) !!}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div><br>
                    @if(!$roles->isEmpty())
                        <h4>Assign Permission to Roles</h4>

                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    @endif
                    <br>
                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>

                {{--<a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>--}}
    </div>




@endsection