<style>

    /* Custom Button Styles */

    .btn-dark {
        border-radius: 0;
        color: #fff;
        background-color: #0494da;
    }

    .btn-dark:hover,
    .btn-dark:focus,
    .btn-dark:active {
        color: #fff;
        background-color: #0476b1;
    }

    .btn-light {
        border-radius: 0;
        color: #333;
        background-color: rgb(255,255,255);
    }

    .btn-light:hover,
    .btn-light:focus,
    .btn-light:active {
        color: #333;
        background-color: rgba(255,255,255,0.8);
    }



    /* Side Menu */

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        right: 0;
        width: 250px;
        height: 100%;
        margin-right: -250px;
        overflow-y: auto;
        background: linear-gradient(to bottom, #0494da 0, #095b8c 100%);
        -webkit-transition: all 0.4s ease 0s;
        -moz-transition: all 0.4s ease 0s;
        -ms-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }

    .sidebar-nav li .dropdown-menu{
        background: #095b8c;
    }


    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #ffffff;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        height: 55px;
        font-size: 18px;
        line-height: 55px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #ffffff;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    #menu-toggle {
        z-index: 1;
        position: fixed;
        top: 0;
        right: 0;
    }

    #sidebar-wrapper.active {
        right: 250px;
        width: 250px;
        -webkit-transition: all 0.4s ease 0s;
        -moz-transition: all 0.4s ease 0s;
        -ms-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
    }

    /**/

    .accordion {
        width: 100%;
        max-width: 360px;
        margin: 40px auto 20px;
        background: #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .accordion .link {
        cursor: pointer;
        display: block;
        padding: 15px 15px 15px 42px;
        color: #4D4D4D;
        font-size: 14px;
        font-weight: 700;
        border-bottom: 1px solid #CCC;
        position: relative;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .accordion li:last-child .link { border-bottom: 0; }

    .accordion li i {
        position: absolute;
        top: 16px;
        left: 12px;
        font-size: 18px;
        color: #595959;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .accordion li i.fa-chevron-down {
        right: 12px;
        left: auto;
        font-size: 16px;
    }

    .accordion li.open .link { color: #b63b4d; }

    .accordion li.open i { color: #b63b4d; }

    .accordion li.open i.fa-chevron-down {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    /**
     * Submenu
     -----------------------------*/


    .submenu {
        display: none;
        background: #444359;
        font-size: 14px;
    }

    .submenu li { border-bottom: 1px solid #4b4a5e; }

    .submenu a {
        display: block;
        text-decoration: none;
        color: #d9d9d9;
        padding: 12px;
        padding-left: 42px;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .submenu a:hover {
        background: #b63b4d;
        color: #FFF;
    }
</style>



<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <span class="glyphicon glyphicon-book"></span>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>

        {{--<li class="sidebar-brand"><a href="/">Trang chủ</a></li>--}}
        {{--@foreach ($chuyenmuc->where('vitri','1') as $cm)--}}

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $cm->name }} <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--@foreach($cm->loaitin->sortby('thutu') as $lt)--}}
                        {{--<li><a href="{{ route('loai-tin',[$cm->slug,$lt->slug]) }}">{{ $lt->name }}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</li>--}}

        {{--@endforeach--}}
    </ul>



    <ul id="accordion" class="accordion sidebar-nav">
        <li>
            <div class="link"><i class="fa fa-database"></i>Web Design<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Photoshop</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
            </ul>
        </li>
    </ul>
</nav>

<script>

    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

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