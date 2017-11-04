@extends('guest.layout.main')
@section('title')
  <title>Doanh nghiệp hỏi, CQNN trả lời</title>
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
                        <span class="breadcrumb-item active">Doanh nghiệp hỏi, CQNN trả lời</span>
                    </div>
                </div>

                <div id="app" style="padding: 5px;">
                    <doanh-nghiep-hoi source="/api/van-ban-all" title="Tất cả văn bản" />
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

