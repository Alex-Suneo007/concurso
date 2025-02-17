<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Médicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Listado de Médicos</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicos as $medico)
                <tr>
                    <td>{{ $medico->user->name }}</td>
                    <td>{{ $medico->especialidad->nombre }}</td>
                    <td>{{ $medico->telefono }}</td>
                    <td>
                        <a href="{{ route('citas.create', $medico->id) }}" class="btn btn-primary btn-sm">Agendar Cita</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
