<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Editar Pelicula</h2>
    <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $pelicula->nombre }}">
        <label for="artistas_principales">Artistas Principales</label>
        <input type="text" name="artistas_principales" id="artistas_principales" value="{{ $pelicula->artistas_principales }}">
        <label for="anio">Año de Publicacion</label>
        <input type="number" name="anio" id="anio" value="{{ $pelicula->anio }}">
        <label for="productora">Productora</label>
        <input type="text" name="productora" id="productora" value="{{ $pelicula->productora }}">
        <label for="genero">Genero</label>
        <button type="submit">Guardar</button>
  
</body>

</html>