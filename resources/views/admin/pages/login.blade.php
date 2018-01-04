@extends('admin.guest-html')

@section('content')
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập</p>

    <form action="{{route('login')}}" method="post">
      {{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" tabindex="1">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('email')}}</div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" tabindex="2">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="HelpText error">{{$errors->first('password')}}</div>
      </div>
      <div class="form-group has-feedback">
        <label>
          <input type="checkbox" name="remember"> Ghi nhớ
        </label>
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
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
    {{--<br/>--}}
    {{--<a href="{{url('forgot-password')}}">Tôi đã quên mật khẩu</a><br>--}}
    {{--@if(Setting::get('user_can_register'))--}}
    {{--<a href="{{route('register')}}" class="text-center">Đăng kí tài khoản mới</a>--}}
    {{--@endif--}}

  </div>
  <!-- /.login-box-body -->
@endsection