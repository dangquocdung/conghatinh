<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{Setting::get('app_name', 'admin')}} | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <base href="{{asset('')}}">

  <link rel="stylesheet" href="{{ url('admin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/default.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/admin.min.css') }}">
  <link rel="stylesheet" href="{{ mix('admin/css/admin.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/_all-skins.min.css') }}">
  @yield('css')

  <script type="text/javascript" src="{{url('admin/js/jquery-2.2.3.min.js')}}"></script>
  <script type="text/javascript" src="{{url('admin/js/bootstrap.min.js')}}"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' }
  </script>
</head>