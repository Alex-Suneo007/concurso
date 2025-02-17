<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id', 'medico_id', 'sala_id', 'fecha_hora', 'estado',
    ];

    // Relación con el paciente (una cita pertenece a un paciente)
    public function paciente()
    {
        return $this->belongsTo(User::class, 'paciente_id');
    }

    // Relación con el médico (una cita pertenece a un médico)
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    // Relación con la sala (una cita pertenece a una sala)
    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
}
