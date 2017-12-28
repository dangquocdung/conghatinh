<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1150px; height: 250px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1150px; height: 250px;">
        @foreach($toppic as $tp)
        <div>
            <a href="/">
                <img u="image" src="{{$tp->hinhanh}}" />
            </a>
        </div>
        @endforeach
    </div>

    <!-- Trigger -->
    <script>jssor_slider1_init('slider1_container');</script>

    <script>
        $(document).ready(function(e){
            $('.search-panel .dropdown-menu').find('a').click(function(e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#","");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #type').val(param);
            });
        });
    </script>
</div>