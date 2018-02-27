@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Hoạt động<small>Control panel</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
      <li class="active">Hoạt động</li>
    </ol>
  </section>
@endsection

@section('content')
{!! RvMedia::renderHeader() !!}
{!! RvMedia::renderContent() !!}
{!! RvMedia::renderFooter() !!}
@endsection