<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Editar Registro</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" name="codigo" class="form-control" value="{{ $usuario->codigo }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" name="correo" class="form-control" value="{{ $usuario->correo }}" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-warning">Actualizar Cambios</button>
                                <a href="{{ route('usuarios.index') }}" class="btn btn-link text-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>