@extends('guest.layout.main')
@section('title')
  <title>Tin nổi bật</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">
        <div class="portlet-header">
            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tin nổi bật</h4>
            </a>
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
@endsection
