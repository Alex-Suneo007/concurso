<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow-lg">
            <h1 class="text-center">Bienvenido, {{ auth()->user()->name }}!</h1>
            <p class="text-center">Has iniciado sesión correctamente.</p>
            <div class="text-center">
                <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
