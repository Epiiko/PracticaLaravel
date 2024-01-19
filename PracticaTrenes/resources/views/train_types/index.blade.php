<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tipo de trenes</h1>
    <form action="{{ route('train_types.create') }}" method="GET">
        <input type="submit" value="Crear nuevo ticket">
    </form>
    <br><br>
    <table border="2">
        <thead>
            <tr>
                <th>Tipos de ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($train_types as $train_type)
                <tr>
                    <td>{{ $train_type->type }}</td>
                    <td>
                        <form action="{{ route('train_types.show', ['train_type' => $train_type->id]) }}"
                            method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('train_types.edit', ['train_type' => $train_type->id]) }}"
                            method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('train_types.destroy', ['train_type' => $train_type->id]) }}"
                            method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <form action="{{ route('trains.index') }}" method="get" style="display: inline">
        <input type="submit" value="Ver trenes">
    </form>
    <form action="{{ route('ticket_types.index') }}" method="get" style="display: inline">
        <input type="submit" value="Ver tipo de tickets">
    </form>
    <form action="{{ route('tickets.index') }}" method="get" style="display: inline">
        <input type="submit" value="Ver tickets">
    </form>
</body>

</html>
