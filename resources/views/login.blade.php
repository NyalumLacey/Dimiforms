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
    <div id="bg"></div>
<!--Content-->
    <div class="jumbotron-fluid float-lg-center text-dark">
            <div class="container-fluid">
                <h2 class="display-4">Bienvenido de nuevo</h2>
                <p class="lead">Ingresa tu correo y contraseña para continuar</p>
                <hr> 
                <form action="{{ route('usuario_login') }}" method="POST">
                    <input type="hidden" name="_token"content="{{ csrf_token() }}"></input>
                    <div class="form-group" {{ $errors->has('correo') ? 'has-error' : ''}}>
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo" value="{{ old('correo')}}">
                        {!! $errors->first('correo', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group" {{ $errors->has('password') ? 'has-error' : ''}}>
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn-block submit-button">Ingresar</button>
                </form>
                <hr>
                <label for="registro">¿No tienes cuenta?</label> <br>
                <a role="button" id="registro" class="btn btn-outline-dark" type="text" href="{{route('display_signup')}}">Regístrate aqui</a>
                <br>
            </div>
        </div>        
<!--/.Content-->

<!--Plugins-->
<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>        
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<!--/.Plugins-->
</body>

</html>
