<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('usuarios') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('UsuarioController') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('UsuarioController/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h1>Todos los usuarios</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">Creado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuario as $key => $value) {?> 
                <th scope="row">{{ $value->IDUsuario }}</th>
                <td>{{ $value->Nombres }}</td>
                <td>{{ $value->ApellidoPaterno }}</td>
                <td>{{ $value->ApellidoMaterno }}</td>
                <td>{{ $value->Correo }}</td>
                <td>{{ $value->Rol }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('UsuarioController/' . $value->id) }}">Show this Nerd</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('UsuarioController/' . $value->id . '/edit') }}">Edit this Nerd</a>
                    {{ Form::open(array('url' => 'usuarios/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-warning')) }}
                    { Form::close() }}
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>