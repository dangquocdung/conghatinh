
<script type="text/javascript" src="{{url('admin/js/fastclick.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/jquery.uniform.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/app.min.js')}}"></script>

<script type="text/javascript" src="{{url('admin/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/js/jquery.jscroll.js')}}"></script>

<script type="text/javascript" src="{{mix('/admin/js/app.js')}}"></script>
@yield('js')

<script>
    $(document).ready(function () {

        $('div.alert').delay(3000).slideUp(300);

    })
</script>
</body>
</html>



