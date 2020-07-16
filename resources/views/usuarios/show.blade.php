<!DOCTYPE html>
<html>
<head>
    <title>Usuario por ID</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('usuarios') }}">Control de usuarios</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('usuarios') }}">Ver usuarios</a></li>
        <li><a href="{{ URL::to('usuarios/create') }}">Crear usuario</a>
    </ul>
</nav>

<h1>Mostrando a {{ $usuario->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $usuario->name }}</h2>
        <p>
            <strong>Apellido Paterno:</strong> {{ $usuario->ApellidoPaterno }}<br>
            <strong>Apellido Materno:</strong> {{ $usuario->ApellidoMaterno }}
            <strong>Correo:</strong> {{ $usuario->Correo }}
            <strong>Contrasena:</strong> {{ $usuario->Contrasena }}
            <strong>Rol:</strong> {{ $usuario->Rol }}
        </p>
    </div>
</div>
</body>
</html>