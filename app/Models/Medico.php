<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'especialidad_id', 'telefono',
    ];

    // Relación con el usuario (un médico es un usuario)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con la especialidad
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    // Relación con las citas (un médico puede tener muchas citas)
    public function citas()
    {
        return $this->hasMany(Cita::class, 'medico_id');
    }
}
