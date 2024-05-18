<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camisas</title>
    @vite(['resources/css/index.css'])
</head>
<body>
    <div id="ndp">
    <h1>{{$prenda ->nombre}}</h1>
    </div>
    <p>{{$prenda -> cantidad}} </p>
    <p>${{$prenda -> precio}} MXN</p>
    <p style="color: {{$prenda -> color}}">{{$prenda -> color}}</p>
    <p>{{$prenda -> categorias[0]->nombre}}</p>

    <a href="/prenda/{{$prenda -> id}}/edit"> Editar </a>
    <form action="/prenda/{{$prenda -> id}}" method="POST">
        @csrf
        @method("DELETE")
        <br>
        <br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
