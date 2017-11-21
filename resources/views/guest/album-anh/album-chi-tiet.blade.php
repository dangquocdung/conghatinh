<div class="list-image-view">
    <div style="padding: 0;">

        @include('guest.album-anh.modal')

        <br>
        <br>

        <div class="lienquan-header">

            <a href="javascript:void(0);">Album nổi bật</a>

        </div>
        <br>
        <br>
        @include('guest.album-anh.lienquan')
    </div>
</div>



<script>
    $(document).ready(function() {

        /* This is basic - uses default settings */

        $("a.single_image").fancybox();


    });
</script>