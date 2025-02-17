<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con los médicos (una especialidad puede tener muchos médicos)
    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }
}
