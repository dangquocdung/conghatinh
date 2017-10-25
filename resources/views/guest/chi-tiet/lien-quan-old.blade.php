
<div class="lienquan-header">

    <a href="/loai-tin/{{$tin->loaitin->slug}}">Các tin cũ hơn</a>

</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">

        <div class="tin-lien-quan" style="margin-top: 10px">
            <ul>


                @foreach($tinlq_old as $tlq)

                    <li>
                        <a href="/chi-tiet/{{ $tlq->slug }}">

                            <div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $tlq->name }} <small><em>({{ \Carbon\Carbon::parse($tlq->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

                        </a>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>
</div>









