@php

    $chuyenmuc = \App\ChuyenMuc::where('id', '>','4')->where('id', '<','14')->where('vitri','<>','0')->get();

@endphp

@foreach($chuyenmuc as $cm)

{{--    @if (count($cm->tintuc) >0)--}}

<section id="chien-luoc">


<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="row">


        <div class="block3">

            <div class="portlet-header">
                <img src="/images/background/lotus.ico">
                <a href="{{ route('chuyen-muc',$cm->slug) }}">
                    <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
                </a>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <div class="chuyen-trang" style="min-height: 240px; padding: 5px 10px 0 10px">
                        <ul>

                            @foreach($cm->tintuc->sortByDesc('id')->take(5) as $tin)

                                <li>
                                    <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #ce663f"></i>

                                    <a href="{{  route('chi-tiet-tin', [$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,$tin->slug]) }}" class="news-title">
                                        {{ $tin->name }} <small><em>({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                    </a>
                                </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        {{--@if ($cm->banner_id != null)--}}

            {{--<div class="block2">--}}

                {{--@foreach($banner as $bn)--}}
                    {{--@if ($bn->id == $cm->banner_id)--}}
                        {{--<a href="{{$bn->lienket}}">--}}
                            {{--<img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">--}}
                        {{--</a>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--@endif--}}

@endforeach

</section>





