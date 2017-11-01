@foreach($nhomcq as $ncq)


    <div class="block3">

        <div class="portlet-header">
            <a href="#">
                <h4 class="portlet-header-title no-pd-top">{{ $ncq->name }}</h4>
            </a>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">

                <div class="chuyen-trang">
                    <ul>

                        @foreach($ncq->coquan as $cq)

                            <li class="col-md-4">

                                <a href="{{ $cq->lienket }}" target="_blank">

                                    <div class="news-block"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> &nbsp;{{ $cq->name }}</div>
                                </a>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </div>

@endforeach





