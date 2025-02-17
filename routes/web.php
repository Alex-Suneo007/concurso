<?php

use App\Models\Medico;
use App\Models\Sala;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/citas/create/{medico}', function ($medico) {
    $medico = Medico::with('user', 'especialidad')->findOrFail($medico);
    $salas = Sala::all();
    return view('citas.create', compact('medico', 'salas'));
})->name('citas.create');

Route::post('/citas', function () {
    // Aquí se agregará la lógica para almacenar la cita en la base de datos.
    $cita = new \App\Models\Cita();
    $cita->paciente_id = auth()->id();
    $cita->medico_id = request('medico_id');
    $cita->sala_id = request('sala_id');
    $cita->fecha_hora = request('fecha_hora');
    $cita->estado = request('estado');
    $cita->save();

    return redirect('/medicos')->with('success', 'Cita agendada con éxito');
})->name('citas.store');

// Rutas de autenticación
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');