<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con las citas (una sala puede tener muchas citas)
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
