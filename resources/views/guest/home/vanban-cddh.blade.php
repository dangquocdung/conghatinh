@php

    $chuyenmuc = \App\ChuyenMuc::whereIn('id', array('4','5'))->get();

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

            <div class="news">
                <ul>
                    @foreach($cm->vanban->take(5) as $vb)
                        <li>

                            <div class="news-block">

                                <a href="chi-tiet/" class="news-title bold">
                                    Số: {{ $vb->sovb.'/'.$vb->kihieuvb }}
                                </a>
                                <a href=""><span class="label label-success">{{ $vb->loaitin->name}}</span></a>

                                @foreach($vb->tepvanban as $tvb)

                                    <a href="{{ $tvb->path }}" target="_blank">

                                        <img src="/images/pdf-file-512.png" alt="" width="30px" style="float: right" title="{{ $vb->sovb.'/'.$vb->kihieuvb }}">

                                    </a>
                                @endforeach

                                <div class="gioithieu">{{$vb->trichyeu}}</div>

                            </div>
                        </li>
                    @endforeach
                </ul>


                <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                    <a href="#" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                </div>
            </div>
        </div>
    </div>

</div>

    @endforeach





