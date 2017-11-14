<div class="list-image-view">
    <ul style="padding: 0;">

        @include('guest.album-anh.modal')

        <br>
        <br>

        <div class="lienquan-header">

            <a href="javascript:void(0);">Album nổi bật</a>

        </div>
        <br>
        <br>
        @include('guest.album-anh.lienquan')
    </ul>
</div>



<script>
    $(document).ready(function() {

        /* This is basic - uses default settings */

        $("a.single_image").fancybox();


    });
</script>