@extends('guest.layout.main')
@section('title')
    <title>Danh sách VPĐD, PVTT đăng ký hoạt động</title>
@endsection

@section('content')
    <div class="container">
        <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">
                    <div class="block3">
                        <div class="breadcrumb">
                            <a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>
                            {{--<a class="breadcrumb-item" href="/van-ban">Doan</a>--}}
                             <span class="breadcrumb-item active">Danh sách VPĐD, PVTT đăng ký hoạt động</span>

                        </div>


                        <div id="app" style="padding: 5px;">
                            <phong-vien-thuong-tru source="/api/phong-vien-thuong-tru" title="Danh sách" />
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 hidden-xs">
                <div class="right-box">
                    @include('guest.doanh-nghiep-hoi.right-box')
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop




