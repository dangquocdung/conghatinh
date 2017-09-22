@extends('guest.layout.main')
@section('title')
  <title>Chi tiết tin</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left">
        <section class="portlet">
           <div class="portlet-content">
             <div class="portlet-header">
                <h4 class="portlet-header-title">{{ $lt->name }}</h4>
             </div>
             <div class="portlet-content">
                @foreach ($lt->tintuc as $tin)
               <div class="main-news">
                   <div class="main-news-thumb-nail">
                       <a href="chi-tiet/{{$tin->slug}}">
                           <img src="{{$tin->avatar}}">
                       </a>
                   </div>
                   <div class="main-news-content">
                     <div class="tieu-de-chuyen-muc">
                       <a href="chi-tiet/{{$tin->slug}}" class="main-news-title bold">
                         {{$tin->name}}
                       </a>

                     </div>
                     <div class="chi-tiet-publish-date">
                       {{-- {{ Carbon\Carbon::$tin->created_at->formatLocalized('%H:%M GMT+7 | %d-%m-%Y') }} --}}
                       {{$tin->created_at}}
                       

                     </div>

                     <div class="hidden-xs">
                       {{ $tin->gioithieu }}
                     </div>
                   </div>
                   <div class="clear"></div>
               </div>
               @endforeach
             </div>
           </div>
        </section>
      </div>

      @include('guest.layout.right-box')
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(document).ready(function() {

    })
  </script>
@endsection
