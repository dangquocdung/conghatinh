@php

    $chuyenmuc = \App\ChuyenMuc::where('id', '>','7')->get();

@endphp

@foreach($chuyenmuc as $cm)


<div class="block3">

    <div class="portlet-header">
        <a href="chuyen-muc/{{ $cm->slug }}">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="chuyen-trang">
                <ul>

                    @foreach($cm->loaitin as $lt)

                        <li class="col-md-6">


                            <div class="news-block">
                                <a href="/loai-tin/{{ $lt->slug }}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lt->name }} ({{ count($lt->tintuc) }})
                                </a>
                            </div>

                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>

@if ($cm->banner_id != null)

    <div class="block2">

        @foreach($banner as $bn)
            @if ($bn->id == $cm->banner_id)
                <a href="{{$bn->lienket}}">
                    <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                </a>
            @endif
        @endforeach
    </div>
@endif

    @endforeach





