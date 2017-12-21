<div class="box box-default">
    <div class="box-header with-border">
        <img src="/images/background/lotus.ico" width="30px">
        <h4 class="box-title"> &nbsp;Liên kết tổ chức</h4>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tab-doc">

            <div class="col-xs-1 tieu-de">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left vertical-text">
                    @foreach($nhomcq as $ncq)
                        @if ($ncq->id == 1)
                            <li class="active">
                                <a href="#{{$ncq->slug}}" data-toggle="tab">
                                    {{$ncq->name}}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="#{{$ncq->slug}}" data-toggle="tab">
                                    {{$ncq->name}}
                                </a>
                            </li>
                        @endif

                    @endforeach
                </ul>
            </div>
            <div class="col-xs-11 noi-dung">
                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($nhomcq as $ncq)
                        <div class="to-chuc tab-pane
                            @if ($ncq->id == 1)
                                active " id="{{$ncq->slug}}">

                            @else
                                " id="{{$ncq->slug}}">

                            @endif

                            <ul>
                                @foreach($ncq->coquan as $cq)
                                    <li class="col-md-4 col-xs-6">
                                        <a href="{{ $cq->lienket }}" target="_blank">
                                            <div class="news-block"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> &nbsp;{{ $cq->name }}</div>
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
    <!-- /.box-body -->
    <div class="box-footer">
        <div class="pull-right">
            <a href="">Xem tiếp...</a>
        </div>

    </div>
</div>