<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cargar camisa</title>
    @vite(['resources/css/index.css'])
</head>
<body>
    <form action="/prenda" method="POST">
        @csrf
        <div id="mp">
        <h1>Crear prenda </h1>
        </div>
        <label for="nom"> Nombre de la prenda </label>
        <input type="text" name="nombre" id="nom" required>
        <br>
        <br>
        <label for="can"> Cantidad de prenda </label>
        <input type="number" name="cantidad" id="can" required>
        <br>
        <br>
        <label for="pre"> Precio de prenda </label>
        <input type="number" name="precio" id="pre" required>
        <br>
        <br>
        <label for="col"> Color de prenda </label>
        <input type="color" name="color" id="col" required>
        <select name="categorias" id="">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria -> id}}"> {{$categoria -> nombre }}</option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
