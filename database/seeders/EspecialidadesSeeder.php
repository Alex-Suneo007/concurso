<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    public function run()
    {
        $especialidades = [
            'Cardiología',
            'Pediatría',
            'Dermatología',
            'Ginecología',
            'Oftalmología',
            'Medicina General'
        ];

        foreach ($especialidades as $especialidad) {
            Especialidad::create(['nombre' => $especialidad]);
        }
    }
}
