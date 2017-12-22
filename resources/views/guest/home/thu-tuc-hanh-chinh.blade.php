@foreach ($chuyenmuc->where('vitri','3') as $cm)
    @if (count($cm->loaitin) > 0)
        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px" style="padding: 3px">
                    <h4 class="box-title">{{ $cm->name }}</h4>

                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" href="{{ route('chuyen-muc',$cm->slug) }}"><i class="fa  fa-folder-open"></i></a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                @if ($lt->thutu == 1)
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
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-content">
                                @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                    <div class="to-chuc tab-pane
                                    @if ($lt->thutu == 1)
                                            active " id="{{$lt->slug}}">

                                        @else
                                            " id="{{$lt->slug}}">

                                        @endif
                                        
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <div class="pull-right">

                                                    <a href="{{ route('loai-tin',[$cm->slug, $lt->slug]) }}"><em>Xem tiếp...</em></a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>

    <div class="clear-fix"></div>
    @endif
@endforeach
