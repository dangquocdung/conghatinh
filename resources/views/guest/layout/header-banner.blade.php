<div class="container nen-trang">

    <div class="margin-15px">

        <nav class="navbar navbar-default" id="main-menu" >
            <div class="navbar-header hidden-xs">
                @include('guest.layout.header-slide')
            </div>

            <div class="navbar-header visible-xs">
                <div class="menu-mobie">
                    <button style="z-index: 1001;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                @include('guest.layout.header-slide-mb')
            </div>


            @include('guest.layout.main-menu')




        </nav>

    </div>

</div>