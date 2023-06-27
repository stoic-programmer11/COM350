<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Crear Pelicula</h2>
    <form action="{{ route('peliculas.store') }}" method="POST">
        @csrf
        <label for="titulo">titulo</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="artistas_principales">Artistas Principales</label>
        <input for="artistas_principales" name="artistas_principales" id="artistas_principales">
        <br>
        <label for="anio"> Año de Publicacion</label>
        <input type="number" name="anio" id="anio">
        <br>
        <label for="productora"> Productora</label>
        <input for="productora" name="productora" id="productora">
        <br>
        <label for="genero"> Genero</label>
        <input for="genero" name="genero" id="genero">
        <br>
        <button type="submit">Guardar</button>
  
</body>

</html>