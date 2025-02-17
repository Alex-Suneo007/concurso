<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 30rem;">
        <h2 class="text-center">Registro</h2>
        <form action="{{ url('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Registrar</button>
        </form>
    </div>
</body>
</html>
