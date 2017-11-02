@php
    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();


@endphp







<div class="block3" id="{{ $cm->slug }}">

    <div class="portlet-header">
        <a href="chuyen-muc/{{ $cm->slug }}">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    @php $i=0 @endphp

    @foreach ($cm->loaitin as $lt)

        @php

            $i++;

            $tins = $lt->tintuc->sortByDesc('id')->take(5);

            $tin1= $tins->shift();

        @endphp

        @if ($i == 1)
            @if ($tin1)
                <div class="col-md-12" style="float:left">
                    <div class="row">
                        <div class="breadcrumb" style="margin-left: 3px; margin-right: 3px">
                            <span class="breadcrumb-item active">
                              <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;">
                                <span class="glyphicon glyphicon-share-alt"></span>
                                <strong>{{ $lt->name }}</strong>
                              </a>
                            </span>
                            <span class="pull-right">
                              <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;"><em><small><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem tiếp...</small></em></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12" >
                        <div class="row">
                            <div class="news-main" style="margin-left: -15px">

                                    <a class="tin_title_text" href="/chi-tiet/{{$tin1->slug}}">
                                        <div class="tin_title_text">
                                            {{ $tin1->name }}
                                        </div>

                                        <img style="display: inline-block; width: 160px; height:auto;" src="{{ $tin1->avatar }}" alt="" title="">
                                    </a>

                                    <div class="tin_title_abstract" style="display:;">
                                        {{ $tin1->gioithieu }}
                                    </div>
                            </div>
                        </div>

                    </div>

                    @if (count($tins)>0)

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="row">

                                <div class="news-five">
                                    <ul class="news-block">
                                        @foreach($tins as $tin)
                                            <li>
                                                <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #ce663f"></i>

                                                <a href="chi-tiet/{{ $tin->slug }}" class="news-title">
                                                    {{ $tin->name }}
                                                </a>

                                                <img src="{{$tin->avatar}}" alt="{{ $tin->name }}" style="display:none;">

                                                <div class="gioithieu" style="display:none;">{{$tin->gioithieu}}</div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endif

                </div>
            @endif
        @else
            @if ($tin1)
                <div class="col-md-6" style="float:left">
                    <div class="row">
                        <div class="breadcrumb" style="margin-left: 3px; margin-right: 3px">
                        <span class="breadcrumb-item active">
                          <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;">
                            <span class="glyphicon glyphicon-share-alt"></span>
                            <strong>{{ $lt->name }}</strong>
                          </a>
                        </span>
                            <span class="pull-right">
                          <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;"><em><small><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem tiếp...</small></em></a>
                        </span>
                        </div>

                        <div class="news-main">
                            <a class="tin_title_text" href="/chi-tiet/{{$tin1->slug}}">
                                <div class="tin_title_text">
                                    {{ $tin1->name }}
                                </div>

                                <img style="display: inline-block; width: 160px; height:auto;" src="{{ $tin1->avatar }}" alt="" title="">
                            </a>

                            <div class="tin_title_abstract" style="display:;">
                                {{ $tin1->gioithieu }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endforeach

</div>


@if ($cm->banner_id != null)

    <div class="block2">

        @foreach($banner as $bn)
            @if ($bn->id == $cm->banner_id)
                <a href="{{$bn->lienket}}" target="_blank">
                    <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                </a>
            @endif
        @endforeach
    </div>
@endif


<script>
    $(document).ready(function () {

        var isMobile = $(window).width() < 768;
        console.log("isMobile");
        console.log(isMobile);

        if(!isMobile) {



            $('#{{ $cm->slug }} .news-block').hover(function () {

                $('#{{ $cm->slug }} .cms-container-tintuc a').attr({href: $(this).find('a').attr('href')});

                $('#{{ $cm->slug }} .cms-container-tintuc a .tin_title_text').html($(this).find('a').html());

                $('#{{ $cm->slug }} .cms-container-tintuc a img').attr({src: $(this).find('img').attr('src')});

                $('#{{ $cm->slug }} .cms-container-tintuc tin_title_abstract').html($(this).find('.gioithieu').html());

            })


        }




    })
</script>

