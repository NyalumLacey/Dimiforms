<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/login-styles.css') }}">  
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <script src="https://kit.fontawesome.com/942404b945.js" crossorigin="anonymous"></script>
    <!--/CSS--> 
</head>

<body>
<!--Content-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="jumbotron jumbotron-fluid float-lg-center text-dark">
                <div class="container-fluid">
                    <h2 class="display-4">Bienvenido de nuevo</h2>
                    <p class="lead">Ingresa tu correo y contraseña para continuar</p>
                    <hr class="my-4">
                    <form action="">
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control" id="pass" placeholder="Ingresa tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<label for="registro">¿No tienes cuenta?</label>
            <button id="registro" class="btn btn-primary" type="text" href="">Regístrate aqui</button:t>
        
<!--/.Content-->
<div id="bg"></div>

<!--Plugins-->
<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<!--/.Plugins-->
</body>

</html>
