@extends('guest.layout.main')
@section('title')
  <title>Góp ý</title>
@endsection
@section('header-menu-item')
  active
@endsection

@section('content-main')
    <div class="block3">


                <div class="portlet-header">

                    <a href="javascript:void(0);">
                        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Góp ý</h4>
                    </a>



                </div>

                @include('guest.notifications')

                <div class="input-box" style="padding: 5px">
                    <div class="dv" style="padding-bottom: 5px">

                        <div class="breadcrumb">

                                    <span class="breadcrumb-item active">
                                        <i class="fa fa-comments" aria-hidden="true"></i> Gửi Góp ý
                                    </span>

                        </div>

                        <form action="{{ route('post-gop-y-cong') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Họ và Tên </label>
                                    <input type="text" class="form-control" name="hoten" required>
                                    @if ($errors->has('hoten'))
                                        <div class="error">{{ $errors->first('hoten') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại </label>
                                    <input type="number" class="form-control" name="dienthoai" required>
                                    @if ($errors->has('dienthoai'))
                                        <div class="error">{{ $errors->first('dienthoai') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ </label>
                                    <input type="text" class="form-control" name="diachi" required>
                                    @if ($errors->has('diachi'))
                                        <div class="error">{{ $errors->first('diachi') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Lời góp ý </label>
                                    <textarea name="noidung" class="form-control textarea" placeholder="Mời bạn đóng góp ý kiến ở đây"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                                    @if ($errors->has('noidung'))
                                        <div class="error">{{ $errors->first('noidung') }}</div>
                                    @endif
                                </div>

                                <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi góp ý</button>
                                <br>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
@endsection


@section('content-right')

    @include('guest.menu-right.thong-bao')

    @endsection

@section('js')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            $('.textarea').wysihtml5()
        })
    </script>
@stop
