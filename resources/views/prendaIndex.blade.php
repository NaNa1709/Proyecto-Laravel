<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todas las camichas</title>
    @vite(['resources/css/index.css'])
</head>
<body>
    <div id="mp">
    <h1>Prendas</h1>
    </div>
    <a id="una" href="/prenda/create"> Crear prenda</a>
    <br>
    <br>
    <table id="tab">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Color</th>
                <th> categoria</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prendas as $p)
                <tr>
                    <td>{{$p -> nombre}}</td>
                    <td>{{$p -> cantidad}}</td>
                    <td>${{$p -> precio}} MXN</td>
                    <td style="color:{{$p -> color}} ">{{$p -> color}}</td>
                    <td>{{$p -> categorias[0] -> nombre }}</td>
                    <td><a href="/prenda/{{$p -> id}}"> ver</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
