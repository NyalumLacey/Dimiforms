<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
                    <h2 class="display-4">Registrate</h2>
                    <p class="lead">Ingresa tus datos personales para registrarte</p>
                    <hr class="my-4">
                    <form action="{{ route('usuario_registro') }}" method="POST">
                        <input type="hidden" name="_token"content="{{ csrf_token() }}"></input>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="apaterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Apellido Paterno">
                            </div>
                            <div class="col">
                                <label for="amaterno">Apellido Materno</label>
                                <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Apellido Materno">
                            </div>
                        </div>
                        <div class="form-group">
                            </div>
                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <select class="form-control" id="rol" name="rol" placeholder="¿Cuál es tu puesto?">
                                <option value="2">Asociado</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                        </div>
                        <div class="form-group">
                            <label for="passchecker">Confirma tu contraseña</label>
                            <input type="password" class="form-control" id="passchecker" name="passchecker" placeholder="Ingresa de nuevo tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.Content-->
<div id="bg"></div>

<!--Plugins-->
<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<!--/.Plugins-->
</body>

</html>
