<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 35rem;">
        <h2 class="text-center mb-4">Agendar Cita</h2>
        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="medico" class="form-label">Médico:</label>
                <select name="medico_id" id="medico" class="form-select" required>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id }}">{{ $medico->user->name }} - {{ $medico->especialidad->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="sala" class="form-label">Sala:</label>
                <select name="sala_id" id="sala" class="form-select" required>
                    @foreach($salas as $sala)
                        <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_hora" class="form-label">Fecha y Hora:</label>
                <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <select name="estado" id="estado" class="form-select">
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success w-100">Agendar Cita</button>
        </form>
    </div>
</body>
</html>
