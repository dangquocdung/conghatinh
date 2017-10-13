@extends('guest.layout.main')
@section('title')
  <title>{{ $lt->name }}</title>
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
                        <a class="breadcrumb-item" href="#"><i class="glyphicon glyphicon-home"></i></a>
                        <a class="breadcrumb-item" href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">{{ $lt->chuyenmuc->name }}</a>
                        <span class="breadcrumb-item active">{{ $lt->name }}</span>
                    </div>

                     <div class="loai-tin">
                        @foreach ($lt->tintuc as $tin)
                          <div class="mau-tin">
                             <div class="avatar">
                                 <a href="chi-tiet/{{$tin->slug}}">
                                     <img src="{{$tin->avatar}}">
                                 </a>
                             </div>
                             <div class="noi-dung">
                               <div class="tieu-de">
                                 <a href="chi-tiet/{{$tin->slug}}" class="main-news-title bold">
                                   {{$tin->name}}
                                 </a>

                               </div>
                               <div class="ngay-dang">
                                 {{-- {{ Carbon\Carbon::$tin->created_at->formatLocalized('%H:%M GMT+7 | %d-%m-%Y') }} --}}
                                 Đăng ngày {{ Carbon\Carbon::parse($tin->created_at)->format('d/m/Y H:m:s')}}


                               </div>

                               <div class="gioi-thieu">
                                 {{ $tin->gioithieu }}
                               </div>
                             </div>
                             <div class="clear"></div>
                         </div>
                       @endforeach
                    </div>

                </div>
            </div>
      

    </div>
  </div>
@endsection

