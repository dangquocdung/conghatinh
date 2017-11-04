


<div class="block4">

    <div class="block-header">

        <h4>Danh sách đơn vị</h4>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="news-rightbox">
                <ul>

                    @foreach($coquan as $cq)

                        <li>

                            <div class="news-block">
                                <a href="#">
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








