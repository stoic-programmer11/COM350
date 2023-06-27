<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Vista de la Pelicula</h2>
    <p>Titulo: {{ $pelicula->titulo }}</p>
    <p>Artistas Principales: {{ $pelicula->artistas_principales }}</p>
    <p>Año de Publicacion: {{ $pelicula->anio }}</p>
    <p>productora: {{ $pelicula->productora }}</p>
    <p>Genero de la pelicula: {{ $pelicula->genero }}</p>

    <a href="{{ route('peliculas.index') }}">Regresar</a>

</body>

</html>