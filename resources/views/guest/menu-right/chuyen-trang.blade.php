
<div class="block4">
    @extends('guest.layout.menu-right')
</div>

@section('them-menu')


    @foreach ($nhomcq as $ncq)
        <li>
            <div class="link"><i class="fa fa-plus"></i>{{ $ncq->name }}<i class="fa fa-chevron-down"></i></div>
            @if (count($ncq->coquan) > 0)
                <ul class="submenu">
                    @foreach($ncq->coquan->sortby('id') as $cq)
                        <li><a href="{{ $cq->lienket }}" target="_blank"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> {{ $cq->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach

@stop










