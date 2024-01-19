<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tipo de ticket</h1>
    <h3>{{$ticket_type->type}}</h3>
    <form action="{{ route('ticket_types.index') }}" method="get" style="display: inline">
        <input type="submit" value="Volver">
    </form>
    <br><br>
    <form action="{{ route('ticket_types.index') }}" method="get">
        <input type="submit" value="Volver a inicio">
    </form>
</body>
</html>