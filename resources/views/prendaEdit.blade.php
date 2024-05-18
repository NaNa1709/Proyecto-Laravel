<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cargar camicha</title>
    @vite(['resources/css/index.css'])
</head>
<body>
    <form action="/prenda/{{$prenda -> id}}" method="POST">
        @csrf
        @method("PUT")
        <div id="mp">
        <h1>Modificar prenda </h1>
        </div>
        <label for="nom"> Nombre de la prenda </label>
        <input type="text" name="nombre" id="nom"  value="{{$prenda -> nombre}}" required>
        <br>
        <br>
        <label for="can"> Cantidad de prenda </label>
        <input type="number" name="cantidad" id="can" value="{{$prenda -> cantidad}}" required>
        <br>
        <br>
        <label for="pre"> Precio de prenda </label>
        <input type="number" name="precio" id="pre" value="{{$prenda -> precio}}" required>
        <br>
        <br>
        <label for="col"> Color de prenda </label>
        <input type="color" name="color" id="col" value="{{$prenda -> color}}" required>

        <select name="categorias" id="">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria -> id}}"
                @if ($prenda -> categorias[0] -> id == $categoria -> id) selected @endif
                > {{$categoria -> nombre }}</option>
            @endforeach
        </select>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
