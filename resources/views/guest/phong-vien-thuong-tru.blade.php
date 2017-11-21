@extends('guest.layout.main')
@section('title')
    <title>Danh sách VPĐD, PVTT đăng ký hoạt động</title>
@endsection

@section('content-main')
    <div class="block3">
        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Danh sách VPĐD, PVTT đăng ký hoạt động</h4>
            </a>

            {{--@role('tbt')--}}

            {{--<button class="pull-right btn btn-info btn-sm" id="themCauHoi">--}}
                {{--<i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm--}}
            {{--</button>--}}

            {{--@endrole--}}


        </div>


        <div id="app" style="padding: 5px;">
            <phong-vien-thuong-tru source="/api/phong-vien-thuong-tru" title="Danh sách" />
        </div>

    </div>
@endsection

@section('content-right')
    @include('guest.doanh-nghiep-hoi.right-box')
@stop

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop




