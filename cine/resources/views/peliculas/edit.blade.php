<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Edit de Pelicula</h2>
  <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="titulo">titulo</label>
    <input type="text" name="titulo" id="titulo" value="{{ $pelicula->titulo }}">
    <br>
    <label for="artistas_principales">Artistas Principales</label>
    <input for="artistas_principales" name="artistas_principales" id="artistas_principales" value="{{ $pelicula->artistas_principales }}">
    <br>
    <label for="anio"> Año de Publicacion</label>
    <input type="number" name="anio" id="anio" value="{{ $pelicula->anio }}">
    <br>
    <label for="productora">Productora</label>
    <input type="text" name="productora" id="productora" value="{{ $pelicula->productora }}">
    <br>
    <label for="genero">Genero</label>
    <input type="text" name="genero" id="genero" value="{{ $pelicula->genero }}">
    <br>
    <button type="submit">Guardar</button>
</body>

</html>