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
</style>



<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <span class="glyphicon glyphicon-book"></span>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>

        <li class="sidebar-brand"><a href="/">Trang chủ</a></li>
        @foreach ($chuyenmuc->where('vitri','1') as $cm)

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $cm->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    @foreach($cm->loaitin->sortby('thutu') as $lt)
                        <li><a href="{{ route('loai-tin',[$cm->slug,$lt->slug]) }}">{{ $lt->name }}</a></li>
                    @endforeach
                </ul>
            </li>

        @endforeach
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

</script>