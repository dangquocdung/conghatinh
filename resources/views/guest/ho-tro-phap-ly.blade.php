@extends('guest.layout.main')
@section('title')
  <title>Tư vấn, hỗ trợ pháp lý doanh nghiệp</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content')
  <div class="container">
    <div class="row nen-trang">
      
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


            <div class="block3">
                <div class="breadcrumb">
                    <a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>
                    <span class="breadcrumb-item active">Tư vấn, hỗ trợ pháp lý doanh nghiệp</span>
                    <button class="pull-right btn btn-info btn-sm" id="themCauHoi">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Đặt câu hỏi
                    </button>
                </div>

                @include('guest.notifications')

                <div class="input-box" style="padding: 5px; display: none;">
                    <div class="dv" style="padding-bottom: 5px">

                        <div class="breadcrumb">

                                    <span class="breadcrumb-item active">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i> Đặt câu hỏi
                                    </span>

                        </div>

                        <form action="{{ route('post-ho-tro-phap-ly') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">



                                <div class="form-group">
                                    <label>Lĩnh vực cần hỗ trợ </label>
                                    <select name="linhvuc_id" id="" class="form-control">
                                        <option value="" selected disabled > Chọn lĩnh vực</option>
                                        @foreach($linhvuc as $lv)
                                            <option value="{{ $lv->id }}">{{ $lv->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Doanh nghiệp </label>
                                    <input type="text" class="form-control" name="doanhnghiep">
                                    @if ($errors->has('doanhnghiep'))
                                        <div class="error">{{ $errors->first('doanhnghiep') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Người đại diện </label>
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
                                    <label>Câu hỏi </label>
                                    <textarea class="form-control" name="cauhoi"></textarea>
                                    @if ($errors->has('cauhoi'))
                                        <div class="error">{{ $errors->first('cauhoi') }}</div>
                                    @endif
                                </div>

                                <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi câu hỏi</button>
                                <br>
                            </div>
                        </form>
                    </div>


                </div>

                <script>
                    $("#themCauHoi").click(function () {

                        if ( $(".input-box").css("display") == "block" ){

                            $(".input-box").css("display","none");

                        }else{
                            $(".input-box").css("display","block");
                        }



                    })
                </script>

                <div id="app" style="padding: 5px;">
                    <ho-tro-phap-ly source="/api/ho-tro-phap-ly" title="Tất cả câu hỏi" />
                </div>

            </div>
        </div>

        <div class="col-md-3 hidden-xs">
            <div class="right-box">
                @include('guest.ho-tro-phap-ly.right-box')
            </div>
        </div>
      
    </div>
  </div>
@endsection


@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop
