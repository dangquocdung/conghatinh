@foreach ($chuyenmuc->where('vitri','>','0') as $cm)
    @if (count($cm->loaitin) > 0)
        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px">
                    <h4 class="box-title">{{ $cm->name }}</h4>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($cm->loaitin as $lt)
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
                    </div>

                    <!-- /.row -->






                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="pull-right">
                        @if (!empty($cm->path))
                            <a href="{{ $cm->path }}" target="_blank">Xem tiếp...</a>
                        @else
                            <a href="/vi/{{ $cm->slug }}">Xem tiếp...</a>
                        @endif

                    </div>

                </div>
            </div>
        </div>

    <div class="clear-fix"></div>
    @endif
@endforeach