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
                    {{--<div class="breadcrumb">--}}
                        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                        {{--<a class="breadcrumb-item" href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">{{ $lt->chuyenmuc->name }}</a>--}}
                        {{--<span class="breadcrumb-item active">{{ $lt->name }}</span>--}}
                    {{--</div>--}}

                    <div class="portlet-header" style="padding-left: 10px">

                        <a href="/">
                            <h4 class="portlet-header-title no-pd-top"><i class="fa fa-university" aria-hidden="true"></i> / </h4>
                        </a>

                        <a href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">
                            <h4 class="portlet-header-title no-pd-top">{{ $lt->chuyenmuc->name }} / </h4>
                        </a>

                        <a href="javascript:void(0);">
                            <h4 class="portlet-header-title no-pd-top">{{ $lt->name }}</h4>
                        </a>

                        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                        {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}

                    </div>

                     <div class="loai-tin">
                        @foreach ($tintuc as $tin)

                            <div class="news-main" style="padding: 0;">
                                <div class="row" style="padding: 0 15px 10px 15px; border-bottom: 1px solid #eaeaea;">

                                  <span class="label label-info pull-right hidden-xs" style="margin-left: 15px">{{$tin->loaitin->name}}</span>
                                  <a class="tin_title_text" href="/chi-tiet/{{$tin->slug}}">

                                      @if ($lt->chuyenmuc->slug <> 'doanh-nghiep-du-an')

                                        <img src="{{$tin->avatar}}" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 160px; height:auto;" >

                                      @else

                                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWpS3UrDgKd7jcT3BkbPkU4d0mzV7c6PRQ5JmNQIv2Mu2eQ_UpMA" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 80px; height:auto;" >


                                      @endif

                                      <div class="tin_title_text">
                                          {{$tin->name}} <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                      </div>

                                  </a>


                              
                                  <div class="tin_title_abstract" style="display:;">

                                      {{ $tin->gioithieu}}
                                  </div>

                                    <div class="pull-right" style="padding-top: 7px;">
                                        @foreach($tin->teptintuc as $ttt)
                                            <a href="{{ $ttt->path }}" target="_blank">
                                                <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" style="color:red"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>

                          </div>

                       @endforeach
                    </div>

                    <div class="text-center">
                      {{ $tintuc->render() }}
                    </div>

                </div>
            </div>


        <div class="col-md-3 hidden-xs">
            <div class="right-box">
                @include('guest.chi-tiet.right-box')
            </div>
        </div>
      

    </div>
  </div>
@endsection

