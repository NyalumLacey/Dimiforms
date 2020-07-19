<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--Bootstrap, Jquery, Pooper, FontAwesome-->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <script src="https://kit.fontawesome.com/942404b945.js" crossorigin="anonymous"></script>
    <!--/Bootstrap, Jquery, Pooper, FontAwesome--> 

    <style>
        .dropdown-toggle::after {
            content: none;
        }
    </style>
</head>

<body class="hidden-sn grey-skin">
<!--Double navigation-->
<header>
    @include('shared.navbar')
    @include('shared.sidebar')
</header>   
<!--/.Double navigation-->
<!--Content-->
<main id="main" class="col-lg-12 pt-1">
    @yield('content')
</main>
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

<script type="text/javascript">
    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    
    $(document).ready(function() {
// SideNav Button Initialization
$(".button-collapse").sideNav2();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
var ps = new PerfectScrollbar(sideNavScrollbar);
});
    
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
    });
    }
</script>
<!--/.Scripts-->


@include('shared.modal-crear')
@include('shared.modal-editar')

<!--Plugins-->
<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<!--/.Plugins-->

</body>

</html>
