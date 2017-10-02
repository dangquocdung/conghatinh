@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>File Manager<small>Manage files</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Media</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">File manager</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <file-manager></file-manager>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
@endsection