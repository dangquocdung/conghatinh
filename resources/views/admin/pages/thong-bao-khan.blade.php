@extends('admin.html')

@section('title')
    <title>Thông báo khẩn </title>
@stop

@section('breadcrumb')
    <section class="content-header">
        <h1>Thông báo khẩn <small>Các Thông báo khẩn hiện có </small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('config')}}">Configurations</a></li>
            <li class="active">Thông báo khẩn </li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">

        </div>
    </div>
@endsection