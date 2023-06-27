<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    
      <table>
     <thead>
        <tr>
          <th>Titulo</th>
          <th>Artistas Principales</th>
          <th>Año de Publicacion</th>
          <th>Productora</th>
          <th>Genero</th>
          <th>Acciones</th>
        </tr>
     </thead>
     <tbody>
        <!-- $peliculas viene de PeliculaController.php -->
        @foreach($peliculas as $pelicula)
        <tr>
          <td>{{ $pelicula->titulo }}</td>
          <td>{{ $pelicula->artistas_principales }}</td>
          <td>{{ $pelicula->anio }}</td>
          <td>{{ $pelicula->productora }}</td>
          <td>{{ $pelicula->genero }}</td>
          <td>
             <a href="{{ route('peliculas.show', $pelicula->id) }}">Ver</a>
             <a href="{{ route('peliculas.edit', $pelicula->id) }}">Editar</a>
             <!-- // Mandamos el eliminar por post -->
             <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
             </form>
          </td>
        </tr>
        @endforeach
     </tbody>
      </table>
      <a href="{{ route('peliculas.create') }}">Crear</a>
</body>

</html>