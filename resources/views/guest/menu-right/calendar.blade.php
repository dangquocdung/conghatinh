<!-- Calendar -->
<div class="box box-solid bg-green-gradient" style="margin-bottom: 5px">
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"></div>
    </div>

</div>
<!-- /.box -->


<script>

    $(document).ready(function () {

        // The Calender
        $("#calendar").datepicker("setDate", new Date());
        $('#calendar').datepicker({
            language: 'vi'
        });

    })

</script>