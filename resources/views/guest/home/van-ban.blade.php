@php

    $cm = $chuyenmuc->where('id','4')->first();

@endphp




<div class="block3">

    <div class="portlet-header">
        <a href="van-ban/{{ $cm->slug }}">
            <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Văn bản QPPL</h4>
        </a>
    </div>
    @foreach ($cm->loaitin as $lt)

        @php

          $tins = $lt->vanban->sortByDesc('id')->take(4);


        @endphp


        @if ($tins)
            <div class="col-md-12" style="float:left">
                <div class="row">

                    <div class="breadcrumb" style="margin-left: 3px; margin-right: 3px">
                        <span class="breadcrumb-item active">
                          <a href="van-ban/{{ $lt->slug }}" style="text-decoration: none;">
                            <span class="glyphicon glyphicon-share-alt"></span>
                            <strong>{{ $lt->name }}</strong>
                          </a>
                        </span>
                        <span class="pull-right">
                            <a href="van-ban/{{ $lt->slug }}" style="text-decoration: none;"><em><small><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem tiếp...</small></em></a>
                        </span>
                    </div>
                    <div class="news-vanban">
                        <ul class="news-block">
                            @foreach($tins as $vb)

                                <li style="margin-top: 0; border-bottom: none;">



                                        <a href="chi-tiet-van-ban/{{$vb->id}}" class="news-title bold">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            Số: {{ $vb->kihieuvb }} <span class="label label-danger">Mới</span>
                                        </a>


                                        @foreach($vb->tepvanban as $tvb)

                                            <a href="{{ $tvb->path }}" target="_blank">

                                                <img src="/images/pdf-file-512.png" alt="" width="30px" style="float: right" title="{{ $vb->kihieuvb }}">

                                            </a>
                                        @endforeach

                                        <div class="gioithieu">
                                            {{$vb->trichyeu}}
                                        </div>


                                </li>
                            @endforeach
                         </ul>
                    </div>
                </div>
            </div>
        @endif

    
    @endforeach


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





