<div class="right-box">
    <div class="block4">
        <div class="block-header">
            <a href="">
                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Video nổi bật</h4>
            </a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>
</div>



<script>
    $(document).ready(function () {

        $('.embed-responsive').find('iframe').each(function () {

            $(this).removeAttr('height').removeAttr('width').addClass('embed-responsive-item');
            var src = $(this).attr('src');
            src = src + '?rel=0&showinfo=0&controls=1&autohide=1';

            $(this).attr('src',src);

        })


    })
</script>







