<div class="block3">
    <div class="box box-default">
        <div class="box-header with-border">
            <img src="/images/background/lotus.ico" width="30px">
            <h4 class="box-title"> &nbsp;Liên kết tổ chức</h4>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>--}}
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <div class="card">
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    {{--@foreach($nhomcq as $ncq)--}}
                        {{--@if ($ncq->id == 1)--}}
                            {{--<li class="active">--}}
                                {{--<a href="#{{$ncq->slug}}" data-toggle="tab">--}}
                                    {{--{{$ncq->name}}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li>--}}
                                {{--<a href="#{{$ncq->slug}}" data-toggle="tab">--}}
                                    {{--{{$ncq->name}}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}

                    {{--@endforeach--}}

                        @foreach($nhomcq as $ncq)
                            <div class="btn-group" role="group">
                                <button type="button" id="stars" class="btn @if ($ncq->id == '1') btn-primary @else btn-default @endif" href="#{{ $ncq->slug }}" data-toggle="tab">
                                    <i class="fa {{ $ncq->icon }}"></i>  <span class="hidden-xs">{{ $ncq->name }} </span>
                                </button>
                            </div>
                        @endforeach

                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    {{--<div class="tab-content">--}}
                        {{--@foreach($nhomcq as $ncq)--}}
                            {{--<div class="to-chuc tab-pane--}}
                                {{--@if ($ncq->id == 1)--}}
                                    {{--active " id="{{$ncq->slug}}">--}}

                                {{--@else--}}
                                    {{--" id="{{$ncq->slug}}">--}}

                                {{--@endif--}}

                                {{--<ul>--}}
                                    {{--@foreach($ncq->coquan->sortby('name') as $cq)--}}
                                        {{--<li class="col-md-3 col-sm-4 col-xs-6">--}}
                                            {{--<a href="{{ $cq->lienket }}" target="_blank">--}}
                                                {{--<div class="news-block">{{ $loop->iteration }}.&nbsp;{{ $cq->name }}</div>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                    @foreach($nhomcq as $ncq)
                        <div class="to-chuc tab-pane fade in @if($ncq->id == '1') active @endif" id="{{ $ncq->slug }}">

                            <ul>
                                @foreach($ncq->coquan->sortby('name') as $cq)
                                    <li class="col-md-3 col-sm-4 col-xs-6">
                                        <a href="{{ $cq->lienket }}" target="_blank">
                                            <div class="news-block">{{ $loop->iteration }}.&nbsp;{{ $cq->name }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>



                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>