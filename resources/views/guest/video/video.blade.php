<div id="video-player">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/2EIeUlvHAiM" frameborder="0" allowfullscreen></iframe>

</div>


<script>
    $(document).ready(function () {

        var src = $('#video-player').find('iframe').attr('src');

        src = src + '?rel=0';

        $('#video-player').find('iframe').css('display','block').css('margin','0 auto');
        $('#video-player').find('iframe').attr('width','560').attr('height','315');
        $('#video-player').find('iframe').attr('src',src);

    })
</script>


<div style="margin: 15px">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="moi-nhat" style="padding-top: 15px">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>

                <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
            <div class="moi-nhat" style="padding-top: 15px">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
            <div class="moi-nhat" style="padding-top: 15px">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/q8krkjuuL0M" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">Profile</div>
        <div role="tabpanel" class="tab-pane" id="messages">Message</div>
        <div role="tabpanel" class="tab-pane" id="settings">Setting</div>
    </div>

</div>


<script>
    $(document).ready(function () {

        var src = $('.moi-nhat').find('iframe').attr('src');

        src = src + '?rel=0&showinfo=0&controls=0&autohide=1';


        $('.moi-nhat').find('iframe').attr('width','160').attr('height','100');
        $('.moi-nhat').find('iframe').attr('src',src);

    })
</script>



