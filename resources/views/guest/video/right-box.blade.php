<div class="right-box">
    <div class="block4">
        <div class="block-header">
            <a href="">
                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Video nổi bật</h4>
            </a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="news-rightbox">
                    <div class="xem-nhieu" style="display: block">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>


                    </div>
                    <div class="xem-nhieu" style="display: block">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>


                    </div>
                    <div class="xem-nhieu" style="display: block">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>


                    </div>
                    <div class="xem-nhieu" style="display: block">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        var src = $('.xem-nhieu').find('iframe').attr('src');

        src = src + '?rel=0&showinfo=0&controls=0&autohide=1';


        $('.xem-nhieu').find('iframe').css('height', '100px').css('width','160px');
        $('.xem-nhieu').find('iframe').attr('src',src);


    })
</script>







