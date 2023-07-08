<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Curso de laravel ┘</title>
        <style>
    body {
        margin: auto;
        padding: 50px;
        background-color: aliceblue;
    }
    table {
        border-collapse:collapse;
        width: 100%;
    }
    table, td, th {
        border: 1px solid black;
    }
        </style>
    </head>
    <body>
        
        <h2>Listado de Usuarios Registrados *</h2>
        <table>
            <tr>
                <th>Nombres </th>
                <th>Apellidos</th>
                <th>Tipo Id</th>
                <th>Identificacion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Profesión</th>
                <th>Rol</th>
            </tr>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombres }}</td>
                    <td>{{ $usuario->apellidos }}</td>
                    <td>{{ $usuario->tipoId }}</td>
                    <td>{{ $usuario->identificacion }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->emailUser }}</td>
                    <td>{{ $usuario->profesion }}</td>
                    <td>{{ $usuario->rol }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>