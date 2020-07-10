<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">  
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <script src="https://kit.fontawesome.com/942404b945.js" crossorigin="anonymous"></script>
    <!--/CSS--> 
</head>

<body class="hidden-sn grey-skin">
<!--Double navigation-->
<header>
    @include('shared.navbar')
    @include('shared.sidebar')
</header>   
<!--/.Double navigation-->
<!--Content-->
<div id="main" class="col-lg-12 pt-1">
    @yield('content')
</div>
<!--/.Content-->

<!--Scripts-->
<script type="text/javascript">
    function openNav() {
        document.getElementById("sidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    $(document).ready(function(){       
        var scroll_start = 0;
        var startchange = $('#startchange');
        var offset = startchange.offset();
        if (startchange.length){
            $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top) {
                $(".navbar-default").css('background-color', '#f0f0f0');
            } else {
                $('.navbar-default').css('background-color', 'transparent');
            }
            });
        }
    });
</script>
<!--/.Scripts-->

<!--Plugins-->
<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<!--/.Plugins-->

</body>

</html>
