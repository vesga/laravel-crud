<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Inscripción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Formulario de Inscripción</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Código</label>
                                <input type="text" name="codigo" class="form-control" placeholder="Ej: 1234" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre del usuario" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo Electrónico</label>
                                <input type="email" name="correo" class="form-control" placeholder="ejemplo@correo.com" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Guardar Registro</button>
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