<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar tipo de tren</h1>
    <form action="{{ route('train_types.index') }}" method="get">
        <input type="submit" value="Volver a inicio">
    </form>
    <br><br>
    <form action="{{route("train_types.update",['train_type'=>$train_type->id])}}" method="POST">
        @csrf
        {{method_field("PUT")}}
           <label for="type">Tipo: </label>
    <input type="text" name="type" value="{{$train_type->type}}">
    <br><br>
    <input type="submit" value="Editar">
    </form>
</body>
</html>