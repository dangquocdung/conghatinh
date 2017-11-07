


<div class="block4">

    <div class="block-header">
        <a href="">

            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Danh sách đơn vị</h4>
        </a>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="news-rightbox">
                <ul>

                    @foreach($coquan as $cq)

                        <li>

                            <div class="news-block">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $cq->name }}
                                </a>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>








