<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    // Relación con las citas (un paciente puede tener muchas citas)
    public function citas()
    {
        return $this->hasMany(Cita::class, 'paciente_id');
    }

    // Relación con el médico (un usuario puede ser un médico)
    public function medico()
    {
        return $this->hasOne(Medico::class);
    }
}
