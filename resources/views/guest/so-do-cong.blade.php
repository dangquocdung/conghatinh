@extends('guest.layout.main')
@section('title')
    <title>Sơ đồ cổng</title>
@endsection
@section('header-menu-item')
    active
@endsection
@section('content-main')
    <div class="block3">
        <div class="portlet-header">
            <a href="/">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/hierarchy.png" alt="" width="20px"> Sơ đồ cổng thông tin</h4>
            </a>
        </div>
        <div class="so-do">
            <ul id="tree1">
                <li><i class="fa fa-university" aria-hidden="true"></i> Trang chủ</li>
                @foreach($chuyenmuc as $cm)
                    <li>
                        <a href="{{ route('chuyen-muc',$cm->slug) }}">
                            <i class="fa fa-folder-open-o" aria-hidden="true"></i> {{ $cm->name }}
                        </a>
                        <ul>
                            @foreach($cm->loaitin as $lt)
                                <li>
                                    <a href="{{ route('loai-tin',[$cm->slug, $lt->slug]) }}">

                                        <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        {{ $lt->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('content-right')

    @include('guest.menu-right.gop-y')

@endsection

@section('js')
    <style>

        .tree, .tree ul {
            margin:0;
            padding:0;
            list-style:none
        }
        .tree ul {
            margin-left:1em;
            position:relative
        }
        .tree ul ul {
            margin-left:.5em
        }
        .tree ul:before {
            content:"";
            display:block;
            width:0;
            position:absolute;
            top:0;
            bottom:0;
            left:0;
            border-left:1px solid
        }
        .tree li {
            margin:0;
            padding:0 1em;
            line-height:2em;
            color:#369;
            font-weight:700;
            position:relative
        }
        .tree ul li:before {
            content:"";
            display:block;
            width:10px;
            height:0;
            border-top:1px solid;
            margin-top:-1px;
            position:absolute;
            top:1em;
            left:0
        }
        .tree ul li:last-child:before {
            background:#fff;
            height:auto;
            top:1em;
            bottom:0
        }
        .indicator {
            margin-right:5px;
        }
        .tree li a {
            text-decoration: none;
            color:#369;
        }
        .tree li button, .tree li button:active, .tree li button:focus {
            text-decoration: none;
            color:#369;
            border:none;
            background:transparent;
            margin:0px 0px 0px 0px;
            padding:0px 0px 0px 0px;
            outline: 0;
        }

    </style>
    <script type="text/javascript">
        $.fn.extend({
            treed: function () {

                var openedClass = 'fa-folder-open-o';
                var closedClass = 'fa-folder-o';

//                if (typeof o != 'undefined'){
//                    if (typeof o.openedClass != 'undefined'){
//                        openedClass = o.openedClass;
//                    }
//                    if (typeof o.closedClass != 'undefined'){
//                        closedClass = o.closedClass;
//                    }
//                };


                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.children('i').addClass(openedClas);
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
//                /* fire event from the dynamically added icon */
//                tree.find('.branch .indicator').each(function(){
//                    $(this).on('click', function () {
//                        $(this).closest('li').click();
//                    });
//                });
//                /* fire event to open branch if the li contains an anchor instead of text */
//                tree.find('.branch>a').each(function () {
//                    $(this).on('click', function (e) {
//                        $(this).closest('li').click();
//                        e.preventDefault();
//                    });
//                });
//                /* fire event to open branch if the li contains a button instead of text */
//                tree.find('.branch>button').each(function () {
//                    $(this).on('click', function (e) {
//                        $(this).closest('li').click();
//                        e.preventDefault();
//                    });
//                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();

    </script>
@stop



