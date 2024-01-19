<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar tipo ticket</h1>
    <form action="{{ route('ticket_types.index') }}" method="get">
        <input type="submit" value="Volver a inicio">
    </form>
    <br><br>
    <form action="{{route("ticket_types.update",['ticket_type'=>$ticket_type->id])}}" method="POST">
        @csrf
        {{method_field("PUT")}}
           <label for="type">Tipo: </label>
    <input type="text" name="type" value="{{$ticket_type->type}}">
    <br><br>
    <input type="submit" value="Editar">
    </form>
</body>
</html>