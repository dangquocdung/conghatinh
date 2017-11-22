<div id="menu-right">
    <ul id="accordion" class="accordion">
        @foreach ($chuyenmuc as $cm)

                <li>
                    <div class="link"><i class="fa fa-plus"></i>{{ $cm->name }}<i class="fa fa-chevron-down"></i></div>
                    @if (count($cm->loaitin) > 0)
                        <ul class="submenu">
                            @foreach($cm->loaitin->sortby('thutu') as $lt)
                                <li><a href="/loai-tin/{{ $lt->slug }}"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> {{ $lt->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>

        @endforeach

    </ul>
</div>

<script>
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });
</script>