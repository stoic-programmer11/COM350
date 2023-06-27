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
        <th>Nombre</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- $editoriales viene de EditorialController.php -->
      @foreach($editoriales as $editorial)
      <tr>
        <td>{{ $editorial->nombre }}</td>
        <td>
          <a href="{{ route('editoriales.show', $editorial->id) }}">Ver</a>
          <a href="{{ route('editoriales.edit', $editorial->id) }}">Editar</a>
          <!-- // Mandamos el eliminar por post -->
          <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('editoriales.create') }}">Crear</a>
</body>

</html>