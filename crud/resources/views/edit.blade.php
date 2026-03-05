<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>

<h2>Editar Usuario</h2>

<form action="{{ route('usuarios.update', $crud->codigo) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Código:</label><br>
    <input type="text" name="codigo" value="{{ $crud->codigo }}" readonly><br><br>

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ $crud->nombre }}" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" value="{{ $crud->correo }}" required><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('usuarios.index') }}">Atrás</a>

</body>
</html>