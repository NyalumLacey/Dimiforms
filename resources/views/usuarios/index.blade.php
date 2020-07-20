@section('content')
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h1>Usuario</h1>
    <div class="jumbotron-fluid"></div>
    
        <tbody>
            @foreach ($usuarios as $key => $value) {?> 
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