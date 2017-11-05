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
                </div>

                <div id="app" style="padding: 5px;">
                    <ho-tro-phap-ly source="/api/ho-tro-phap-ly" title="Tất cả câu hỏi" />
                </div>

            </div>
        </div>

        <div class="col-md-3 hidden-xs">
            @include('guest.ho-tro-phap-ly.right-box')
        </div>
      
    </div>
  </div>
@endsection


@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop
