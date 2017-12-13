@php
    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();


@endphp

<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="{{ route('chuyen-muc',$cm->slug) }}">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    <div style="min-height:300px;">

        <div class="col-xs-1">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left vertical-text">
                @foreach($cm->loaitin as $lt)
                    @if ($lt->id == 1)
                        <li class="active">
                            <a href="#{{$lt->slug}}" data-toggle="tab">
                                {{$lt->name}}
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#{{$lt->slug}}" data-toggle="tab">
                                {{$lt->name}}
                            </a>
                        </li>
                    @endif

                @endforeach
            </ul>
        </div>
        <div class="col-xs-11">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($cm->loaitin as $lt)

                    @php
                        $tins = $lt->tintuc->where('daduyet','1')->sortByDesc('id')->take(3);
                    @endphp

                    <div class="tintuc-sukien tab-pane
                            @if ($lt->id == 1)
                            active " id="{{$lt->slug}}">

                        @else
                            " id="{{$lt->slug}}">

                        @endif

                        <ul>
                            @foreach($tins as $tin1)
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
                @endforeach
            </div>
        </div>

    </div>
</div>

