<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Editar Editorial</h2>
  <form action="{{ route('editoriales.update', $editorial->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $editorial->nombre }}">
    <button type="submit">Guardar</button>
</body>

</html>