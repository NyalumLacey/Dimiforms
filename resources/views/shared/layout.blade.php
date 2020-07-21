<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    
    <!--Bootstrap, Jquery, Pooper, FontAwesome-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/dimiforms-styles.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">  
    <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">   
    <script src="https://kit.fontawesome.com/942404b945.js" crossorigin="anonymous"></script>
    
    <!--/Bootstrap, Jquery, Pooper, FontAwesome--> 

    <style>
        .dropdown-toggle::after {
            content: none;
        }
    </style>
</head>

<body class="hidden-sn grey-skin">
    <div>
    <example-component></example-component>
        <!--Double navigation-->
        <header>
            @include('shared.navbar')
            @include('shared.sidebar')
        </header>   
        <!--/.Double navigation-->

        <!--Content-->
        <main id="main" class="container-fluid">
            @yield('content')
        </main>
        <!--/.Content-->

        <!--Modales-->
        @include('shared.modal-crear')
        @include('shared.modal-editar')
        <!--/.Modales-->
    </div>

    <!--Plugins-->
    <script src="{{ asset('resources/js/scripts.js') }}"></script>
    <script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--/.Plugins-->

        <!--Scripts-->
        <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());

        gtag('config', 'UA-92610751-3');

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

        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
                }
            }
        }
        </script>
        <!--/.Scripts-->
</body>
</html>
