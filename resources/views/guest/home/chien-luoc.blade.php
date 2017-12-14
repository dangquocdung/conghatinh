@php

    $chuyenmuc = \App\ChuyenMuc::where('id', '>','4')->where('id', '<','7')->where('vitri','<>','0')->get();

@endphp



{{--    @if (count($cm->tintuc) >0)--}}

<div class="chien-luoc">

    <ul>
        @foreach($chuyenmuc as $cm)
            <li class="col-md-6 col-sm-6 col-xs-12">

                    <div class="block3">


                        <div class="portlet-header">
                            <img src="/images/background/lotus.ico">
                            <a href="{{ route('chuyen-muc',$cm->slug) }}">
                                <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
                            </a>
                        </div>

                        <div class="panel-group" id="{{ $cm->slug }}" role="tablist" aria-multiselectable="true">
                            @foreach($cm->loaitin as $lt)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#{{ $cm->slug }}" href="#{{$lt->slug}}" aria-expanded="true" aria-controls="{{$lt->slug}}">
                                                {{ $lt->name }}
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="{{$lt->slug}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        {{--<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.le VHS.</div>--}}
                                        <div class="panel-body">
                                            <ul>
                                                @foreach($lt->tintuc->where('daduyet','1')->sortByDesc('id')->take(2) as $tin1)
                                                    <li>
                                                        <div class="news-main" style="padding: 0; margin-bottom: 0">
                                                            <div class="row tin-tuc" style="padding: 0 15px 10px 15px;">

                                                                <a class="tin_title_text" href="{{route('chi-tiet-tin',[$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,$tin1->slug])}}">
                                                                    @if (strlen(trim($tin1->avatar)) > 20)
                                                                        <img src="{{$tin1->avatar}}" alt="{{$tin1->name}}" title="{{$tin1->name}}" style="display: inline-block; width: 160px; height:auto;" >
                                                                    @else
                                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWpS3UrDgKd7jcT3BkbPkU4d0mzV7c6PRQ5JmNQIv2Mu2eQ_UpMA" alt="{{$tin1->name}}" title="{{$tin1->name}}" style="display: inline-block; width: 80px; height:auto;" >
                                                                    @endif

                                                                    <div class="tin_title_text">
                                                                        {{$tin1->name}} <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tin1->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                                                    </div>
                                                                </a>

                                                                <div class="tin_title_abstract" style="display:;">
                                                                    {{ $tin1->gioithieu}}
                                                                </div>

                                                                <div class="pull-right" style="padding-top: 7px;">
                                                                    @foreach($tin1->teptintuc as $ttt)
                                                                        <a href="{{ $ttt->path }}" target="_blank">
                                                                            <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" style="color:red"></i>
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

            </li>
        @endforeach
    </ul>

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








