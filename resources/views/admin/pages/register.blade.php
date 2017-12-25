@extends('admin.guest-html')

@section('content')
<div class="login-box">

  @include('flash::message')
<!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đăng kí tài khoản</p>

    <form action="{{route('do-register')}}" method="post" id="registration-form">
      {{csrf_field()}}

      <div class="form-group has-feedback">
        <input type="text"
               name="name"
               class="form-control"
               placeholder="Full name"
               value="{{old('name')}}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('name')}}</div>
      </div>
      <div class="form-group has-feedback">
        <input type="email"
               name="email"
               class="form-control"
               value="{{old('email')}}"
               placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('email')}}</div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('password')}}</div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="cpassword" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('cpassword')}}</div>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    @if(Setting::get('social_login'))
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
      <!-- /.social-auth-links -->
    @endif
    <br>
    <a href="{{url('/dang-nhap')}}" class="text-center">Tôi đã có tài khoản</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@stop
