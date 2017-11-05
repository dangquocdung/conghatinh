


<div class="block4">

    <div class="block-header">

        <h4>Danh sách đơn vị</h4>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="news-rightbox">
                <ul>

                    @foreach($linhvuc as $lv)

                        <li>

                            <div class="news-block">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lv->name }}
                                </a>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>








