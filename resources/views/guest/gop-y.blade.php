@extends('guest.layout.main')
@section('title')
  <title>Góp ý</title>
@endsection
@section('header-menu-item')
  active
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">
      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


            <div class="block3">
                {{--<div class="breadcrumb">--}}
                    {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                    {{--<span class="breadcrumb-item active">Tư vấn, hỗ trợ pháp lý doanh nghiệp</span>--}}
                    {{--<button class="pull-right btn btn-info btn-sm" id="themCauHoi">--}}
                        {{--<i class="fa fa-plus-circle" aria-hidden="true"></i> Đặt câu hỏi--}}
                    {{--</button>--}}
                {{--</div>--}}

                <div class="portlet-header">

                    <a href="javascript:void(0);">
                        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Góp ý</h4>
                    </a>

                    {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                    {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}

                </div>

                @include('guest.notifications')

                <div class="input-box" style="padding: 5px">
                    <div class="dv" style="padding-bottom: 5px">

                        <div class="breadcrumb">

                                    <span class="breadcrumb-item active">
                                        <i class="fa fa-comments" aria-hidden="true"></i> Gửi Góp ý
                                    </span>

                        </div>

                        <form action="{{ route('post-ho-tro-phap-ly') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Họ và Tên </label>
                                    <input type="text" class="form-control" name="daidien">
                                    @if ($errors->has('daidien'))
                                        <div class="error">{{ $errors->first('daidien') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại </label>
                                    <input type="number" class="form-control" name="dienthoai">
                                    @if ($errors->has('dienthoai'))
                                        <div class="error">{{ $errors->first('dienthoai') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" class="form-control" name="email">
                                    @if ($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ </label>
                                    <input type="text" class="form-control" name="diachi">
                                    @if ($errors->has('diachi'))
                                        <div class="error">{{ $errors->first('diachi') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Lời góp ý </label>
                                    <textarea class="form-control textarea" placeholder="Mời bạn đóng góp ý kiến ở đây"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    @if ($errors->has('cauhoi'))
                                        <div class="error">{{ $errors->first('cauhoi') }}</div>
                                    @endif
                                </div>

                                <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi góp ý</button>
                                <br>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-3 hidden-xs">
            <div class="right-box">
{{--                @include('guest.ho-tro-phap-ly.right-box')--}}
            </div>
        </div>
      
    </div>
  </div>
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
