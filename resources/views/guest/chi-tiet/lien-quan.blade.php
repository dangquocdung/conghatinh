
    <div class="lienquan-header">

        <a href="">Các tin mới hơn</a>
        
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="tin-lien-quan">
                <ul>
                    

                    @foreach($tinlq as $tlq)

                        <li>

                            <div class="news-block"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $tlq->name }}</div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>






