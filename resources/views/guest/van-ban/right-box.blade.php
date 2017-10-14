<div class="block4">
    <div class="block-header">
        <h4>Cơ quan ban hành</h4>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="news-rightbox">
                <ul>
                    @foreach ($cqbh as $cq)
                    <li>
                        <div class="news-block">
                            <a href="van-ban/cqbh/{{$cq->slug}}">
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

<div class="block4">
    <div class="block-header">
        <h4>Lĩnh vực</h4>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="news-rightbox">
                <ul>
                    @foreach ($linhvuc as $lv)
                    <li>
                        <a href="van-ban/linh-vuc/{{$lv->slug}}">
                            <div class="news-block">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lv->name }}
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="block4">
    <div class="block-header">
        <h4>Loại văn bản</h4>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="news-rightbox">
                <ul>
                    @foreach ($loaivb as $lvb)
                    <li>
                        <a href="van-ban/linh-vuc/{{$lvb->slug}}">
                            <div class="news-block">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lvb->name }}
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>







