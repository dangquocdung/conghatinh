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
                        <a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>
                        <a class="breadcrumb-item" href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">{{ $lt->chuyenmuc->name }}</a>
                        <span class="breadcrumb-item active">{{ $lt->name }}</span>
                    </div>

                     <div class="loai-tin">
                        @foreach ($tintuc as $tin)
                          <div class="row" style="border-bottom: 1px solid #eaeaea; padding: 0 15px 10px 0">
                            <div class="news-main" style="margin-top: 10px;">
                              <span class="label label-info">{{$tin->loaitin->name}}</span>
                              <a class="tin_title_text" href="/chi-tiet/{{$tin->slug}}">
                                
                                  <img style="display: inline-block; width: 160px; height:auto;" src="{{$tin->avatar}}" alt="" title="">
                                  <div class="tin_title_text">
                                      {{$tin->name}}
                                  </div>
                                  
                              </a>
                              
                              <div class="tin_title_abstract" style="display:;">

                                  {{ $tin->gioithieu}}
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
      

    </div>
  </div>
@endsection

