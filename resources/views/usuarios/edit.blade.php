<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita tus datos</title>
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
                    <h2 class="display-4">Edita tus datos, {{ $usuario => Nombres }}</h2>
                    <p class="lead">Ingresa tus datos personales para corrección</p>
                    <hr class="my-4">
                    {{ Form::model($usuario, array('route' => array('usuarios.update', $usuario->IDUsuario), 'method' => 'PUT')) }}
                        <div class="form-group">
                            {{ Form::label('IDUsuario', 'ID') }}
                            {{ Form::text('IDUsuario', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Nombres', 'Nombre(s)') }}
                            {{ Form::text('Nombres', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ Form::label('ApellidoPaterno', 'Apellido Paterno') }}
                                {{ Form::text('ApellidoPaterno', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="col">
                                {{ Form::label('ApellidoMaterno', 'Apellido Materno') }}
                                {{ Form::text('ApellidoMaterno', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            </div>
                        <div class="form-group">
                            {{ Form::label('Rol', 'Rol') }}
                            {{ Form::text('Rol', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Correo', 'Correo') }}
                            {{ Form::text('Correo', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Contrasena', 'Contrasena') }}
                            {{ Form::text('Contrasena', null, array('class' => 'form-control')) }}
                        </div>
                        {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
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
